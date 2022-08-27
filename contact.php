
<?php
session_start();
$msg="";
    if(!empty($_SESSION["msg"]))
    {
        $msg=$_SESSION["msg"];

    }
    session_destroy();
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

		<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Shri Kamdhenu Pujan Bhranda</title>  
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
	<link rel="stylesheet" href="css/popup.css"> 


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
		<script src="js/popup.js"> </script>


</head>

    <body style="bgcolor:orange">
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<!-- <img src="images/logo.png" alt="" /> -->
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>

				<!-- <div class="form-popup" id="myForm" > -->
						<!-- <form action="/action_page.php" class="form-container" id=myForm>
							<h>UPLOAD LIST</h4>

							<input type="file" name="upload" >

							<button type="submit" class="btn">SUBMIT</button>
							<!-- <button type="button" class="btn cancel" onclick="closeForm()">Close</button> -->
						</form> 
		        <!-- </div> -->
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="product.php">Product</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						<li class="nav-item dropdown">
							 <!-- <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								 <a class="dropdown-item" href="reservation.html">Reservation</a> 
								<a class="dropdown-item" href="stuff.html">Stuff</a>
								<a class="dropdown-item" href="gallery.php">Gallery</a>
							</div>  -->
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.php">blog</a>
								<a class="dropdown-item" href="blog-details.php">blog Single</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

						
						<!-- <li class="nav-item"><a class="nav-link" href="about.php">Upload list</a></li> -->

					</ul>
				</div>
			</div>
		</nav>
	</header>

    
        <div class="container-fluid">
            <div class="form-group">
                <!-- <h3 class="display-9" align="center">PLACE ORDER</h3><hr> -->
                <!-- <h3 class="text-white bg-#ffa500"><strong>PLACE ORDER<strong></h3><hr> -->
                <h2 style="background-color: orange; opacity: 0.6;"><center><strong>CONTACT</strong></center></h2><hr>


<div class="card">
				<div class="card-header">
					<!-- <h4 display-4>PLACE ORDER </h4><br> -->
					<div class="row"> 
						<div class="col-sm-6">
							<div class="card">
								<div class="card-header">
									<div class="form-group">
										<!-- <h5>Registered Customers</h5><hr><br> -->
										<!-- <h7>If you want to place order fill the given form.</h7> -->
											<form action="contact1.php" method="post">
											<h3 class="display-4 text-text-muted "><mark><?php print_r($msg)?></mark></h3>
												
												<label>Your Name:</label> 
													<input type="text" name="name" class="form-control"/>
                                                <label>Your Contact:</label> 
													<input type="number" name="contact" class="form-control"/>
                                                <label>Your Email:</label> 
													<input type="email" name="mail" class="form-control" />
											    <label>Your Message</label> 
                                                    <textarea class="form-control" name="message" placeholder="Your Message" id="message" rows="4" data-error="Write your message" required></textarea>
												
													<!-- <input type="hidden" name="product" value=<?php echo "$sn"?>/><br><br> -->

                                <div class="submit-button text-center">
									<button class="btn btn-warning" id="submit" type="submit">Send Message</button>
									<!-- <div id="msgSubmit" class="h3 text-center hidden"></div> 
									<div class="clearfix"></div>  -->
								</div>

											</form>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<!-- <div class="card">
								<div class="card-header">
									<div class="form-group">
										<h5>New Customers</h5><hr><br>
										<h7>Creating an account has many benefits: check out faster, keep more than one address, track orders and more.</h7>
											<form type="text" method="post"><br>
												<input type="button" value="create an account" class="btn btn-warning btn-outline-danger">
											</form>
									</div>
								</div>
							</div> -->
							<img src="banner/12.png" width="510" height="544"/> 
						</div>
				</div>
			</div>
</body>
</html>