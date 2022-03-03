<?php
ob_start();
include("connection.php");
include ("header.php");
if (array_key_exists("submitstudentinfo", $_POST))
{
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $religion = $_POST["religion"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];

    $county = $_POST["county"];
    $address = $_POST["address"];
    $joiningdate = $_POST["joiningdate"];
    $status = $_POST["status"];
    $fathername = $_POST["fathername"];
    $fathermobile = $_POST["fathermobile"];
    $fatherjob = $_POST["fatherjob"];
    $query = "INSERT INTO 'Students'('First_Name','Last_Name','Religion','Gender', 'Date_of_birth','County','Address','Joining_Date','Status','Father_Name','Father_Mobile_No','Father_Profession')
              VALUES ('$firstname','$lastname','$religion','$gender','$dob','$county','$address','$joiningdate','$status','$fathername','$fathermobile','$fatherjob')"   ;
    $run = mysqli_query($link, $query);
    echo "<div id='alert' class='alert alert-primary'role='alert'>
Information Updated
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
        <span class="heading">Student Information :</span>
        <div id="student" class="information">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputfirstname">Firstname :</label>
                    <input type="text" name="fistname" required class="form-control" id="firstname" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputmiddlename">Middlename :</label>
                    <input type="text" name="middlename"  class="form-control" id="middlename" placeholder="Middle Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputlast">Lastname :</label>
                    <input type="text" name="lastname" required class="form-control" id="lastname" placeholder="Last Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputadmissionnumber">Admission No :</label>
                    <input type="number" name="admission" required class="form-control" id="admission" placeholder="Admission No">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputreligion">Religion :</label>
                    <select  name="religion" required class="form-control" id="inputreligion">
                        <option selected>Religion....</option>
                        <option value="Christian">Chistian</option>
                        <option value="Islam">Islam</option>
                    </select>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputgender">Gender :</label>
                    <select  name="gender" required class="form-control" id="inputgender">
                        <option selected>Gender....</option>
                        <option value="Christian">Male</option>
                        <option value="Islam">Female</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="inputdateofbirth">Date of Birth :</label>
                <input type="date" name="dob" required class="form-control" id="dob" placeholder="YYYY-MM-DD">
            </div>

            <div class="form-group col-md-6">
                <label for="inputcounty">County :</label>
                <select name="county" required class="form-control" id="county">
                        <option selected>County....</option>
                        <option value='Baringo'>Baringo</option>
                        <option value='Bomet'>Bomet</option>
                        <option value='Bungoma'>Bungoma</option>
                        <option value='Busia'>Busia</option>
                        <option value='Elgeyo-Marakwet'>Elgeyo-Marakwet</option>
                        <option value='Embu'>Embu</option>
                        <option value='Garissa'>Garissa</option>
                        <option value='Homa Bay'>Homa Bay</option>
                        <option value='Isiolo'>Isiolo</option>
                        <option value='Kajiado'>Kajiado</option>
                        <option value='Kakamega'>Kakamega</option>
                        <option value='Kericho'>Kericho</option>
                        <option value='Kiambu'>Kiambu</option>
                        <option value='Kilifi'>Kilifi</option>
                        <option value='Kirinyaga'>Kirinyaga</option>
                        <option value='Kisii'>Kisii</option>
                        <option value='Kisumu'>Kisumu</option>
                        <option value='Kitui'>Kitui</option>
                        <option value='Kwale'>Kwale</option>
                        <option value='Laikipia'>Laikipia</option>
                        <option value='Lamu'>Lamu</option>
                        <option value='Machakos'>Machakos</option>
                        <option value='Makueni'>Makueni</option>
                        <option value='Mandera'>Mandera</option>
                        <option value='Marsabit'>Marsabit</option>
                        <option value='Meru'>Meru</option>
                        <option value='Migori'>Migori</option>
                        <option value='Mombasa'>Mombasa</option>
                        <option value='Murang'a'>Murang'a</option>
                        <option value='Nairobi City'>Nairobi City</option>
                        <option value='Nakuru'>Nakuru</option>
                        <option value='Nandi'>Nandi</option>
                        <option value='Narok'>Narok</option>
                        <option value='Nyamira'>Nyamira</option>
                        <option value='Nyandarua'>Nyandarua</option>
                        <option value='Nyeri'>Nyeri</option>
                        <option value='Samburu'>Samburu</option>
                        <option value='Siaya'>Siaya</option>
                        <option value='Taita-Taveta'>Taita-Taveta</option>
                        <option value='Tana River'>Tana River</option>
                        <option value='Tharaka-Nithi'>Tharaka-Nithi</option>
                        <option value='Trans Nzoia'>Trans Nzoia</option>
                        <option value='Turkana'>Turkana</option>
                        <option value='Uasin Gishu'>Uasin Gishu</option>
                        <option value='Vihiga'>Vihiga</option>
                        <option value='West Pokot'>West Pokot</option>
                        <option value='wajir'>wajir</option>
                    </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputadress">Address :</label>
                <input style="width: 240px"; type="text" name="address" required class="form-control" id="address" placeholder="Box 20500-42 Matunda">
            </div>
            <div class="form-group col-md-6">
                <label for="inputjoiningdate">Joining Date :</label>
                <input  type="date" name="joiningdate" required class="form-control" id="joiningdate" placeholder="YYYY-MM-DD">
            </div>
            <div class="form-group col-md-6">
                <label for="inputclass">CLASS/GRADE :</label>
                <input  type="number" name="number" required class="form-control" id="number" placeholder="Grade">
            </div>
            <div class="form-group col-md-6">
                <label for="inputstatus">Status :</label>
                <select  name="status" required class="form-control" id="inputstatus">
                    <option selected>Status....</option>
                    <option value="Christian">Active</option>
                    <option value="Islam">Un-Active</option>
                </select>
            </div>


        </div>
        <span class="heading"> Parent Information :</span>
        <div id="father" class="information">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputfathername">Name :</label>
                    <input type="text" name="fathername" required class="form-control" id="fathername" placeholder="Parent/Spouse Name">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="inputfathermobile">Mobile No :</label>
                <input  type="number" name="fathermobile" required class="form-control" id="fathermobile" placeholder="Mobile No.">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="inputfatherjob">Proffession :</label>
                <select id="inputfatherjob" name="fatherjob" required class="form-control" id="fatherjob">
                    <option selected>Profession....</option>
                    <option value="Christian">Farmer</option>
                    <option value="Islam">Government Employee</option
                    <option value="Christian">NGO Employee</option>
                    <option value="Islam">Self Employed</option>
                    <option value="Islam">Other</option>

                </select>
            </div>

        </div>
        <div style="margin-top: 20px">
            <fieldset class="form-group">
                <input type="submit" style="margin-left: 43%;" class="btn btn-dark" name="submitstudentinfo" value="Submit the Information">
            </fieldset>
        </div>




</div>

</form>


</div>

</body>
</html>

