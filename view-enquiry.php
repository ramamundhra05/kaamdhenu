<?php

$server="localhost";
$username="root";
$password="";

$conn=new mysqli($server,$username,$password);
$result=$conn->query("SELECT * FROM kamdhenu.contact");
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
        <h3><marquee>CUSTOMER ENQUIRY</marquee></h3><hr>
        <table class="table table-hover table-bordered table-striped">
				<thead class="table-dark">
					<th>S.no</th>
					<th>Date</th>
					<th>Name</th>
					<th>E.mail id</th>
					<th>Message</th>
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
    $email=$row["email"];
    $message=$row["message"];

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
            <td><?php print_r($email);?></td>
            <td><?php print_r($message);?></td>
        </tr>
    </tbody>
    </div>
</body>
</html>

<?php

}
?>



 