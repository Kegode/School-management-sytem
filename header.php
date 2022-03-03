<?php
ob_start();
if(array_key_exists("logout", $_POST)){
    header("location: loginpage.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->

    <!-- jQuery library -->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->

    <!-- Latest compiled JavaScript -->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
    <style type="text/css">
        body{
            font-family: Times, "Times New Roman", serif;
        }
        #button{
            margin-left: 1250px;
        }
        #menu-bar-container{
            background-color: #BB1919;
            width: 100%;
            height: 90px;
        }
        #menu-bar{
            width: 1100px;
            margin: 0 auto;
        }
        h1{
            padding: 0;
            margin: 0;
            color: white;
            font-size: 50px;
            font-weight: normal;
            padding-top: 10px;
            float: left;
        }
        h2{
            color: white;
            padding-top: 35px;
            margin-left: 625px;
        }
        label{
            margin-left: 5px;
            font-weight: bold;
        }
        #home{
            font-weight: bold;
        }
        #home:hover{
            color: royalblue;
            text-decoration: underline;
        }

    </style>
</head>
<body>
<nav class="navbar navbar navbar-light navbar navbar-dark bg-primary justify-content-right" style="background-color: white" >
    <form class="form-inline" method="post">
        <button id="button" onclick="myFunction()" class="btn btn-outline-dark my-2 my-sm-0" type="Submit" name="">Logout</button>
    </form>
</nav>
<div class="clear"></div>
<div id="menu-bar-container" class="noprint">
    <div id="menu-bar">
        <h1>GOLDEN TOTS SCHOOL</h1>
        <h2>(We Learn to Impact)</h2>
    </div>
</div>
<div class="clear"></div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a href="mainpage.php" id="home" class="nav-link">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle ="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a href="allstudents.php" class="dropdown-item">All Students</a>
                    <a href="allfaculty.php" class="dropdown-item">All Faculty</a>
                    <a href="fullfeerecordstudent.php" class="dropdown-item">Full Fee Student Record</a>
                    <a href="allcertificaterecord.php" class="dropdown-item">All Certificate Record</a>
                    <div class="dropdown-divider"></div>
                    <a href="about.php" class="dropdown-item">About</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle ="dropdown" aria-haspopup="true" aria-expanded="false">Manage Employees</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a href="insertemployee.php" class="dropdown-item">Insert Employee</a>
                    <a href="editemployee.php" class="dropdown-item">Edit Employee</a>
                    <a href="activeemployees.php" class="dropdown-item">Active Employee</a>
                    <a href="unactiveemployees.php" class="dropdown-item">Un-Active Employee</a>
                    <div class="dropdown-divider"></div>
                    <a href="deleteemployee.php" class="dropdown-item">Delete Employee</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle ="dropdown" aria-haspopup="true" aria-expanded="false">Manage Students</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a href="insertstudent.php" class="dropdown-item">Insert Students</a>
                    <a href="editstudents.php" class="dropdown-item">Edit Students</a>
                    <a href="activestudents.php" class="dropdown-item">Active Students</a>
                    <a href="unactivestudents.php" class="dropdown-item">Un-Active Students</a>
                    <div class="dropdown-divider"></div>
                    <a href="deletestudent.php" class="dropdown-item">Delete Student</a>
                    <div class="dropdown-divider"></div>
                    <a href="printstudentlist.php" class="dropdown-item">Print Student List</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle ="dropdown" aria-haspopup="true" aria-expanded="false">Manage Fee Record</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a href="/SPMS" class="dropdown-item">Login</a>
                    <a href="allfee.php" class="dropdown-item">Show All Students Fee</a>
                    <div class="dropdown-divider"></div>
                    <a href="discountstudent.php" class="dropdown-item">Add Discount</a>
                    <a href="discountrecord.php" class="dropdown-item">Discount Record</a>
                    <div class="dropdown-divider"></div>
                    <a href="generatefeevoucher.php" class="dropdown-item">Generate Fee Voucher</a>
                    <a href="printfeevoucher.php" class="dropdown-item">Print Fee Voucher</a>
                    <a href="reprintfeevoucher.php" class="dropdown-item">Re-Print Voucher</a>
                    <div class="dropdown-divider"></div>
                    <a href="reprintfeevoucher.php" class="dropdown-item">Complete Student Fee Record</a>

                    <a href="defaulterlist.php" class="dropdown-item">Defaulter List</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle ="dropdown" aria-haspopup="true" aria-expanded="false">Certificates</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <label>Student Certificates</label>
                    <a href="Sleavingcertificate.php" class="dropdown-item">Leaving Certificate</a>
                    <a href="Stransfercertificate.php" class="dropdown-item">Transfer Certificate</a>
                    <a href="Sterminationcertificate.php" class="dropdown-item">Termination Certificate</a>
                    <div class="dropdown-divider"></div>
                    <label>Faculty Certificate</label>
                    <a href="Fleavingcertificate.php" class="dropdown-item">Leaving Certificate</a>
                    <a href="Fperformance.php" class="dropdown-item">Performance Certificate</a>
                    <a href="Fterminationcertificate.php" class="dropdown-item">Termination certificate</a>

                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle ="dropdown" aria-haspopup="true" aria-expanded="false">Certificate Record</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <label>Student Certificates</label>
                    <a href="Sleavingcertificaterecord.php" class="dropdown-item">Student Leaving Certificate</a>
                    <a href="Stransfercertificaterecord.php" class="dropdown-item">Student Transfer Certificate</a>
                    <a href="Sterminationcertificaterecord.php" class="dropdown-item">Student Termination Certificate</a>
                    <div class="dropdown-divider"></div>
                    <label>Faculty Certificate</label>
                    <a href="Fleavingcertificaterecord.php" class="dropdown-item">Faculty Leaving Certificate</a>
                    <a href="Fperformancerecord.php" class="dropdown-item">Faculty Performance Certificate</a>
                    <a href="Fterminationcertificaterecord.php" class="dropdown-item">Faculty Termination certificate</a>

                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle ="dropdown" aria-haspopup="true" aria-expanded="false">Manage Results</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a href="enterresults.php" class="dropdown-item">Enter Results</a>
                    <div class="dropdown-divider"></div>
                    <a href="deleteresults.php" class="dropdown-item">Delete Results</a>
                    <a href="editresults.php" class="dropdown-item">Edit Results</a>
                    <a href="editresults.php" class="dropdown-item">Edit Marks</a>
                    <div class="dropdown-divider"></div>
                    <a href="printresults.php" class="dropdown-item">Print Results</a>
                    <a href="reprintvoucher.php" class="dropdown-item">Re-Print Voucher</a>
                    <div class="dropdown-divider"></div>
                    <a href="markssheet.php" class="dropdown-item">Marks Sheet</a>
                    <div class="dropdown-divider"></div>
                    <a href="resultrecord.php" class="dropdown-item">Result Record</a>

                </div>
            </li>
            <li>
                <a href="loginpage1.php" id="navbarDropdown" role="button" class="nav-link" aria-haspopup="true" aria-expanded="false">Control Panel</a>
            </li>



        </ul>
    </div>
</nav>
<script>
    function myFunction(button) {
        var txt;
        if (confirm("Do you really want to logout")){
            txt =   "logout";
        }else{
            txt="You pressed Cancel!";
        }
        document.getElementById("button").innerHTML=txt;

    }
</script>

</body>
</html>
