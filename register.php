<?php
include("dbconfig.php");
?>
<!--STEP 1: CREATE DATABASE

/*CREATE TABLE `tblusers` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `FullName` varchar(120) DEFAULT NULL,
 `EmailId` varchar(100) DEFAULT NULL,
 `Password` varchar(100) DEFAULT NULL,
 `IdNo` int(8) DEFAULT NULL,
 `ContactNo` char(11) DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1*/

//STEP 2: CREATE DATABASE-- CONNECTION ; I WILL USE BOTH PDO AND MYSQLI CONNECTION - CHOOSE YOUR FAVOURITE)
//YOU CAN ALSO USE BOTH
// Create a file called dbconfig.php and paste 

/*
//####### Start of dbconfig.php #######
// ENTER DB credentials.
define('DB_HOST','localhost');
define('DB_USER','muss');
define('DB_PASS','muss');
define('DB_NAME','car-logistics');

// Establish database connection using PDO.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}

 
// Establish database connection using MYSQLI.
	$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	// Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 //####### End of dbconfig.php #######
 
 */
 // Establish database connection 

-->



<!--STEP 3 CREATE YOUR FORM, I WILL CONCENTRATE ON THE FIELDS WE WANT TO VALIDATE BEFORE SUBMITING THE FIELDS
 i.e Email, username or ID/Passport No and Password-->


<!DOCTYPE html>
<html lang="en">
<style type="text/css"> 
 
body {
     background: url('images/backregister.jpg') fixed;
    background-size: cover;
}

*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration - MedHome.com</title>
    <link rel="icon" href="images/drug.jpg" type="image/icon type">
    <script src="sweet/sweetalert.min.js"></script> 

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="icon" href="images/drug.jpg" type="image/icon type">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
   
</head>
<body>

  
  <h1 align="center" style="text-shadow: black 1px 2px; color: white;"> REGISTRATION FORM </h1>
    <div class="container">
       <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success register__msg" style="display: none" role="alert">
                                            Registration successful.
                                        </div>
                                    </div>
                                </div>
      <form class="form-horizontal"  method="post" name="signup" id="booking-form" role="form" onSubmit="return valid();" action="register.php">
      <div class="form-group">
        <label for="fname" class="col-sm-3 control-label">First Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control"  name="firstname" placeholder="First Name" autofocus required="required">
                </div>
              </div>
              <div class="form-group">
                <label for="lname" class="col-sm-3 control-label">Last Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control"  name="lastname" placeholder="Last Name"  required="required">
                </div>
              </div>

          <div class="form-group">
              <label for="emailid" class="col-sm-3 control-label">Email* </label>
    
                 <div class="col-sm-9">
                  <input type="email" class="form-control" name="emailid" id="emailid" onBlur="checkemailAvailability()" placeholder="Email Address* " required="required">
                   <span id="user-email-availability-status" style="font-size:12px; color:grey;"></span> 
                </div>
          </div>
				<div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password*</label>
    
            <div class="col-sm-9">
                  <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
        </div>
        <div class="form-group">
              <label for="confirmpassword" class="col-sm-3 control-label">Confirm Password*</label>
    
                <div class="col-sm-9">
                  <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password" required="required">
                </div>
        </div>
               
         <div class="form-group ">
            <label for="dob" class="col-sm-3 control-label"> Date of Birth</label>
             <div class="col-sm-9">
              <input type="date" id="dob" value="Date of Birth" class="form-control"   name="dob" required>
             </div>
          </div>
				<div class="form-group " > 
            <label for="mobno" class="col-sm-3 control-label">Phone number</label>
       
                 <div class="col-sm-9">
                   <input type="text" class="form-control"  maxlength="10" name="mobno" id="mobno" onBlur="checkmobAvailability(), maxLengthCheck()" placeholder="Phone Number *" value="" required />
                   <span id="mobno-availability-status" style="font-size:12px; color: gray;"></span>
                   <span class="help-block">Your phone number won't be disclosed anywhere </span>
                </div>
        </div>
              <div class="form-group">
                <label for="address" class="col-sm-3 control-label">Address*</label>
                   <div class="col-sm-9">
                  <input type="text" class="form-control" id="address" name="address" placeholder="Address"  required="required">
                </div>
              </div>
				
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
				
                
				
          <div class="form-group">
               <div class="col-sm-9">
                  <input type="checkbox" id="terms_agree" required="required" checked="checked">
                  <label for="terms_agree">By Signing in you Agree with <a href="1111.html">Terms and Conditions</a></label>
                </div>
          </div>
				
                
                  <input type="submit" value="Register" name="signup" id="submit" class="btn btn-primary btn-block" onclick="valid()">
               
            
                  <input type="reset" value="Reset" name="reset" id="reset" class="btn btn-primary btn-block" >
                
              <a class="login" href="loginmain.php"  color="yellow"><i>Already have an account?</i></a>
            
            
        

<?php

//STEP 4: CREATE A QUERY THAT WILL POST THE FORM FIELD DATA INTO THE DATABASE--
// I USED PDO IF YOU WANT HOW TO USE MySQLI PLEASE LEAVE A COMMENT
// code submit data
if(isset($_POST['signup']))
{
  
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$emailid=$_POST['emailid']; 
$password=md5($_POST['password']);
$dob=$_POST['dob'];
$mobno=$_POST['mobno'];
$address=$_POST['address'];
 
$sql="INSERT INTO  tblusers(FirstName,LastName,EmailId,Password,dob,mobno,address) VALUES(:fname,:lname,:emailid,:password,:dob,:mobno,:address)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':lname',$lname,PDO::PARAM_STR);
$query->bindParam(':emailid',$emailid,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->bindParam(':dob',$dob,PDO::PARAM_STR);
$query->bindParam(':mobno',$mobno,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);

$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{ echo "<script>
  var userselect = confirm('Registration successful. Want to login now?');
  if(userselect == true){
    window.location= 'loginmain.php';
  }
  </script>";
//echo "<script >alert('Registration successful. Now you can login');</script>";

}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
//PLEASE TEST YOUR TO ENSURE IT IS SUBMITING THE DATA INTO DATABASE BEFORE YOU PROCEDE  TO THE NEXT STEP
?>

<!--//STEP 5: CREATE A PHP FILE THAT WILL BE USED TO CHECK AVAILABILITY OF THE DATA IN THE DATABASE--


 LASTLY, YOU WILL HAVE TO WRITE A SCRIPT THAT WILL CHECK IF THE EMAIL AND ID NO ALREADY EXISTS IN THE DATABASE--
IF THE DATA IS ALREADY IN THE TABLE, DISABLE THE SUBMIT BUTTON
YOU WILL REALIZE THAT WE ADDED onBlur="checkemailAvailability()" on Email field and a 
span id="user-email-availability-status" where the error will be displayed. The same thing was done on  ID No field

Also you will have to download jquery.min.js and call it at the end of this code-->

<script>
//This function checks email-availability-status
function checkemailAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#emailid").val(),
type: "POST",
success:function(data){
$("#user-email-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}

function checkmobAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'mobno='+$("#mobno").val(),
type: "POST",
success:function(data){
$("#mobno-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}

//Finally add a function that will check if password 1 and password 2 match, It is called by the form using |onSubmit="return valid();"|
function valid()
{
if(document.signup.password.value!= document.signup.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.signup.confirmpassword.focus();
return false;
}
return true;
}

  function maxLengthCheck(){
    var mobile = document.getElementById("mobno").value;         
    var stripped = mobile.replace(/[\(\)\.\-\ \''\""\.]/g, '');

   if (stripped == "") {
        error = "You didn't enter a phone number.";
    }
     else if (isNaN(parseInt(stripped))==true) {
        phone = "";
        alert("The phone number contains illegal characters.");

    }else if (!(stripped.length == 10)) {
      

        phone = "";
       
        alert("Phone number must be of only 10 digits\n");
        document.getElementById("mobno").focus();
        document.getElementById("mobno").value='';
   
    }   
    
    }

</script>

				<!-- JS -->
				<!--This will facilitate process of background tasks-->
    <script src="js/jquery.min.js"></script>

</form>
    </div>
  </body>
  </html>






