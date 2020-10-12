<?php
require "db.php" ;
session_start();

extract($_POST) ;
$nm= $_POST['nick'];
$_SESSION['name']= $nm;
//INSERT INTO `nickinuse` (`id`, `nick`) VALUES (NULL, 'eee'), (NULL, 'er');
//var_dump($_POST);
if ( $_SERVER["REQUEST_METHOD"] == "POST") {
    $sql1="SELECT Count(*) FROM nickinuse WHERE nick=$nm";
    try{
    $stmt1 = $db->prepare($sql1) ;
    $stmt1->execute() ;
    $stmt1 = $stmt1->fetchAll();

  }catch(PDOException $ex) {
  }
  var_dump($_SESSION);
    var_dump($_POST['nick']);
    $sql = "insert into nickinuse (id, nick) values (NULL, ?)" ;
  
      $stmt = $db->prepare($sql) ;
      $stmt->execute([$_POST['nick'] ?? ""]) ;
    
}

header("Location: index.php") ;

