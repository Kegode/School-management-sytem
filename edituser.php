<?php
include ("connection.php");
include ('header.php');
$query = "SELECT id,Email,Password FROM 'users';";
$result = @mysqli_query($link,$query);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Students</title>
    <style type="text/css">
        body{
            margin-bottom: 60px;
        }
        .container{
            height: 100%;
            margin: 10px 20px;
            border: 2px solid black;
        }
        #table{
            border: 2px solid black;
            width: 1312px;
            margin: 10px 20px;
            padding: 14px 14px 0px 14px;
        }
        .heading{
            font-weight: bold;
            font-size: 30px;
            text-decoration: underline;
        }
        .information{
            padding: 10px 20px;

        }
        #delete:hover{
            font-weight: bold;
            text-decoration: underline;
        }
        #results{
            font-weight: bold;
            font-size: 50px;
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php
//$n=1;
//if(array_key_exists("searchstudentinfo", $_POST)){
//    $firstname = $_POST["firstname"];
//    $lastname = $_POST["lastname"];
//    $query = "SELECT id,First_Name,Last_Name,Religion,Gender, Date_of_birth,Phone_No,County,Address,Joining_Date,Designation,Status,Father_Name,Father_Mobile_No,Father_Profession FROM 'students' WHERE First_Name='$firstname' || Last_Name='$lastname';";
//    $result = @mysqli_query($link,$query);
//
//
//}
//
//?>
<button type="button" onclick="window.location.href = 'adminpage.php'" class="btn btn-primary">Return To Main Page</button>
<div id="table">
    <span id="results">RESULTS</span>
    <table class="table table-striped table-dark col-md-6">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th


        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)){
        ?>


        <tr class='<?php if(isset($classname)) echo $classname;?>'>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['Email']?></td>
            <td><?php echo $row['Password']?></td>
            <td><a href='edit-userprocess1.php?id=<?php echo $row['id'];?>'>Update</a></td>
        </tr>;
    </table>
    <?php
    }
    ?>


    <?php @mysqli_free_result($result); ?>

</div>

</body>
</html>




