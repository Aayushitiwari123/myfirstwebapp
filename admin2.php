<?php
//include('admin.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: adminmain.php"); // Redirecting To Profile Page
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login - MedHome.com </title>
    <link rel="icon" href="images/drug.jpg" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="css/adminlogin2.css"> 
    <script src="js/login.js"></script>  
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>  
</head>
    <body>
    <div class="login-box">
    <img src="images/avatar.png" class="avatar">
        <h1>Admin Login</h1>
            <form action="admin2.php" method="post">
            <p>Username</p>
            <input type="text" name="username" id="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" id="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <?php
session_start(); // Starting Session
$error = '';
// Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password must not be Empty";
}
else{
// Define $username and $password
$username = $_POST['username'];
$password = $_POST['password'];


// SQL query to fetch information of registerd users and finds user match.
if($username=="secretadmin" && $password=="only1admin")//
{
$_SESSION['login_user'] = $username; // Initializing Session
header("location: adminmain.php"); // Redirecting To Profile Page
}
else echo "<script>alert('YOU CANNOT ACCESS ADMINISTRATOR PANEL!')</script>";


}

}
?>


            <span><?php echo $error; ?></span>
 
            </form>
        </div>
    </body>
</html>
