<?php
ob_start();
include("connection.php");
include ("header.php");
$id= $_GET["id"];
$sql= "SELECT* FROM faculty WHERE id='" .$_GET["id"]."'";
if($result= mysqli_query($link, $sql))
{
    $row = @mysqli_fetch_array($result);
}else{
    echo"error";
}
if (array_key_exists("updatestudentinfo", $_POST))
{
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $religion = $_POST["religion"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $phone= $_POST["phone"];
    $county = $_POST["county"];
    $address = $_POST["address"];
    $joiningdate = $_POST["joiningdate"];
    $Designation=$_POST["designation"];
    $status = $_POST["status"];
    $fathername = $_POST["fathername"];
    $fathermobile = $_POST["fathermobile"];
    $fatherjob = $_POST["fatherjob"];
    $query = "UPDATE faculty SET 'First_Name','Last_Name','Religion','Gender', 'Date_of_birth','Phone_No','County','Address','Joining_Date','''Designation''Status','Father_Name','Father_Mobile_No','Father_Profession')
              VALUES ('$firstname','$lastname','$religion','$gender','$dob','$phone','$county','$address','$joiningdate','$Designation','$status','$fathername','$fathermobile','$fatherjob')"   ;
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
        <span class="heading">Employee Information :</span>
        <div id="student" class="information">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputfirstname">Firstname :</label>
                    <input type="text" name="fistname" required class="form-control" id="firstname" placeholder="First Name" value="<?php echo $row["First_Name"]?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputmiddlename">Middlename :</label>
                    <input type="text" name="middlename"  class="form-control" id="middlename" placeholder="Middle Name value="<?php echo $row["Middle_Name"]?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputlast">Lastname :</label>
                    <input type="text" name="lastname" required class="form-control" id="lastname" placeholder="Last Name value="<?php echo $row["Last_Name"]?>">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputreligion">Religion :</label>
                    <select  name="religion" required class="form-control" id="inputreligion">
                        <option selected><?php echo $row["Religion"]?></option>
                        <option value="Christian">Chistian</option>
                        <option value="Islam">Islam</option>
                    </select>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputgender">Gender :</label>
                    <select  name="gender" required class="form-control" id="inputgender">
                        <option selected><?php echo $row["Gender"]?></option>
                        <option value="Christian">Male</option>
                        <option value="Islam">Female</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="inputdateofbirth">Date of Birth :</label>
                <input type="date" name="dob" required class="form-control" id="dob" placeholder="YYYY-MM-DD "value="<?php echo $row["Date_of_birth"]?>">
            </div>
            <div class="form-group col-md-6">
                <label for="inputphonenumber">Phone Number :</label>
                <input type="number" name="phonenumber" required class="form-control" id="phonenumber" placeholder="Telephone No." value="<?php echo $row["Phone_No"]?>>
            </div>
            <div class="form-group col-md-6">
                <label for="inputcounty">County :</label>
                <select name="county" required class="form-control" id="county">
                    <option selected><?php echo $row["County"]?></option>

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
                <input style="width: 240px"; type="text" name="address" required class="form-control" id="address" placeholder="Box 20500-42 Matunda" value="<?php echo $row["Address"]?>>
            </div>
            <div class="form-group col-md-6">
                <label for="inputjoiningdate">Joining Date :</label>
                <input  type="date" name="joiningdate" required class="form-control" id="joiningdate" placeholder="YYYY-MM-DD" value="<?php echo $row["Joining_date"]?>>
            </div>
            <div class="form-group col-md-6">
                <label for="inputdesignation">Designation :</label>
                <input  type="text" name="designation" required class="form-control" id="designation" placeholder="Designation" value="<?php echo $row["Designation"]?>>
            </div>
            <div class="form-group col-md-6">
                <label for="inputstatus">Status :</label>
                <select  name="status" required class="form-control" id="inputstatus">
                    <option selected><?php echo $row["Status"]?></option>
                    <option value="Christian">Active</option>
                    <option value="Islam">Un-Active</option>
                </select>
            </div>
            <span class="heading">N.O.K Information :</span>
            <div id="father" class="information">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputfathername">Name :</label>
                        <input type="text" name="fathername" required class="form-control" id="fathername" placeholder="Parent/Spouse Name" value="<?php echo $row["Father_Name"]?>>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputfathermobile">Mobile No :</label>
                    <input  type="number" name="fathermobile" required class="form-control" id="fathermobile" placeholder="Mobile No." value="<?php echo $row["Father_Mobile_No"]?>>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputfatherjob">Proffession :</label>
                    <select id="inputfatherjob" name="fatherjob" required class="form-control" id="fatherjob">
                        <option selected><?php echo $row["Father_Profession"]?></option>
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
                    <input type="submit" style="margin-left: 43%;" class="btn btn-dark" name="updatestudentinfo" value="Update the Information">
                </fieldset>
            </div>




        </div>



</div>

</form>


</div>


</body>
</html>
