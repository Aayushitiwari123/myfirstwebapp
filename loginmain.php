<?php
include('login1.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>

<link href="css/loginnew1.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
    <meta name="viewport" content=width=device-width,initial-scale=1.0>
    <title>User Login - MedHome.com </title>
    <link rel="icon" href="images/drug.jpg" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="css/loginnew.css">
    <script src="js/login.js"></script>  
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</head>
<body id="login">
<div  class="login-box">
	<img src="images/avatar.png" class="avatar">
	<h1>Login Here</h1>
		<form action="" method="post">
			<p>Email Id :</p>
			<input id="emailid" name="emailid" placeholder="Enter Email ID" type="text">
			<p>Password :</p>
			<input id="password" name="password" placeholder="Enter Password" type="password"><br><br>
			<input name="submit" type="submit" value=" Login ">
			<span><?php echo $error; ?></span>

			<a href="forgot password.php" style="float: left; font-size: 13px;">Forget Password?</a>
			<a href="register.php" style="float: right; font-size: 13px;" >Don't have an account?</a> 
		</form>
</div>
</body>
</html>