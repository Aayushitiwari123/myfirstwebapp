<?php
$success = "";
$error_message = "";
$conn = mysqli_connect("localhost","root","","taken");



if(!empty($_POST["submit"])) {
$result = mysqli_query($conn,"SELECT * FROM tblUsers WHERE email='" . $_POST["email"] . "'");
$count  = mysqli_num_rows($result);
if($count>0) {
// generate OTP
$otp = rand(1000,9999);
// Send OTP
require_once("mail.php");
$mail_status = sendOTP($_POST["emailid"],$otp);

if($mail_status == 1) {
$result = mysqli_query($conn,"INSERT INTO otpstore(otp,is_expired,create_at) VALUES ('" . $otp . "', 0, '" . date("Y-m-d H:i:s"). "')");
$current_id = mysqli_insert_id($conn);
if(!empty($current_id)) {
$success=1;
}
}
} else {
$error_message = "Email not exists!";
}
}
if(!empty($_POST["submit_otp"])) {
$result = mysqli_query($conn,"SELECT * FROM otpstore WHERE otp='" . $_POST["otp"] . "' AND is_expired!=1 AND NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR)");
$count  = mysqli_num_rows($result);
if(!empty($count)) {
$result = mysqli_query($conn,"UPDATE otpstore SET is_expired = 1 WHERE otp = '" . $_POST["otp"] . "'");
$success = 2;	
} else {
$success =1;
$error_message = "Invalid OTP!";
}	
}
?>
<?php
if(!empty($error_message)) {
?>
<div class="message error_message"><?php echo $error_message; ?></div>
<?php
}
?>

<form name="frmUser" method="post" action="">
<div class="form_container">
<?php 
if($success == 1) { ?>
<div class="sanhead">Enter OTP</div>
<p style="color:#31ab00;">Check your email for the OTP</p>
<div class="san">
<input type="text" name="otp" placeholder="One Time Password" class="inputclass" required>
</div>
<div class="sanhead"><input type="submit" name="submit_otp" value="Submit" class="submit_button"></div>
<?php 
} else if ($success == 2) {
$result = mysqli_query($conn,"SELECT * FROM otpstore WHERE otp='" . $_POST["otp"] . "'");

$count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);

if($count > 0){
	$_SESSION['login_user']= $_POST["email"] ;
echo "windows.location.href=('setpassword.php');"; 
}
else{
	echo "<script>alert('OTP is not correct!');</script>";
}
?>