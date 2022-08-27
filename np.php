<?php
                           session_start();

?>

<!DOCTYPE html>
<html lang="en">
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

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
      <meta charset="UTF-8">
      <title>Chamb - Responsive E-commerce HTML5 Template</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="css1/font-awesome.min.css">
      <!--bootstrap css-->
      <link rel="stylesheet" href="css1/bootstrap.min.css">
      <!--animate css-->
      <link rel="stylesheet" href="css1/animate-wow.css">
      <!--main css-->
      <link rel="stylesheet" href="css1/style.css">
      <link rel="stylesheet" href="css1/bootstrap-select.min.css">
      <link rel="stylesheet" href="css1/slick.min.css">
      <link rel="stylesheet" href="css1/select2.min.css">
      <!--responsive css-->
      <link rel="stylesheet" href="css1/responsive.css">
      <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

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
        
        
   </head>
   <body>
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
    <header id="home" class="welcome-hero">

<div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <!--/.carousel-indicator -->
     
    <!--/.carousel-indicator -->

    <!--/.carousel-inner -->
    <div class="carousel-inner" role="listbox">
        <!-- .item -->
        <div class="item active">
            <div class="single-slide-item slide1">
                <div class="container">
                    <div class="welcome-hero-content">
                        <div class="row">
                <?php
                
//                       $a=$_POST["sn"];
//                       echo "<br> <br> <br>";
//                       echo $a;

            

$sn=$_POST['sn'];


$server="localhost";
$username="root";
$password="";

$conn=new mysqli($server,$username,$password);
$result=$conn->query("SELECT * FROM kamdhenu.products where sn='".$_POST["sn"]."'");


$row=mysqli_fetch_array($result);

if(is_array($row))
{
// $sn=$row["sn"];
$name=$row["name"];
$des=$row["description"];
$material=$row["material"];
$op=$row["original_price"];
$sp=$row["selling_price"];
$image=$row["image"];
$colour=$row["colour"];
$size=$row["size"];
$weight=$row["weight"];

}


?>
             
                            <div class="col-sm-7">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-txt">
                                        <h4 style="txt-color:black"><?php print_r($name)?></h4>
                                        <!-- <h2>cloth covered accent chair</h2> -->
                                        <p> <?php print_r($des)?></p>
                                        
                                        <div class="packages-price">
                                             <div>
                                            <h5 class="display-5 text-dark" style="font-size: 20px;color:#303030 !important;"><s>₹ <?php print_r($op); ?></s></h5>

                                            <h5 class="display-5 text-dark" style="color:#d13e3e !important; padding-top:10px;">₹ <?php print_r($sp); ?></h5></div>
                                            <br>
                                            <h5 style="color: #fabb14; font-size:18px;"><?php print_r($colour)?></h5>
                                            <br>
                                            <h5 style="color: #3b3b3b; font-size:18px;">size - <?php print_r($size)?></h5>
                                        <br>
                                            <h5 style="color: #565656; font-size:18px;">weight - <?php print_r($weight)?></h5>
                                        </div>
                                    <form action="orderby.php" method="post">
                                        <input type="hidden" name="sn" value=<?php echo "$sn"?>/><br><br>

                                        <button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
                                        By<span>Now</span>
                                        </button>  
                                    </form>
                                    </div><!--/.welcome-hero-txt-->
                                </div><!--/.single-welcome-hero-->
                            </div>
                            <div class="col-sm-5">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-img">
                                        <!-- <img src="assets/images/slider/slider1.png" alt="slider image"> -->
                                        <?php echo " <img src='IMAGE/".$row['image']."' height=3000  width=170 class='img-fluid' style='width: 253px;
                                         height: 213px; object-fit: fill;' alt='Image'/> "; ?> 
                                    
                                    </div><!--/.welcome-hero-txt-->
                                </div><!--/.single-welcome-hero-->
                            </div><!--/.col-->
                        </div><!--/.row-->
                    </div><!--/.welcome-hero-content-->
                </div><!-- /.container-->
            </div><!-- /.single-slide-item-->

        </div><!-- /.item .active-->

       
      <!--main js--> 
      <script src="js1/jquery-1.12.4.min.js"></script> 
      <!--bootstrap js--> 
      <script src="js1/bootstrap.min.js"></script> 
      <script src="js1/bootstrap-select.min.js"></script>
      <script src="js1/slick.min.js"></script> 
      <script src="js1/select2.full.min.js"></script> 
      <script src="js1/wow.min.js"></script> 
      <!--custom js--> 
      <script src="js1/custom.js"></script>
   </body>
</html>