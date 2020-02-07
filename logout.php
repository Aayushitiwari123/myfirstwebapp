<?php
session_start();
if(session_destroy()) // Destroying All Sessions {
header("Location: loginmain.php"); // Redirecting To Home Page

?>