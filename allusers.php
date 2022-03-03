<?php
include ("connection.php");
include ('header.php');
$count ="0";
if (array_key_exists("search", $_POST)) {
    $email = $_POST["email"];
    $password = $_POST["password"];


    $query = "SELECT id,Email,Password FROM 'users' WHERE Email='$email'|| Password='$password'
                     ORDER BY class asc";
    $result = @mysqli_query($link, $query);
}else
    {
    $query = "SELECT * FROM 'users' ORDER BY class DESC ";
    $result = @mysqli_query($link, $query);

}
//include ("footer.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Students</title>
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
            margin: 20px 10px 70px 10px;
            padding: 14px 14px 50px 14px;
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
        .results{
            font-weight: bold;
            font-size: 35px;
            text-decoration: underline;
        }
    </style>
</head>
<body>
<button type="button" onclick="window.location.href = 'adminpage.php'" class="btn btn-primary">Return To Main Page</button>

<div id="table">
    <span class="results">All  Students Information</span>
    <table class="table table-striped table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">EMAIL</th>
            <th scope="col">PASSWORD</th>


        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)){
            $count = $count+1;
            ?>


            <tr >
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['Email']?></td>
                <td><?php echo $row['Password']?></td>


            </tr>;

        <?php } ?>
        <div style="height: 40px; font-size: 20px" class="progress" >
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%;"aria-valuenow="25"aria-valuemin="0"
                 aria-valuemax="100">Total Students<?php echo $count;?>

            </div>
        </div>


    </table>
    <?php @mysqli_free_result($result); ?>

</div>

</body>
</html>






