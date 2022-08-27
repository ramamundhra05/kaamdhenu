<?php

$server="localhost";
$username="root";
$password="";

$conn=new mysqli($server,$username,$password);
$result=$conn->query("SELECT * FROM kamdhenu.order ")

?>

<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script></head>
<body>
    <div class="container"><br>
        <h3><marquee>CUSTOMER ORDERS</marquee></h3><hr>
        <table class="table table-hover table-bordered table-striped">
				<thead class="table-dark">
					<th>S.no</th>
					<th>Date</th>
					<th>Name</th>
					<th>Address</th>
					<th>Contact</th>
                    <th>Email</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Product Image</th>
                    <th>List</th>


				</thead>
        <!-- </table>
</body>
</html> -->

<?php
//output data of each row
while($row=$result->fetch_assoc())
{
    $sn=$row["sn"];
    $date=$row["date"];
    $name=$row["name"];
    $address=$row["address"];
    $contact=$row["contact"];
    $email=$row["email"];
    $product=$row["product"];
    $quantity=$row["quantity"];
    $list=$row["list"];


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
            <td><?php print_r($sn);?></td>
            <td><?php print_r($date);?></td>
            <td><?php print_r($name);?></td>
            <td><?php print_r($address);?></td>
            <td><?php print_r($contact);?></td>
            <td><?php print_r($email);?></td>
            <td><?php print_r($product);?></td>
            <td><?php print_r($quantity);?></td>
            <td><?php print_r($list);?></td>

            <?php


$server="localhost";
$username="root";
$password="";

$conn=new mysqli($server,$username,$password);
$result=$conn->query("SELECT image FROM kamdhenu.products where sn=".$product);

// $row=mysqli_fetch_array($result);

// if(is_array($row))

// $image=$row["image"];

?>
        </tr>
    </tbody>
    </div>
</body>
</html>

<?php

}
?>



 