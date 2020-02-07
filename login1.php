<?php
session_start(); // Starting Session
$error = '';

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "taken");
if($conn==false){
	printf("ERROR: Connection failed: %s\n", mysqli_connect_error());
	exit();
}
else {
	printf("Connection Established!");
}  // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['emailid']) || empty($_POST['password'])) {
$error = "Email ID or Password must not be empty";
}
else{
// Define $username and $password
$emailid = $_POST['emailid'];
$password = $_POST['password'];


// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT EmailId, Password from tblusers where EmailId=? AND Password=? LIMIT 1";
// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $emailid, md5($password));
$stmt->execute();
$stmt->bind_result($emailid, md5($password));
$stmt->store_result();
if($stmt->fetch()) //fetching the contents of the row{
$_SESSION['login_user'] = $emailid; // Initializing Session
header("location: profile.php"); // Redirecting To Profile Page
}
mysqli_close($conn); // Closing Connection
}
?>