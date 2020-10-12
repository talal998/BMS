<?php
require "db.php" ;
$id = $_GET["id"] ;

echo $id;

$sql = "DELETE FROM `bookmark` WHERE id=$id;";
$result = mysqli_query($conn,$sql);

if($result)
{
    echo "Success!";
}
else
{
    die(mysqli_error($conn));   
}
header("Location: bookmark.php");

?>
