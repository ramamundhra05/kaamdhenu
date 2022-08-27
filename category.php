<?php
session_start();
if($_SESSION["user"])
{
?>

<html>
    <head>
    <style type="text/css">
			#h1{color: red;}
			#h2{color: skyblue;}
    </style>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php

        $msg="";
        if(!empty($_SESSION['msg']))
        {
            $msg=$_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
    <h3 class="display-4 text-text-muted "><mark><?php print_r($msg)?></mark></h3>

    <div class="container">

        <div class="row">
            <div class="col-md-6 bg-secondary text-white">      
                <form action="category1.php" method="POST" class="form-fullwidth"  enctype="multipart/form-data">
                <h4 id="h1"><strong>ADD TO CATEGORY</strong></h3>

                <label>
                    <input type="text" name="category" placeholder="ADD CATEGORY" class="form-control"/>
                </label><br>
    
                <button class="btn btn-dark btn-outline-info button">ADD TO CATEGORY</button>

                </form>
    
            </div> 
        
    
        

        <div class="col-md-6 bg-secondary text-white">  

        <h4 id="h1"><strong>VIEW CATEGORY</strong></h3>
        <p> View Category :
                <select name="category"  size="7">
                    
        <?php

        // $category=$_POST["category"];
        $server="localhost";
        $username="root";
        $password="";
        
        $conn=new mysqli($server,$username,$password);
        $result=$conn->query("SELECT * FROM kamdhenu.category");

        while($row=$result->fetch_assoc())
  {
        $category=$row["category_name"];

        ?>

    
        
    </body>
    
    
    <option value=<?php echo"$category"?>> <?php print_r($category) ?>  </option>

    </html>
    <?php

  }
  
  ?>
  
  <?php
}
else

{
	header("location:category.php");
}
?>

    

