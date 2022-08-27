<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>SHRI KAMDHENU PUJAN BHANDAR</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- meta data -->
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>Furniture</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <link rel="stylesheet" href="css/cat.css">


        <!--linear icon css-->
		<link rel="stylesheet" href="assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		
        <!--bootstrap.min.css--> 
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script src="js/cat.js"> </script>

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<!-- <img src="images/logo.png" alt="" /> -->
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item active"><a class="nav-link" href="product.php">Product</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						<li class="nav-item dropdown">
							<!-- <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.html">Reservation</a>
								<a class="dropdown-item" href="stuff.html">Stuff</a>
								<a class="dropdown-item" href="gallery.html">Gallery</a>
							</div> -->
						</li>
						<!-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.php">blog</a>
								<a class="dropdown-item" href="blog-details.php">blog Single</a>
							</div>
						</li> -->
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Special Menu</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Menu -->
	<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
  <?php
           function hello()
           {
           
                   $server="localhost";
                   $username="root";
                   $password="";
                   
                   $conn=new mysqli($server,$username,$password);
  
                   $result=$conn->query("SELECT * FROM kamdhenu.category");
            
				    while($row=$result->fetch_assoc())
                   {
					   $category=$row['category_name'];
					   $categoryy="#".$category;
					   echo $categoryy;
				  
				   ?>

                 <!-- <a href="#"><?php print_r($category); ?></a> -->
                 <form action="newindex.php">
                   <input type="hidden" name=<?php echo $category; ?>></input>
                   <button><a> <?php print_r($category); ?> </a></button>
                 </form>
            <?php }

                   }
            
                   
            ?>
   
    
  </div>
</div>
    <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>  -->

	<section id="new-arrivals" class="new-arrivals">
			<div class="container">
				<div class="section-header">
					<h2 text-color="black"><strong>Products</strong></h2> 
					<!-- <p class="text-white bg-orange"><strong>Product<strong></p> -->

				</div><!--/.section-header-->
				<div class="new-arrivals-content">
					<div class="row">
                <?php
                
                   $server="localhost";
                   $username="root";
                   $password="";
                   
                   $conn=new mysqli($server,$username,$password);
                    
                  
                   if(true)
                   {
                   $result=$conn->query("SELECT * FROM kamdhenu.products");
                   }
                   else
                   {
                    //$result=$conn->query("SELECT * FROM kamdhenu.products");
                   }
                   
                   //output data of each row
                   while($row=$result->fetch_assoc())
                   {	$sn=$row["sn"];
                    	$name=$row["name"];
                    	$op=$row["original_price"];
						$sp=$row["selling_price"];
                    	$material=$row["material"];
                    ?>
					 <div class="col-md-3 col-sm-4" >
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<!-- <img src="assets/images/collection/arrivals1.png" alt="new-arrivals images"> -->
									<?php echo " <img src='IMAGE/".$row['image']."' height=3000  width=170 class='img-fluid' style='width: 253px;
                                         height: 213px; object-fit: fill;' alt='Image'/> "; ?> 
                                    
                                    <div class="single-new-arrival-bg-overlay"></div>
									<!-- <div class="sale bg-1">
										<p>sale</p>
									</div> -->
									<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
											<form action="np.php" method="post">
												<input type="hidden" name="sn" value=<?php echo $sn;  ?>> 
												<button>Shop Now</button>
				                            </form>
											<!-- <a href="orderby.php">Shop<span>Now</span> </a> -->
										</p>
										<p class="arrival-review pull-right">
											<span class="lnr lnr-heart"></span>
											<span class="lnr lnr-frame-expand"></span>
										</p>
									</div>
								</div>
								<h4><a href="#"><?php print_r($name)?></a></h4>
								<p class="arrival-product-price">Rs.    <s>₹ <?php print_r($op); ?></s>         ₹ <?php print_r($op); ?></p>
							</div>
						</div>  
                        <?php
                   }
                        ?>
						
<!-- End Menu -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
					<span class="lead"><display-2>Our Vision</display-2></span>
						<p>To Provide best quality religious items with purity, love and hygiene as our top priorities.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Customer Reviews -->
	
	<!-- End Customer Reviews -->
	
	<!-- Start Contact info -->
	<!-- <div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4 ">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							9838615191
						</p>

					</div>
				</div>
				<div class="col-md-4 ">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							ramamundra2019@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker" href="#Englishia+Line+Rd,+Varanasi,+Uttar+Pradesh+221002/@25.3246045,82.9881459,17.98z/data=!4m5!3m4!1s0x398e2de41ad58939:0xa5339debef61add8!8m2!3d25.3241769!4d82.9894397"></i>
					<div class="overflow-hidden">
						<h4 >Location</h4>
						<script>
							var x = document.getElementById('demo');
							function getLocation(){
								if(navigator.geolocation){
									navigator.getlocation.currentPosition(showPosition);
								}
								else{
									x.innerHTML = "Geolocation is not supported.";
								}
							}
							</script>
						<p class="lead">
							Englishia Line Road, English Line, Varanasi - 221002 (Beside Gate No 2 Kashi Vidyapeeth)
						</p>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>Kamdhenu Pujan Bhandar in English Line, Varanasi is known to satisfactorily cater to the demands of its customer base. It stands located at Beside Gate No 2 Kashi Vidyapeeth, Englishia Line Road, English Line-221002. Beside Gate No 2 Kashi Vidyapeeth is a prominent landmark in the area and this establishment is in close proximity to the same.The business strives to make for a positive experience through its offerings. The accepted modes of payment such as Cash make every business transaction easy and seamless, contributing to making the entire process even more effective.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>REVIEW</h3>
					<div class="subscribe_form">
						<form class="subscribe_form" action="customerreview.php" method="post">
							<input name="name" id="subs-email" class="form_input" placeholder="NAME..." type="text">
							<input name="email" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<input name="contact" id="subs-email" class="form_input" placeholder="Contact Number..." type="number">
							<textarea name="review" id="subs-email" class="form_input" placeholder="REVIEW..." type="text"></textarea>


							<button type="submit" class="submit">SUBMIT</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<!-- <ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul> -->
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">Englishia Line Road, English Line, Varanasi - 221002 (Beside Gate No 2 Kashi Vidyapeeth)</p>
					<p class="lead"><a href="phone">9838615191</a></p>
					<p><a href="#">ramamundra2019@gmail.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					
					<p><span class="text-color">Tue-Wed :</span>Monday:- 10:00 Am - 10:00 Pm
					<p><span class="text-color">Tue-Wed :</span>Tuesday:- 10:00 Am - 10:00 Pm
					<p><span class="text-color">Tue-Wed :</span>Wednesday:- 10:00 Am - 10:00 Pm
					<p><span class="text-color">Tue-Wed :</span>Thursday:- 10:00 Am - 10:00 Pm
					<p><span class="text-color">Tue-Wed :</span>Friday:- 10:00 Am - 10:00 Pm
					<p><span class="text-color">Tue-Wed :</span>Saturday:- 10:00 Am - 10:00 Pm</p>
				
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<!-- <div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2018 <a href="#">Live Dinner Restaurant</a> Design By : 
					<a href="https://html.design/">html design</a></p>
					</div> -->
				</div>
			</div>
		</div>
		
	</footer><!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>