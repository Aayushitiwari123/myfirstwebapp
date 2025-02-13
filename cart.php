
<!DOCTYPE html>
<html>
<head>
	<title>Your Cart - MedHome.com</title>
	<link rel="stylesheet" type="text/css" href="css/cart.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="icon" href="images/drug.jpg" type="image/icon type">
</head>
<body>
	<div id="wrapper">
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.html">Simple Ecommerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item m-auto">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category.html">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.html">Product</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.html">Cart <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <a class="btn btn-success btn-sm ml-3" href="cart.html">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light">3</span>
                </a>
            </form>
        </div>
    </div>
</nav>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">E-COMMERCE CART</h1>
     </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Product Name Dada</td>
                            <td>In stock</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">124,90 €</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Product Name Toto</td>
                            <td>In stock</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">33,90 €</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Product Name Titi</td>
                            <td>In stock</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">70,00 €</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right">255,90 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Shipping</td>
                            <td class="text-right">6,90 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>346,90 €</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button class="btn btn-block btn-light">Continue Shopping</button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div id="footer">
	
		<div class="container">
			<div class="footer_sub">
				<h3>About Website</h3>
				<hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
				<p >MedHome is in top 10 pharmacy website in India - provinding every kind of medicines and drugs
				Ayurvedic - 1.Patanjali 2.Dabur 3.Baidyanath being the common brands for medicines. 
				Homeopathic and Allopathic drugs and doctor's contacts provided for prescription. Delivery of goods within 4-7 working days. 
				 </p>
			</div>
			<div class=" footer_sub2 ">
				<center>
					<h3>Important Links</h3>
					<hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
					<ul class="list-unstyled">
						<li><a href="web.php">Home</a></li>
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
				<h3>Social Links</h3>
					<hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
					<ul class="list-unstyled">
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
					<h3>Subscribe Us</h3>
					<hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
				<input type="text" name="subs" placeholder="Write your e-mail id here" class="subs" >
				<input type="submit" name="submit_btn" value="Subscribe" class="sub_btn">
				<p class="sub_p">Subscribe us to get Updates!</p>
				</center>
			</div>
		</div>
		
	</div>
            
                
              <!--  <p class="text-right text-muted">created with <i class="fa fa-heart"></i> by <a href="https://t-php.fr/43-theme-ecommerce-bootstrap-4.html"><i>t-php</i></a> | <span>v. 1.0</span></p> -->
            
        
    </div>
</div>

</body>
</html>