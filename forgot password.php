<?php
include('forgot_otp_php.php'); // Includes Login Script

?>
<html>
<head>
    <title>Forgot Password - MedHome.com </title>
    <link rel="icon" href="images/drug.jpg" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="css/forgot.css">   
</head>
    <body>
    <div class="forgot-box">
    <img src="images/avatar.png" class="avatar">
        <h1>Forgot Password?</h1>
            <form method="POST" action="forgot_otp_php.php">
            <p>Email ID</p>
            <input type="email" name="emailid" placeholder="Enter EmailID">
            <span id="user-email-availability-status" style="font-size:12px; color:grey;"></span> 
            <!---<p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">-->
            <input type="submit" name="submit" value="Send OTP">
            <a href="loginmain.php">Back to Login</a>    
            <a href="register.php">Register if Email Id not present!</a> 
            </form>
        
        
        </div>
    
    </body>
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
</script>
</html>


