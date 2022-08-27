
<?php


$server="localhost";
$username="root";
$password="";

$conn=new mysqli($server,$username,$password);
$result=$conn->query("SELECT * FROM kamdhenu.products");

?>

<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container"><br>
<h3><marquee>PRODUCTS</marquee></h3><hr>
<table class="table table-hover table-bordered table-striped">
				<thead class="table-dark">
					<th>S.no</th>
					<th>Name</th>
					<th>Description</th>
					<th>Price</th>
          <th>Colour</th>
          <th>Material</th>
          <th>Size</th>
          <th>Weight</th>
          <th>Image</th>
				</thead>
      
<?php
while($row=$result->fetch_assoc())
  {
    $sn=$row["sn"];
    $name=$row["name"];
    $description=$row["description"];
    $price=$row["price"];
    $colour=$row["colour"];
    $material=$row["material"];
    $size=$row["size"];
    $weight=$row["weight"];
    $image=$row["image"];


?>

<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head> 
<body>
    <tbody>
      <tr>
        <td ><?php print_r($sn); ?></td>      
        <td ><?php print_r($name); ?></td>
        <td ><?php print_r($description); ?></td>
        <td ><?php print_r($price); ?></td>
        <td ><?php print_r($colour); ?></td>
        <td ><?php print_r($material); ?></td>
        <td ><?php print_r($size); ?></td>
        <td ><?php print_r($weight); ?></td>
        <td ><?php echo " <img src='IMAGE/".$row['image']."'  height=100  width=75  /> "; ?></td>
      </tr>
    </tbody>
  <form action="delete-product.php" method="POST">
    <input type="hidden" name="sn" value="<?php echo $sn ?>">
    <button>Delete</button>  
  </form>
  </tr>
    </tbody>
  </div>

  
</body>
</html>

<?php
  }
?>

<!-- 
else
{
    header("location:admin.php");
}
?>
 -->
