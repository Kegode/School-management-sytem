<?php
include ("connection.php");
include ('header.php');
$count ="0";
$query = "SELECT id,First_Name,Last_Name,Religion,Gender, Date_of_birth,County,Address,Joining_Date,Designation,Status,Father_Name,Father_Mobile_No,Father_Profession FROM students WHERE Status='active';";
$result = @mysqli_query($link,$query);
//include ("footer.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Active Students</title>
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
<div class="container">
    <form action="" method="post">
        <span class="heading">Enter Required Information</span>
        <div class="information" id="student">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputfirstname">First Name</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputlastname">Last Name</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name">
                </div>
            </div>
            <div style="margin-top: 20px">
                <fieldset class="form-group">
                    <input type="submit" style="margin-left: 43%;" class="btn btn-dark" name="searchstudentinfo" value="Search The Information">
                </fieldset>
            </div>
        </div>
    </form>

</div>
<?php
$n=1;
if(array_key_exists("searchstudentinfo", $_POST)){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $query = "SELECT id,First_Name,Last_Name,Religion,Gender, Date_of_birth,Phone_No,County,Address,Joining_Date,Designation,Status,Father_Name,Father_Mobile_No,Father_Profession FROM 'faculty' WHERE First_Name='$firstname' || Last_Name='$lastname';";
    $result = @mysqli_query($link,$query);


}

?>
<div id="table">
    <span class="results">All Active Students Information</span>
    <table class="table table-striped table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Date of Birth</th>

            <th scope="col">Joining Date</th>
            <th scope="col">Status</th>
            <th scope="col">Father Name</th>
            <th scope="col">Father Mobile</th>
            <th scope="col">Action</th>

        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)){
            $count = $count+1;
            ?>


            <tr class='<?php if(isset($classname)) echo $classname;?>'>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['First_Name']?></td>
                <td><?php echo $row['Last_Name']?></td>
                <td><?php echo $row['Gender']?></td>
                <td><?php echo $row['Date_of_Birth']?></td>
                <td><?php echo $row['Phone_No']?></td>
                <td><?php echo $row['Joining_Date']?></td>
                <td><?php echo $row['Status']?></td>
                <td><?php echo $row['Father_Name']?></td>
                <td><?php echo $row['Father_Mobile_No']?></td>
                <td><a href='edit-process2.php?id=<?php echo $row['id'];?>'>Update</a></td>
            </tr>;

            <?php
        }
        ?>
        <div style="height: 40px; font-size: 20px" class="progress" >
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%;"aria-valuenow="25"aria-valuemin="0"
                 aria-valuemax="100">Total Active Students<?php echo $count;?>

            </div>
        </div>


    </table>
    <?php @mysqli_free_result($result); ?>

</div>

</body>
</html>




