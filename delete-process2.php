<?php
ob_start();
include ("connection.php");
$sql = "DELETE FROM faculty WHERE id='".$_GET["id"]. "'";
if(mysqli_query($link, $sql)){
    header("location:deleteemployee.php");
}else{
    echo "Error deleting record";
}

?>
