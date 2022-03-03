<?php
$error = "";
if(array_key_exists('submit', $_POST))
{
    include("connection.php");
    if (!$_POST['email'])
    {
        $error = "An email address is required";

    }
    if (!$_POST['password'])
    {
        $error = "Password  is required";

    }
    if($error != "")
    {
        $error = "There are errors";
    }
    else
        {
        $query = "select*from users where email = '".mysqli_real_escape_string($link, $_POST['email'])."'";
        $result = mysqli_query($link, $query);
        $row = mysqli_fetch_array($result);
        if(@$row['Email']!= $_POST['email']) {
            $error = ".There are errors in your Form:<br>";
            $error = "Your email is wrong please try again";
        }
        if(isset($row)){
            if($row['password']==$_POST['password']){
                header("Location: mainpage.php");
            }
            else{
                $error = ":There are errors in your form:<br>";
                $error ="Your password is wrong! Please try again";
            }
        }
        }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Golden tots school login form</title>
    <!--Connection to Bootstrap JS-->
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>

    <!---Connection to Bootstrap CSS--->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/style.css">

    <style type="text/css">
        .container{
            text-align: :center;
            width:450px;
            margin-top: 170px;
            font-family: Times,"Times New Roman", serif;
            border: 5px solid #D54B42;
            padding: 5px 15px;
            border-style: outset;
            background: url(assets/images/homebackground.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;

        }
        html{
            background: url(assets/images/homebackground.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;

        }
        body{
            font-family: Times,"Times New Roman", serif;
            font-weight: bold;
            font-size: 150%;
            position: relative;
            top: 8px;

        }

    </style>
</head>
<body>
<nav class="navbar fixed-top navbar navbar-dark bg-dark">
    <p>THE GOLDEN TOTS SCHOOL</p>
    <P>WE LEARN TO IMPART</P>
</nav>
<div class="container">
    <h1 class="heading">Login Page</h1>
    <h2 class="heading1">The Golden tots School</h2>
    <form action="" method="post">
        <fieldset class="form-group">
            <input type="email" class="form-control border" required name="email" placeholder="Enter email">
        </fieldset>
        <fieldset class="form-group">
            <input type="password" class="form-control border" required name="password" placeholder="Enter Password">
        </fieldset>
        <fieldset class="form-group">
            <input type="submit" class="btn btn-dark"  name="submit" value="LOg In">
        </fieldset>
        <div class="error"><?php
            if ($error!=""){
            echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';

        }?>


        </div>
    </form>

</div>

</body>
</html>
