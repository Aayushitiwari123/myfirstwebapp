<?php
include("dbconfig.php");
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Reset Password - MedHome.com </title>
    <link rel="icon" href="images/drug.jpg" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="css/forgot.css">   
</head>
    <body>
    <div class="forgot-box">
    <img src="images/avatar.png" class="avatar">
        <h1>Set New Password</h1>
            <form method="POST" action="forgot_otp_php.php">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter New password">
            <p>Confirm Password</p>
            <input type="cpassword" name="confirmpassword" placeholder="Re-enter New password">
            <!---<p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">-->
            <input type="submit" name="change" value="Change Password" >
            
            </form>
        
        
        </div>
    
    </body>
    <?php
$useremail = $_SESSION['login_user'];
//STEP 4: CREATE A QUERY THAT WILL POST THE FORM FIELD DATA INTO THE DATABASE--
// I USED PDO IF YOU WANT HOW TO USE MySQLI PLEASE LEAVE A COMMENT
// code submit data
if(isset($_POST['change']))
{
$password=md5($_POST['password']);
 //$result = mysqli_query($conn,"UPDATE otpstore SET is_expired = 1 WHERE otp = '" . $_POST["otp"] . "'");
$sql="UPDATE tblusers SET Password='" . $password . "' where EmailId='" . $useremail . "'";
$query = $dbh->prepare($sql);

$query->bindParam(':password',$password,PDO::PARAM_STR);


$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{ echo "<script>
  var userselect = confirm('Password Changed successfully. Want to login now?');
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

    <script>


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
</script>
</html>


