<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content=width=device-width,initial-scale=1.0>
	<title>About Us- MedHome.com</title>
	<link rel="icon" href="images/drug.jpg" type="image/icon type">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="css/about.css">
	<style>

body{
    background-image: url(images/main.jpg);
    background-position: center;
    background-size: cover;
    background-blend-mode: all;

}

#logo{ margin-top: -140px;
   
}
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
html{
	height: 100%;
	font-size: 10px;
	font-family: "roboto",sans-serif;
}

a{
	text-decoration: none;
	color: #fff;
}

section{
	padding: 10rem 0;
	background-color: #fff;
}

.heading{
	text-transform: uppercase;
	font-size: 3.5rem;
	letter-spacing: 3px;
	margin-right: -5px;
	margin-bottom: 5rem;
	text-align: center;
	color: #333;
	position: relative;
}

.heading::after{
	content: "";
	width: 10rem;
	height: .8rem;
	background-color: #45e19f;
	position: absolute;
	bottom: -2rem;
	left: 50%;
	transform: translateX(-50%);
	border-radius: 2rem;
}
.parallax1 {
	display: flex;
	align-items: center;
	align-content: center;
	flex-direction: column;
  /* The image used */
  background-image: url('images/aboutus1.jpg');

  /* Full height */
  height: 100%; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.parallax2{
	
	display: flex;
	align-items: center;
	align-content: center;
	flex-direction: column;
	  /* The image used */
  background-image: url('images/aboutus2.jpg');

  /* Full height */
  height: 100%; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}


.card{
	width: 40rem;
	border-radius: 8px;
	background-color: #ebeef8;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	margin: 2rem 0;
	box-shadow: .5rem .5rem 3rem rgba(0,0,0,0.2);
}

.card .card-img{
	width: 100%;
	height: 26rem;
	border-radius: 8px;
	object-fit: cover;
	-webkit-clip-path: polygon(0 0,100% 0,100% 78%,0% 100%);
	clip-path: polygon(0 0, 100% 0, 100% 78%, 0% 100%);
}

.profile-img{
	width: 15rem;
	height: 15rem;
	object-fit: cover;
	border-radius: 50%;
	margin-top: -11rem;
	z-index: 999;
	border: 1rem solid #ebeef8;
}

.card h1{
	font-size: 2.5rem;
	color: #333;
	margin: 1.5rem 0;
}
.card h2{
	font-size: 1.5rem;
	color: red;
	margin: 1.5rem 0;
}

.about{
	font-size: 1.5rem;
	margin: 1.5rem 0;
	font-style: italic;
	text-align: center;
	color: #333;
}

.card .btn{
	padding: 1rem 2.5rem;
	background-color: #445ae3;
	border-radius: 2rem;
	margin: 1rem 0;
	text-transform: uppercase;
	color: #eee;
	font-size: 1.4rem;
	transition: all .5s;
}

.card .btn:hover{
	transform: translateY(-2px);
	box-shadow: .5rem .5rem 2rem rgba(0,0,0,.2);
}

.card .btn:activate{
	transform: translateY(0);
	box-shadow: none;
}

.social-media{
	width: 100%;
	list-style: none;
	display: flex;
	justify-content: space-evenly;
	padding:  2rem 0;
	margin-top: 1.5rem;
	border-top: 1px solid rgb(0,0,0,.1);
}

.social-media i{
	font-size: 3rem;
	transition: color .5s;
}

.fa-facebook-square{
	color: #3b5999;
}
.fa-twitter-square{
	color: #55acee;
}
.fa-instagram{
	color: #e6683c;
}
.fa-google-plus-square{
	color: #dd4b39;
}

.fa-facebook-square:hover,
.fa-twitter-square:hover,
.fa-instagram:hover,
.fa-google-plus-square:hover{
	color: #45e19f;
}


body, html {
  height: 100%;
}
	</style>
</head>
<body>

		<section>
		<div id="main-header">
			<!--logo-->
			
				<a href="web.html"><img id="logo" src="images/medhome.png" ></a>
		</div>
		<div class="container">
			<h1 class="heading">Meet Our Team</h1>

			<div class="parallax1">
	
				<div class="card">
					<img src="images/pic1.jpg" alt="card background" class="card-img">
					<img src="images/anki.jpg" alt="profile image" class="profile-img">
					<h1 id="0"></h1>
					<h2 id="1"></h2>
					<p id="2" class="about">
						

					</p>
					<a href="#" class="btn">Contact</a>
					<ul class="social-media">
						<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
					
					</ul>
				</div>
			</div>
			


			<div class="parallax2">
				<div class="card">
					<img src="images/pic1.jpg" alt="card background" class="card-img">
					<img src="images/aysu.jpg" alt="profile image" class="profile-img">
					<h1 id="3"></h1>
					<h2 id="4"></h2>
					<p id="5" class="about">
						
					</p>
						
					<a href="#" class="btn">Contact</a>
					<ul class="social-media">
						<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
					</ul>
				</div>
			</div>
			
	<div class="parallax1">		
				<div class="card">
					<img src="images/pic1.jpg" alt="card background" class="card-img">
					<img src="images/img1.jpg" alt="profile image" class="profile-img">
					<h1 id="6" ></h1>
					<h2 id="7"></h2>
					<p id="8" class="about">
						
					</p>
					<a href="#" class="btn">Contact</a>
					<ul class="social-media">
						<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
					</ul>
				</div>
			</div>
			
		<div class="parallax2">	
				<div class="card">
					<img src="images/pic1.jpg" alt="card background" class="card-img">
					<img src="images/img.jpg" alt="profile image" class="profile-img">
					<h1 id="9" ></h1>
					<h2 id="10"></h2>
					<p id="11" class="about">
						
					</p>
					<a href="#" class="btn">Contact</a>
					<ul class="social-media">
						<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
					</ul>
				</div>
			</div>
			</div>
			
		</div>
	</section>  
</body>

<script>

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xmlhttp.open("GET", "details.xml", true);
  xmlhttp.send();

function myFunction(xml) {
  var xmlDoc = xml.responseXML;
  var x = xmlDoc.getElementsByTagName("name");
  var y = xmlDoc.getElementsByTagName("designation");
  var z = xmlDoc.getElementsByTagName("description");
  for (var i = 0; i < x.length; i++) {
        name  = x[i].childNodes[0].nodeValue;
        designation  = y[i].childNodes[0].nodeValue;
        description  = z[i].childNodes[0].nodeValue;
        k=3*i;
        l=k+1;
        m=l+1;
        var a = k.toString();
        var b = l.toString();
        var c = m.toString();

        document.getElementById(a).innerHTML = name;
        document.getElementById(b).innerHTML = designation;
        document.getElementById(c).innerHTML = description;
    }

  
  
}
</script>

</html>








