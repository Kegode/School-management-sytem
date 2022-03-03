<?php
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_db="our_shop";
$link = mysqli_connect($mysql_host, $mysql_user, $mysql_password,$mysql_db);
if(mysqli_connect_error())
{
    die('User cannot connect to the Database! Try Again');
}
else
    {
    mysqli_select_db($link,'goldentotsschool');
}

