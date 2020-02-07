<?php
session_start();
if(session_destroy()) // Destroying All Sessions {
header("Location: admin2.php"); // Redirecting To Home Page

?>