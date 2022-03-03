<?php
include ("connection.php");
include ('header.php');
$count ="0";
if (array_key_exists("search", $_POST)) {
    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $lastname = $_POST["lastname"];
    $class = $_POST["class"];
    $board = $_POST["board"];

    $query = "SELECT id,First_Name,Last_Name,Religion,Gender, Date_of_birth,County,Address,Joining_Date,Designation,Status,Father_Name,
                    Father_Mobile_No,Father_Profession FROM students WHERE First_Name='$firstname'|| Middle_Name='$middlename'||Last_Name='$lastname'||Class='$class'||Board='$board'
                     ORDER BY class asc";
    $result = @mysqli_query($link, $query);
}else{
    $query = "SELECT id,First_Name,Last_Name,Religion,Gender, Date_of_birth,County,Address,Joining_Date,Designation,Status,Father_Name,
                Father_Mobile_No,Father_Profession FROM students ORDER BY Class DESC ";
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
<div class="container">
    <form action="" method="post">
        <span class="heading">Enter Student Details To Search</span>
        <div class="information" id="student">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputfirstname">First Name</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputmiddlename">Middlename :</label>
                    <input type="text" name="middlename"  class="form-control" id="middlename" placeholder="Middle Name">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputlastname">Last Name</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name">
                </div>

                <div class="form-group col-md-4">
                        <label for="inputgender">Gender :</label>
                        <select  name="gender" required class="form-control" id="inputgender">
                            <option selected>Gender....</option>
                            <option value="Christian">Male</option>
                            <option value="Islam">Female</option>
                        </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="inputdateofbirth">Date of Birth :</label>
                    <input type="date" name="dob" required class="form-control" id="dob" placeholder="YYYY-MM-DD">
                </div>
            </div>
            <div class="form-row">
                <fieldset class="form-group col-md-4">
                    <input type="submit" style="margin-left: 0%; padding: 8px;width: 100px" class="btn btn-dark" name="search" value="Filter">
                </fieldset>
            </div>
        </div>
    </form>

</div>

<div id="table">
    <span class="results">All  Students Information</span>
    <table class="table table-striped table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Middle Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Admission No.</th>
            <th scope="col">Gender</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Joining Date</th>
            <th scope="col">Class</th>
            <th scope="col">Joining Date</th>
            <th scope="col">Status</th>
            <th scope="col">Father Name</th>
            <th scope="col">Father Mobile</th>
            <th scope="col">Action</th>

        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)){
            $count = $count+1;
            ?>


            <tr >
                <td><?php echo $row['id']?></td>
                <td><a href="individualstudentrecord.php?id=<?php echo $row['id'];?>"><?php echo $row['First_Name']?></a></td>
                <td><a href="individualstudentrecord.php?id=<?php echo $row['id'];?>"><?php echo $row['Last_Name']?></a></td>
                <td><?php echo $row['Admission_No']?></td>
                <td><?php echo $row['Gender']?></td>
                <td><?php echo $row['Date_of_Birth']?></td>
                <td><?php echo $row['Phone_No']?></td>
                <td><?php echo $row['Joining_Date']?></td>
                <td><?php echo $row['Status']?></td>
                <td><?php echo $row['Father_Name']?></td>
                <td><?php echo $row['Father_Mobile_No']?></td>

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





