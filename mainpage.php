<?php
include ("header.php");
//include ("footer.php");

$count1 ="0";
$count2 ="0";
$count3 ="0";
$count4 ="0";
$count5 ="0";
$count6 ="0";

require 'connection.php';
$query1 ="SELECT Admission_No FROM students";
$results1 =mysqli_query($link, $query1);
while($row1 = mysqli_fetch_assoc($results1))
{
    $count1++;

}
$query2 = "SELECT Admission_No FROM students WHERE status='Active'";
$results2 =mysqli_query($link, $query2);
while($row2 = mysqli_fetch_assoc($results2))
{
    $count2++;

}
$query3 = "SELECT Admission_No FROM students WHERE status='Un-Active'";
$results3 =mysqli_query($link, $query3);
while($row3 = mysqli_fetch_assoc($results3))
{
    $count3++;

}
$query4 = "SELECT id FROM faculty";
$results4 =mysqli_query($link, $query4);
while($row4 = mysqli_fetch_assoc($results4))
{
    $count4++;

}
$query5 = "SELECT id FROM faculty WHERE status='Active'";
$results5 =mysqli_query($link, $query5);
while($row5 = mysqli_fetch_assoc($results5))
{
    $count5++;

}
$query6 = "SELECT id FROM faculty WHERE status='Un-Active'";
$results6 =mysqli_query($link, $query6);
while($row6 = mysqli_fetch_assoc($results6))
{
    $count6++;

}
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
<div id="container">
    <div class="row">
        <div id="students">
            <label class="label"><img src="assets/images/students.jpg" style="width:55px;height: 55px" alt="student">Student Information</label>
            <ul class="ul">
                <li><p class="text">Total Students : <?php echo $count1; ?></p></li>
                <li><p class="text">Active Students : <?php echo $count2; ?></p></li>
                <li><p class="text">Un-Active Students : <?php echo $count3; ?></p></li>

            </ul>

        </div>
        <div class="v1"></div>
        <div id="faculty">
            <label class="label"><img src="assets/images/faculty.png" style="width:45px;height: 35px" alt="faculty">Faculty Information</label>
            <ul class="ul">
                <li><p class="text">Total Employees : <?php echo $count4; ?></p></li>
                <li><p class="text">Active Employees : <?php echo $count5; ?></p></li>
                <li><p class="text">Un-Active Employees : <?php echo $count6; ?></p></li>

            </ul>

        </div>

    </div>


</div>
<div id="container1">
    <label class="label" style="margin-left:0px">Quick Options</label>
    <div class="mb-4">
        <div><span><img src="assets/images/students.jpg" alt="students">Students:</span></div>
        <div class="float">
            <button type="button" onclick="window.location.href ='insertstudents.php'" class="btn btn-primary">Insert STUDENT</button>
            <button type="button" onclick="window.location.href ='deletestudents.php'" class="btn btn-secondary">DELETE STUDENT</button>
            <button type="button" onclick="window.location.href ='editstudents.php'" class="btn btn-success">EDIT STUDENT</button>
            <button type="button" onclick="window.location.href ='allstudents.php'" class="btn btn-danger">ALL STUDENTS RECORD</button>
            <button type="button" onclick="window.location.href ='activestudents.php'" class="btn btn-warning">ACTIVE STUDENT</button>
        </div>
    </div>
    <div class="mb-4">
        <div><span><img src="assets/images/faculty.png" alt="faculty">Faculty:</span></div>
        <div class="float">
            <button type="button" onclick="window.location.href ='insertemployee.php'" class="btn btn-primary">Insert EMPLOYEE</button>
            <button type="button" onclick="window.location.href ='deleteemployee.php'" class="btn btn-secondary">DELETE EMPLOYEE</button>
            <button type="button" onclick="window.location.href ='editemployee.php'" class="btn btn-success">EDIT EMPLOYEE</button>
            <button type="button" onclick="window.location.href ='allfaculty.php'" class="btn btn-danger">ALL FACULTY RECORD</button>
            <button type="button" onclick="window.location.href ='activeemployee.php'" class="btn btn-warning">ACTIVE EMPLOYEE</button>
        </div>
    </div>
    <div class="mb-4">
        <div><span><img src="assets/images/certificate.jpg" alt="certificate">Certificates:</span></div>
        <div class="float">
            <button type="button" onclick="window.location.href ='Sleavingcertificate.php'" class="btn btn-primary">Student Leaving Certificate</button>
            <button type="button" onclick="window.location.href ='Fleavingcertificate.php'" class="btn btn-secondary">Employee leaving certificate</button>
            <button type="button" onclick="window.location.href ='Sterminationcertificate.php'" class="btn btn-success">Student termination certificate</button>
            <button type="button" onclick="window.location.href ='Fterminationcertificate.php'" class="btn btn-danger">Employee termination certificate</button>
            <button type="button" onclick="window.location.href ='allcertificaterecord.php'" class="btn btn-warning">All certificate Record</button>
        </div>
    </div>
    <div class="mb-4">
        <div><span><img src="assets/images/fee.jpg" alt="fee">Fee:</span></div>
        <div class="float">
            <button type="button" onclick="window.location.href ='enterfee.php'" class="btn btn-primary">Pay Voucher</button>
            <button type="button" onclick="window.location.href ='discountstudents.php'" class="btn btn-secondary">ADD DISCOUNT</button>
            <button type="button" onclick="window.location.href ='discountrecord.php'" class="btn btn-success">Show Discount Record</button>
            <button type="button" onclick="window.location.href ='generatefeevoucher.php'" class="btn btn-danger">Fee Voucher</button>
            <button type="button" onclick="window.location.href ='activestudents.php'" class="btn btn-warning">ACTIVE STUDENT</button>
        </div>
    </div>
    <div class="mb-4">
        <div><span><img src="assets/images/results.jpg" alt="result">Results:</span></div>
        <div class="results">
            <button type="button" onclick="window.location.href ='enterresults.php'" class="btn btn-primary">ADD RESULT</button>
            <button type="button" onclick="window.location.href ='deleteresults.php'" class="btn btn-secondary">DELETE RESULT</button>
            <button type="button" onclick="window.location.href ='editresults.php'" class="btn btn-success">EDIT RESULT</button>
            <button type="button" onclick="window.location.href ='marksheet.php'" class="btn btn-danger">MARK SHEET</button>
            <button type="button" onclick="window.location.href ='resultrecord.php'" class="btn btn-warning">RESULT RECORD</button>
        </div>
    </div>

</div>

</body>
</html>




