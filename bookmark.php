<?php
    require "./db.php";
    

    if (empty($_GET)) {
        $id = "created";
        $add=false; 

    }
    else if (($_GET['add'])){ 
        $add=true; 
        $id = ($_GET['sort']);} 
    else{
        $id = ($_GET['sort']);
        $add=false; 

    }

    $sql = "select title, name, note, url, bookmark.id, created from bookmark, user
    where bookmark.owner=user.id
    order by $id" ;  // fixed query
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);



    $ssql = "select title, name, note, url, bookmark.id, created from bookmark, user
    where bookmark.owner=user.id
    " ;  // fixed query
    $sresult = mysqli_query($conn, $ssql);
    $sresultCheck = mysqli_num_rows($sresult);



    $sql1 = "select name, id from user" ;  // fixed query
    $result1 = mysqli_query($conn, $sql1);
    $resultCheck1 = mysqli_num_rows($result1);


    
    $sql1 = "select COUNT(*) from bookmark order by id" ;  // fixed query
    $count = mysqli_query($conn, $sql1);
    $count=mysqli_fetch_array($count,MYSQLI_ASSOC);
    $count = ($count["COUNT(*)"]);
    $i = 0;


     

    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm 2</title>
    
    <style>
       
    #tableID{
        table-layout:fixed;
        
    } 
    #tableID tr{
        height: 80px;        
    } 
    .turnc{
        white-space: nowrap;
        overflow: hidden; text-overflow: ellipsis;
        
    } 
    #toast-container {
                top: auto !important;
                right: auto !important;
                bottom: 10%;
                left: 45%;
            }


    </style>
</head>
<body>
    <nav> 
        <div class="nav-wrapper" >
            <a href="index.php" style="float:right; padding-left:5%" class="brand-logo"><i class="material-icons"></i>NICK CHAT</a>
        <div id="bookmrk" onclick="location.href='bookmark.php'">

                <a  style="float:right; padding-right:5%" >FINAL</a>
                <a   style="float:right; margin-right:-50px" ><i class="material-icons"></i>Talal Ahmad</a>
  
            </div>
            
        </div>
    </nav>


    
      
    <div id="base" style="float:right; margin-top:15%">

    <form name="myForm" action="add.php"  onsubmit="return validateForm()" method="post"   >

        <a class="btn-floating btn-large waves-effect waves-light red btn modal-trigger" href="#modalP"><i class="material-icons">add</i></a>
        <div id="modalP" class="modal">
            <div class="modal-content">
                <h4 style="text-align:center">Chose Nickname</h4>


                <div class="input-field col s12">
                    <input placeholder="Nick" name="nick" id="nick" value="" type="text">
                </div>
               
            
            </div>
            <div class="modal-footer">
        
                <button class="btn waves-effect waves-light" name="submit" type="submit">ADD
                <i class="material-icons right">send</i>
                </button>
               

                
            </div>

        </div> 

       
    </div>



    
  </div>


  <?php for($i = 0; $i<$count;$i++){     
      $scount=mysqli_fetch_array($sresult,MYSQLI_ASSOC);
 ?>
        <div>
            <div id="modal<?=$scount["id"]?>" class="modal">
                <div class="modal-content">
                    <h4 style="text-align:center">New Bookmark</h4>
                    <table>
                            <tr>
                                <td>Owner:</td>
                                <td><?= $scount["name"];?></td>
                            </tr>
                            <tr>
                                <td>Title:</td>
                                <td><?= $scount["title"]?></td>
                            </tr>
                            <tr>
                                <td>Notes:</td>
                                <td><?= $scount["note"]?></td>
                            </tr>
                            <tr>
                                <td>URL:</td>
                                <td><?= $scount["url"]?></td>
                            </tr>
                            <tr>
                                <td>Date:</td>
                                <td><?= $scount["created"]?></td>
                            </tr>
                        </table>

                    


                
            
            </div>
            <div class="modal-footer">
        
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
                
            </div>

        </div>
        <?php } ?>

        <?php if($add){?>
        <script>
           $(document).ready(function(){ M.toast({html: 'Bookmark Added!'});});
            
            
        </script>
   <?php }?>
  <script>
               
        $(function(){

            $('.modal').modal();
            $('#modalP').modal('open'); 


 
           
        });

        
    </script>
</body>

</html>