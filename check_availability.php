<?php 
// Establish database connection 
include("dbconfig.php");

// code user Email availablity
if(!empty($_POST["emailid"])) {
	$email= $_POST["emailid"];
	if (filter_var($email, FILTER_VALIDATE_EMAIL)===false) {

		echo "error :you did not enter a valid email.";
	}
	else {
		$sql ="SELECT EmailId FROM tblusers WHERE EmailId=:email";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
echo "<span style='color:#E6112E'> Email already registered .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:#6B7383'> Email available for Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}
}
// End code check email

// code user ID No availablity
if(!empty($_POST["mobno"])) {
	$mobno= $_POST["mobno"];
$sql ="SELECT mobno FROM tblusers WHERE mobno=:mobno";
$query= $dbh -> prepare($sql);
$query-> bindParam(':mobno', $mobno, PDO::PARAM_INT);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
 echo "<span style='color:#E6112E'>Phone number already registered .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
 echo "<span style='color:#6B7383'> Phone number Available.</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}
?>