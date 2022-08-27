<?php
session_start();
if($_SESSION["user"])
{
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
        <form action="add-product1.php" method="POST" class="form-fullwidth"  enctype="multipart/form-data">
            <div class="form-group"> 
            <h2><bold> ADD PRODUCT</bold></h2>
            <label>
                <input type="text" name="name" placeholder="PRODUCT NAME" title="Mention PRODUCT NAME" class="form-control"/>
            </label><br>

            <label>
                <input type="number" name="op" placeholder="PRODUCT ORIGINAL PRICE" title="Mention PRODUCT ORIGINAL PRICE" class="form-control"/>
            </label><br>

            <label>
                <input type="number" name="sp" placeholder="PRODUCT SELLING PRICE" title="Mention PRODUCT SELLING PRICE" class="form-control"/>
            </label><br>

            <textarea type="text" name="des" rows="10" cols="50" placeholder="DESCRIPTION"  class="form-control"></textarea>
            <br>

            <label>
                <input type="text" name="fragrance"  title="FRAGRANCE" placeholder="FRAGRANCE" class="form-control"/>
            </label><br>


            <p> select Category :
                <select name="category"  size="1">


                <?php
                        $server="localhost";
                        $username="root";
                        $password="";
                        
                        $conn=new mysqli($server,$username,$password);
                        $result=$conn->query("SELECT * FROM kamdhenu.category");
                        
    
                    while($row=$result->fetch_assoc())
                    {
                        $category=$row["category_name"];
                
                ?>
                    <option value=<?php echo"$category"?>  > <?php print_r($category) ?>  </option>

                <?php
                    }
                ?>

                    
                </select><br><br>
               
                
    
            <label>
                <input type="text" name="material" placeholder="MATERIAL"  class="form-control"/>
            </label><br>

            <label>
                <input type="text" name="weight" placeholder="WEIGHT"  class="form-control"/>
            </label><br>

            <label>
                <input type="text" name="colour" placeholder="COLOUR"  class="form-control"/>
            </label><br>


            <label>
                <input type="text" name="size" placeholder="SIZE"  class="form-control"/>
            </label><br>

            <p>
            <input type="file" name="img"  title="uploadfile"/>   
            </p>

    
            <button class="btn btn-dark btn-outline-info button">ADD PRODUCT</button>
    
           </div> 
        </form>
    
        
    </body>
    </html>

    <?php
}
else

{
	header("location:adminlogin.php");
}
?>
