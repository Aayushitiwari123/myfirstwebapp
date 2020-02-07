<?php
// mysqli_connect() function opens a new connection to the MySQL server.
session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User

$login_session = $user_check;
?>