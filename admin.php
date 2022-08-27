
<?php
session_start();
if($_SESSION["user"])
{
?>

<!DOCTYPE html>
<html>
	<head>
		<title>E-com: Admin</title>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="admincss/admin-style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">  
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	</head>
	<body>

	
	
	
	<div class="fluid">
			<section>
			
				<br>
				<p style="font-size: 22px; color: green">Welcome to Admin Panel<p>
				
				<div class="list-group p-2" id="myList" role="tablist">
				  <a class="list-group-item list-group-item-action active button" data-toggle="list" href="#home" role="tab">Category</a>
				  <a class="list-group-item list-group-item-action button" data-toggle="list" href="#profile" role="tab">Products</a>
				  <a class="list-group-item list-group-item-action button" data-toggle="list" href="#messages" role="tab">Customer Enquiry</a>
				</div>
				
				
				
				<div class="tab-content" id="sub-list">
				
				  <div class="tab-pane active p-2" id="home" role="tabpanel">
				  	<br>
				  	<a href="category.php"><button class="btn btn-primary button">Add category</button></a>
				  	<br><br>
				  	<a href="delete-category.jsp"><button class="btn btn-danger button">Delete category</button></a>
				  </div>
				  
				  <div class="tab-pane p-2" id="profile" role="tabpanel">
				  	<a href="add-product.php"><button class="btn btn-primary button">Add product</button></a>
					<br><br>
					<a href="update.php"><button class="btn btn-warning button">Update product</button></a>
					<br><br>
					<a href="delete-product.jsp"><button class="btn btn-danger button">Delete product</button></a>
					<br><br>
					<a href="view-all-product.php"><button class="btn btn-info button">View All product</button></a>
					<br><br>
					<a href="gallery.php"><button class="btn btn-info button">Gallery</button></a>
					<br><br>

				  </div>
				  
				  <div class="tab-pane p-2" id="messages" role="tabpanel">
					<a href="view-enquiry.php"><button class="btn btn-info button">View Enquiry</button></a>
					<br><br>
					<a href="view-customer-review.php"><button class="btn btn-info button">Customer Review</button></a>
					<br><br>
					<a href="vieworder.php"><button class="btn btn-info button">View orders</button></a>


				  </div>
				</div>
				
				<br><br>
				
				
				<form action="logout2.php" method="post" style="display: inline;">
					<input type="hidden" name="logout" value="logout">
					<button class="btn btn-secondary ml-2 mt-2" style= "width: 48%;"  >log out</button>
				</form>
		<!-- Change Password -->
		
				<a href="change.php"><button class="btn btn-warning ml-2 mt-2" style="display: inline; width: 48%;">Change Credentials</button></a>
				
				
				
				
				
				
				<script>
				  $(function () {
				    $('#myList a:last-child').tab('show')
				  })
				</script>
			</section>
		</div>
			
		

			
	</body>
</html>
<?php
}
else

{
	header("location:adminlogin.php");
}
?>