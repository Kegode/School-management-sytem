<?php
ob_start();
include("connection.php");
include ("header.php");
if (array_key_exists("submituserinfo", $_POST))
{
    $email = $_POST["email"];
    $password = $_POST["password"];
    $query = "INSERT INTO 'users'('Email','Password')
              VALUES ('$email','$password')"   ;
    $run = mysqli_query($link, $query);
    echo "<div id='alert' class='alert alert-success'role='alert'>
User Inserted
</div>";

}
//include ("footer.php");
?>
<style type="text/css">
    body{
        margin-bottom: 60px;

    }
    #alert{
        padding-left: 46%;
    }
    #container{
        height: 100%;
        margin: 10px 20px;
        border: 2px solid black;
        padding: 12px 12px;
    }
    .heading{
        font-weight: bold;
        font-size: 30px;
        text-decoration: underline;
    }
    .information{
        padding: 10px 20px;
    }
    label{
        font-weight: bold;
    }

</style>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Employee</title>
</head>
<body>
<div id="container">
    <form action="" method="post">
        <span class="heading">User  Information :</span>
        <div id="student" class="information">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputemail">Email :</label>
                    <input type="email" name="email" required class="form-control" id="email" placeholder="Enter Email">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputpassword">Password :</label>
                    <input type="password" name="password" required class="form-control" id="password" placeholder="Enter Password">
                </div>
            </div>
            <div style="margin-top: 20px">
                <fieldset class="form-group">
                    <input type="submit" style="margin-left: 43%;" class="btn btn-dark" name="submituserinfo" value="Add User">
                </fieldset>
            </div>




        </div>





</form>
<button type="button" onclick="window.location.href = 'adminpage.php'" class="btn btn-primary">Return To Main Page</button>

</div>

</body>
</html>

