<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final</title>
    <style>
            


    </style>
    <script src="js/Bookmark.js"></script>

</head>
<body>
    <?php  session_start(); require "db.php" ;


 
 $messages = $db->query("SELECT * FROM 	messages order by created desc")->fetchAll(PDO::FETCH_ASSOC) ;

 ?>
    <nav> 
        <div class="nav-wrapper" >
            <a href="index.php" style="float:right; padding-left:5%" class="brand-logo"><i class="material-icons">cached</i></a>
        <div id="bookmrk" onclick="location.href='bookmark.php'">

                <a  style="float:right; padding-right:5%" ><?= $_SESSION['name']?></a>
                <a href="close.php"  style="float:right; margin-right:-50px" ><i class="material-icons">close</i>Talal Ahmad</a>
  
            </div>
            
        </div>
    </nav>


    <div id="base">
        <table style="color:black">
        <?php foreach($messages as $mg)   : 
?>
          <tr>
          <td> <?= $mg['created']?></td> <td> <?= $mg['nick'] ?>' says:</td> <td> <?= $mg['content'] ?></td>
          </tr>
          
        
          <?php  endforeach 
          ?>
        </table>
        <form name="myForm" action="addM.php"  onsubmit="return validateForm()" method="post">
       <div class="row">
       <div class="input-field col s6" style="border: 0px solid red;  margin-left:23% " >
          <input id="icon_prefix2" name="send" class="materialize-input" ></input>

               <button class="btn waves-effect waves-light" type="submit" >Send
               </button>
           
           </div>

       </div>
   </form>        

    </div>
</body>
</html>