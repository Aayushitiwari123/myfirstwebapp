<!DOCTYPE html>
<html>
<head>
	<title>MedHome</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="images/drug.jpg" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">

	<link rel="stylesheet"  type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/media.css">
</head>
<body>
	<div id="wrapper">
	<div id="header">
		<div id="subheader">
			<div class="container">
				<p>Most Trusted Online Pharmacy site! </p>
			<a href="contactus.php">Contact us</a><a href="map/index.php">Consult a Doctor</a><a href="about.php">About Us</a><a href="FAQ.html">FAQs</a>
			</div>
		</div>
		<!--==main header==-->
		<div id="main-header">
			<!--logo-->
			
				<a href="index.php"><img id="logo" src="images/medhome.png" ></a>

			
			<!--==search area==-->
			<div id="search">
				<form action="">
					<input class="search-area" type="text" name="text" placeholder="Search here">
					<input class="search-btn" type="submit" name="submit" value="GO" >

				</form>
			</div>
			<!--==USER Menu==-->
			<div id="user-menu">
				<li><a href="#">Cart</a></li>
				<li><a href="loginmain.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
			</div>
			
		</div>
	</div>
	<!----====NAVIGATION BAR====---->
	<div id="navigation">
		<nav>
			<a href="#">Home</a>
			<a href="#">New Arrivals</a>
			<a href="#">Deals</a>
			<a href="#">Syrups</a>
			<a href="#">Tablets</a>
			<a href="#">Products</a>
			<a href="#">Order</a>
		</nav>
	</div>
	<!--==Home-slider===-->
	<div id="slider">
		<ul class="bxslider">
			<li><img src="images/ayufirst.jpg"></li>
			<li><img src="images/home2.jpg"></li>
			<li><img src="images/allobanner.jpg"></li>
			
		</ul>
	</div>
	<!--=== Category Boxes===-->

	<div class ="container">
		<div id="heading-block">
			<h2> Category </h2>	
		</div>
		<!--==1st category==-->
	<a href="#">
		<div class="catbox">
			<img id="cat1" src="images/patanjalifinal.jpg" alt="Patanjali Ayurvedic Range" height="230px" width="230px">
			<span>Patanjali</span>
		</div>
	</a>
		<!--==2nd category==-->
	<a href="#">
		<div class="catbox">
			<img src="images/daburfinal.jpg" alt="Dabur Ayurvedic Range" height="230px" width="230px">
			<span>Dabur</span>
		</div>
	</a>
		<!--==3rd category==-->
	<a href="#">
		<div class="catbox">
			<img src="images/baidfinal.jpg" alt="Baidyanath Ayurvedic Range" height="230px" width="230px">
			<span>Baidyanath</span>
		</div>
	</a>
	<!--==4th category==-->
	<a href="#">
		<div class="catbox">
			<img src="images/allopathyfinal.jpg" alt="Allopathic Range" height="230px" width="230px">
			<span>Allopathic</span>
		</div>
	</a>
	<!--==5th category==-->
	<a href="#">
		<div class="catbox">
			<img src="images/homeop3.jpg" alt="Homeopathic Range" height="230px" width="230px">
			<span>Homeopathic</span>
		</div>
	</a>
	<!-- HEADING OF PRODUCTS-->
	<div id="heading-block">
		<h2> Featured Products</h2>
	</div>
	
	<div class="prod-container">
		<div id="heading2-block">
		<h2>Patanjali</h2>
	    </div>
		<!--first prod-->
		<div class="prod-box">
			<img src="images/patanjaliprod/Ashwagandhachurna.jpg" alt="Ashwagandha churna">
			<div class="prod-trans">
				<div class="prod-feature">
					<p>Ashwagandha Churna</p>
					<p style="color: #fff; font-weight:bold;  ">Price : Rs. 56 </p>
					<a href="action.php?id=<?= $row['id']?>" class="cart_button"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp; Add to Cart</a>
				</div>
			</div>
		</div>
		<!--second prod-->
		<div class="prod-box">
			<img src="images/patanjaliprod/DivyaMedhaVatiexpower.jpg" alt="Divya Medha Vati Extra Power Tablets">
			<div class="prod-trans">
				<div class="prod-feature">
					<p>Divya Medha Vati Extra Power Tablets 30x4</p>
					<p style="color: #fff; font-weight:bold;  ">Price : Rs. 185 </p>
					<a href="action.php?id=<?= $row['id']?>" class="cart_button"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp; Add to Cart</a>
				</div>
			</div>
		</div>
		<!--third prod-->
		<div class="prod-box">
			<img src="images/patanjaliprod/Divyapeedantakvati.jpg" alt="Divya Peedantak Vati">
			<div class="prod-trans">
				<div class="prod-feature">
					<p>Divya Peedantak Vati</p>
					<p style="color: #fff; font-weight:bold;  ">Price : Rs. 45 </p>
					<a href="action.php?id=<?= $row['id']?>" class="cart_button"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp; Add to Cart</a>
				</div>
			</div>
		</div>
		<!--fourth prod-->
		
		<div class="prod-box">
			<img src="images/patanjaliprod/Lohasava.jpg" alt="Lohasava">
			<div class="prod-trans">
				<div class="prod-feature">
					<p>Lohasava</p>
					<p style="color: #fff; font-weight:bold;  ">Price : Rs. 85 </p>
					<a href="action.php?id=<?= $row['id']?>" class="cart_button"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp; Add to Cart</a>
				</div>
			</div>
		</div>
		<!--fifth prod-->
		<div class="prod-box">
			<img src="images/patanjaliprod/TriphalaChurna.jpg" alt="Triphala Churna">
			<div class="prod-trans">
				<div class="prod-feature">
					<p>Triphala Churna</p>
					<p style="color: #fff; font-weight:bold;  ">Price : Rs. 23</p>
					<a href="action.php?id=<?= $row['id']?>" class="cart_button"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp; Add to Cart</a>
				</div>
			</div>
		</div>
		<!--sixth prod-->
		<div id="heading2-block">
		<h2>Dabur</h2>
	</div>
		<div class="prod-box">
			<img id="daburimg" src="images/Dabur/mensta.jpg" alt="Mensta Syrup">
			<div class="prod-trans">
				<div class="prod-feature">
					<p>Mensta Syrup</p>
					<p style="color: #fff; font-weight:bold;  ">Price : Rs. 105 </p>
					<a href="action.php?id=<?= $row['id']?>" class="cart_button"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp; Add to Cart</a>
				</div>
			</div>
		</div>
		<!--seventh prod-->
		<div class="prod-box">
			<img  id="daburimg" src="images/Dabur/Shwaasmrit.jpg" alt="Shwaasmrit">
			<div class="prod-trans">
				<div class="prod-feature">
					<p>Shwaasamrit</p>
					<p style="color: #fff; font-weight:bold;  ">Price : Rs. 360 </p>
					<a href="action.php?id=<?= $row['id']?>" class="cart_button"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp; Add to Cart</a>
				</div>
			</div>
		</div>
		<!--eigth prod-->
		<div class="prod-box">
			<img id="daburimg" src="images/Dabur/madhurakshak.jpg" alt="Madhurakshak">
			<div class="prod-trans">
				<div class="prod-feature">
					<p>Madhurakshak</p>
					<p style="color: #fff; font-weight:bold;  ">Price : Rs. 249 </p>
					<a href="action.php?id=<?= $row['id']?>" class="cart_button"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp; Add to Cart</a>
				</div>
			</div>
		</div>
		<!--ninth prod-->
		<div class="prod-box">
			<img id="daburimg" src="images/Dabur/lipistat.jpg" alt="Lipistat tablets">
			<div class="prod-trans">
				<div class="prod-feature">
					<p>Lipistat tablets</p>
					<p style="color: #fff; font-weight:bold;  ">Price : Rs. 170 </p>
					<a href="action.php?id=<?= $row['id']?>" class="cart_button"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp; Add to Cart</a>
				</div>
			</div>
		</div>
		<!--tenth prod-->
		<div class="prod-box">
			<img id="daburimg" src="images/Dabur/chyawanprash.jpg" alt="Chyawanprash">
			<div class="prod-trans">
				<div class="prod-feature">
					<p>Chyawanprash</p>
					<p style="color: #fff; font-weight:bold;  ">Price : Rs. 274 </p>
					<a href="action.php?id=<?= $row['id']?>" class="cart_button"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp; Add to Cart</a>
				</div>
			</div>
		</div>
		<div id="heading2-block">
		<h2>Baidyanath</h2>
	</div>
		<!--11th prod-->
		<div class="prod-box">
			<img src="images/baidyanath/AKIKPISTI.jpg" alt="AKIKPISTI">
			<div class="prod-trans">
				<div class="prod-feature">
					<p>Akikpisti</p>
					<p style="color: #fff; font-weight:bold;  ">Price : Rs. 86 </p>
					<a href="action.php?id=<?= $row['id']?>" class="cart_button"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp; Add to Cart</a>
				</div>
			</div>
		</div>
		<!--12th prod-->
		<div class="prod-box">
			<img src="images/baidyanath/AbhrakBhasm.jpg" alt="AbhrakBhasm">
			<div class="prod-trans">
				<div class="prod-feature">
					<p>AbhrakBhasam</p>
					<p style="color: #fff; font-weight:bold;  ">Price : Rs. 96 </p>
					<a href="action.php?id=<?= $row['id']?>" class="cart_button"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp; Add to Cart</a>
				</div>
			</div>
		</div>
		<!--13th prod-->
		<div class="prod-box">
			<img src="images/baidyanath/AgnikumarRas.jpg" alt="AgnikumarRas">
			<div class="prod-trans">
				<div class="prod-feature">
					<p>AgnikumarRas</p>
					<p style="color: #fff; font-weight:bold;  ">Price : Rs. 75 </p>
					<a href="action.php?id=<?= $row['id']?>" class="cart_button"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp; Add to Cart</a>
				</div>
			</div>
		</div>
		<!--14th prod-->
		<div class="prod-box">
			<img src="images/baidyanath/AgnimukhChurn.jpg" alt="Agnimukh Churn">
			<div class="prod-trans">
				<div class="prod-feature">
					<p>Agnimukh Churn</p>
					<p style="color: #fff; font-weight:bold;  ">Price : Rs. 85 </p>
					<a href="action.php?id=<?= $row['id']?>" class="cart_button"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp; Add to Cart</a>
				</div>
			</div>
		</div>
		<!--15th prod-->
		<div class="prod-box">
			<img src="images/baidyanath/AbhrakbhasmaSahasraputi.jpg" alt="Abhrak Bhasm Sahasraputi">
			<div class="prod-trans">
				<div class="prod-feature">
					<p>Abhrak Bhasm Sahasraputi</p>
					<p style="color: #fff; font-weight:bold;  ">Price : Rs. 335 </p>
					<a href="action.php?id=<?= $row['id']?>" class="cart_button"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp; Add to Cart</a>
				</div>
			</div>
		</div>

	</div>
	<!--offer
	<div class="container">
		<div id="heading-block"></div>
		<h2>Offer</h2>
	</div>
	
	<div class="offer">
		<a href="#"><img src="images/offer1.jpg"></a>
	</div>
	<div class="offer">
		<a href="#"><img src="images/offer1.jpg"></a>
	</div>
	<div class="offer">
		<a href="#"><img src="images/offer1.jpg"></a>
	</div>
	-->
	</div>
	<div id="footer">
		<div class="container">
			<div class="footer_sub">
				<h2>About Website</h2>
				<p>MedHome is in top 10 pharmacy website in India - provinding every kind of medicines and drugs
				Ayurvedic - 1.Patanjali 2.Dabur 3.Baidyanath being the common brands for medicines. 
				Homeopathic and Allopathic drugs and doctor's contacts provided for prescription. Delivery of goods within 4-7 working days. 
				 </p>
			</div>
			<div class="footer_sub2">
				<center>
					<h2>Important Links</h2>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">New Arrivals</a></li>
						<li><a href="#">Deals</a></li>
						<li><a href="#">Syrups</a></li>
						<li><a href="#">Tablets</a></li>
						<li><a href="#">Products</a></li>
						<li><a href="#">Order</a></li>
					</ul>
					
				</center>
			</div>
			<div class="footer_sub2">
				<center>
					<h2>Social Links</h2>
					<ul>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Google+</a></li>
						<li><a href="#">Youtube</a></li>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">LinkedIn</a></li>
						<li><a href="#">Blogger</a></li>
						<li><a href="#">Digg</a></li>
					</ul>
					
				</center>
			</div>
			<div class="footer_sub3">
				<center>
					<h2>Subscribe Us</h2>
				<input type="text" name="subs" placeholder="Write your e-mail here" class="subs" >
				<input type="submit" name="submit_btn" value="Subscribe" class="sub_btn">
				<p class="sub_p">Subscribe us to get Updates!</p>
				</center>
			</div>
		</div>
	</div>
</div>
<script
  src="http://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/my.js"></script>
</body>
</html>