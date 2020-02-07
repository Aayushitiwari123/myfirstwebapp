<?php
include('adminsession.php');
if(!isset($_SESSION['login_user'])){
header("location: admin2.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>MedHome</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="images/drug.jpg" type="image/icon type">
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">

  <link rel="stylesheet"  type="text/css" href="css/adminmain.css">
<style type="text/css">
  
  
  #table {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#table td, #table th {
  border: 1px solid #ddd;
  padding: 8px;
}

#table tr:nth-child(even){background-color: #E2A168;}
#table tr:nth-child(odd){background-color: #E99999;}
#table tr:hover {background-color: #ddd;}

#table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #7E4FA2;
  color: white;
}
</style>
</head>
<body>
  <div id="wrapper">
  <div id="header">
    
    <!--==main header==-->
    <div id="main-header">
      <!--logo-->
      
      <a href="adminmain.php"><img id="logo" src="images/medhome.png" ></a>
        <div id="navigation">
                <nav>
                  <a href="#">My account</a>
                  <a href="#details">User Details</a>
                  <a href="#">Products</a>
                  <a href="#queries">Customer Queries</a>
                  <a href="#">Team</a>
                  <a href="adminlogout.php">logout</a>
   
                 </nav>
        </div>
    </div>
  </div>

  <div id="heading-block">
      <h2 id="details"> User's Details </h2> 
    </div>
<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'taken'); //where customers is the database
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if($db->connect_error){
  printf("ERROR: Connection failed: %s\n",$db->connect_error );
  exit();
}
else {
  printf("Connection Established!");
} 

 

 $query="SELECT * from tblusers";
//$query="SELECT id,FirstName,LastName,EmailId,Password,dob,mobno,address from tblusers"; // Fetch all the records from the table tblusers
$result = $db->query($query);
//$result -> execute();


if ($result->num_rows > 0) {



echo "<table id='table' border='1px' cellpadding='5px'  >";
echo " <caption color='black'>User Data</caption>";
echo "<tr>";
echo "<th> ID</th>";
echo "<th> First Name </th>";
echo "<th> Last Name </th>";
echo "<th> Email ID </th>"; 
echo "<th> Password</th>";
echo "<th> Date of Birth</th>";
echo "<th> Mobile no.</th>";
echo "<th> Address</th>";
echo "</tr>";
 
 while($array=$result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$array['id']."</td>";
    echo "<td>".$array['FirstName']."</td>";
    echo "<td>".$array['LastName']."</td>";
    echo "<td>".$array['EmailId']."</td>";
    echo "<td>".$array['Password']."</td>";
    echo "<td>".$array['dob']."</td>";
    echo "<td>".$array['mobno']."</td>";
    echo "<td>".$array['address']."</td>";
    echo "</tr>";
    
   }  
   echo "</table>";
        // Free result set  
    
} else {
    echo "NO results!";
}
 

?>
 <div id="heading-block">
      <h2 id="queries"> Customer Queries </h2> 
    </div>

<div class="card" style="background-color: rgba(255,222,173,0.4); margin: 10px 10px;">
    <?php
     $query="SELECT * from contactus";
//$query="SELECT id,FirstName,LastName,EmailId,Password,dob,mobno,address from tblusers"; // Fetch all the records from the table tblusers
$result = $db->query($query);
//$result -> execute();


if ($result->num_rows > 0) {




 
 while($array=$result->fetch_assoc()) {
    echo "<table cellpadding='2px'>";
    echo "<tr>";
    echo "<td> ID:".$array['id']."</td>";
    echo "<td> From:".$array['Name']."</td>";
    echo "<td> EmailId (".$array['Email']."),</td>";
    echo "<td> Phone(".$array['Phone'].")</td>";
    echo "</tr>";
    echo "</table>";
    echo "<h4>".$array['Subject']."</h4>";
    echo "<p>".$array['Message']."</p><br><hr>";
    
    
   }  
 
        // Free result set  
    
} else {
    echo "NO results!";
}
 


?>
</div>
</div>
</body>
</html>

    
