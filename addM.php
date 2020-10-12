<?php
require "db.php" ;
session_start();

extract($_POST) ;
var_dump($_POST);
//INSERT INTO `nickinuse` (`id`, `nick`) VALUES (NULL, 'eee'), (NULL, 'er');
//var_dump($_POST);
// if ( $_SERVER["REQUEST_METHOD"] == "POST") {
//     $sql1="SELECT Count(*) FROM nickinuse WHERE nick=$nm";
//     try{
//     $stmt1 = $db->prepare($sql1) ;
//     $stmt1->execute() ;
//     $stmt1 = $stmt1->fetchAll();

//   }catch(PDOException $ex) {
//   }
//   var_dump($_SESSION);
//     var_dump($_POST['nick']);
    $sql = "insert into messages (nick, content) values (? ,?)" ;
  
      $stmt = $db->prepare($sql) ;
      $stmt->execute([$_SESSION['name'], $_POST['send'] ?? ""]) ;
    
// }

header("Location: index.php") ;

