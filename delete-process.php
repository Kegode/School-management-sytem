<?php
ob_start();
include ("connection.php");
$sql = "DELETE FROM students WHERE id='".$_GET["id"]. "'";
if(mysqli_query($link, $sql)){
    header("location:deletestudent.php");
}else{
    echo "Error deleting record";
}

?>

