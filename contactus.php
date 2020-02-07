
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <title>Contact Us - MedHome.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="icon" href="images/drug.jpg" type="image/icon type">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="contact.css">
                <!-- JS -->
                <!--This will facilitate process of background tasks-->
    <script src="js/jquery.min.js"></script>
    <style type="text/css">
    #wrapper{ font-family:tahoma; }
        #footer{
    width: 100%;
    height: auto;
    background:none;
    border-top:2px double ;
    border-top-color: black;
    float: left;
    }
    .footer_sub{
    width: 25%;
    float: left;
    }
    .footer_sub2{
    width: 20%;
    float: left;

    }
    .footer_sub2 ul li{
    list-style: none;
    }

    .footer_sub2 ul li a{
    text-decoration: none;
    color: black;
    }

    .footer_sub2 ul li a:hover{
    color: yellow;
    text-decoration: underline;
    }

    .footer_sub3{
    width: 35%;
    float: left;
    }
    .footer_sub3 input{

    }

    .subs{
    width: 250px;
    height: 50px;
    padding-left: 20px;
    border: .5px solid black;
    border-radius: 4px;
    float: left; 

    }

    .sub_btn{
    height: 50px;
    padding: 15px;
    /*margin-top: 10px;
    margin-left: 10px;*/
    border:1px solid #1c8adb; ;
    border-radius: 4px;
    background: #1c8adb;
    color: white;
    float: left;
    }
    .sub_p{
    color: #167BBF;
    font-style: italic;
    font-size: 15px;
    float: left;
    }
    </style>
</head>
<body style="background-image: url(images/back3.jpg);
    background-position: center;
    background-size: 100%;
    background-blend-mode: all;">


<div id="wrapper">
            <!--logo-->
            
                <a href="profile.php" style="width: 100%;
    height: 50px;
    

    margin-top: -50px"><img id="logo" src="images/medhome.png" ></a>
   
           
            
       
    <!-- ajax contact form -->
    <section style="margin-top: -40px; margin-bottom: 30px;">
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card" style="background-color: rgba(0,0,0,0.6);">
                        <h4 class="card-header" style="color: white;">CONTACT US</h4>
                        <div class="card-body">
<form class="contact__form" action="contactus.php" method="post">
    <div class="row">
            <div class="col-md-6 form-group">
                <input name="name" id="name" type="text" class="form-control" placeholder="Name" required>
            </div>
    
    <div class="col-md-6 form-group">
                <input name="email" id="email" type="email" class="form-control" placeholder="Email" required>
    </div>
    <div class="col-md-6 form-group">
                <input name="phone" id="phone" type="text" class="form-control" placeholder="Phone" onblur="maxLengthCheck()" required>
    </div>
    <div class="col-md-6 form-group">
                <input name="subject" id="subject" type="text" class="form-control" placeholder="Subject" required>
    </div>
    < <div class="col-12 form-group">
                                        <textarea name="message" id="message" class="form-control" rows="3" placeholder="Message" required></textarea>
                                    </div>       
        
    
     <div class="col-12">
                                        <input name="submit"  type="submit" class="btn btn-success" value="Send Message" >
                                    </div>

</form>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=taken", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 

if(isset($_POST['submit'])){

// Attempt insert query execution
try{
    // Create prepared statement
    $sql = "INSERT INTO contactus (Name, Email,Phone,Subject,Message) VALUES (:name,:email,:phone,:subject,:message)";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':name', $_REQUEST['name']);
    $stmt->bindParam(':email', $_REQUEST['email']);
    $stmt->bindParam(':phone', $_REQUEST['phone']);
    $stmt->bindParam(':subject', $_REQUEST['subject']);
    $stmt->bindParam(':message', $_REQUEST['message']);
    // Execute the prepared statement
    $stmt->execute();
    echo "<script>alert('Records inserted successfully.')</script>";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
}
?>
</body>
</html>