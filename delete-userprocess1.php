<?php
ob_start();
include ("connection.php");
$sql = "DELETE FROM users WHERE id='".$_GET["id"]. "'";
if(mysqli_query($link, $sql)){
    header("location:deleteuser.php");
}else{
    echo "Error deleting record";
}

?>

