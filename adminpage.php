<?php
include ("header.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!--Connection to Bootstrap JS-->
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>

    <!---Connection to Bootstrap CSS--->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/style.css">

    <style type="text/css">
        #container{
            border: 2px solid black;
            width: 1312px;
            margin: 20px 0px 20px 25px;
            padding: 14px 14px 5px 14px;
        }
        #container1{
            border: 2px solid black;
            width: 1312px;
            margin: 20px 0px 20px 25px;
            padding: 14px 14px 10px 14px;
            height: 100%;

        }
        span{
            font-size: 30px;
            text-decoration: underline;
            margin-left: 15px;
        }
        span:hover{
            font-size: 35px;
            color: #4169E1;

        }
        .results{
            font-weight:bold;
            font-size: 35px;
            text-decoration: none;
        }
        #students{
            float: left;
            text-align: center;
        }
        .text{
            font-size: 20px;
            text-align: left;
        }
        #faculty{
            text-align: center;
        }
        .label{
            font-size: 35px;
            text-decoration: underline;
            margin-left:60px;
        }
        .label:hover{
            text-decoration: none;
            color: #4169E1;
            font-size: 40px;
        }
        .v1{
            border-left: 3px solid grey;

            height: 200px;
            margin-left: 12px;
            margin-right: 20px;
        }
        img{
            width: 35px;
            height: 27px;
            margin-right: 10px;
        }
        .ul{
            margin-left: 160px;

        }

    </style>
</head>
<body>

<div id="container1">
    <label class="label" style="margin-left:0px">Quick Options</label>
    <div class="mb-4">
        <div><span><img src="assets/images/students.jpg" alt="students">Administration:</span></div>
        <div class="float">
            <button type="button" onclick="window.location.href ='insertuser.php'" class="btn btn-primary">ADD USER</button>
            <button type="button" onclick="window.location.href ='deleteuser.php'" class="btn btn-secondary">DELETE USER</button>
            <button type="button" onclick="window.location.href ='edituser.php'" class="btn btn-success">EDIT USER</button>
            <button type="button" onclick="window.location.href ='allusers.php'" class="btn btn-danger">ALL USER RECORD</button>

        </div>
    </div>





</div>

</body>
</html>





