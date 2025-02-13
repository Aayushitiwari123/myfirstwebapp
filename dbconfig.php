<?php
session_start();

//####### Start of dbconfig.php #######
// ENTER DB credentials.

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','taken');

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
?>