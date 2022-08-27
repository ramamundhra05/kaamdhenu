
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
    <form action="change2.php" method="POST" class="form-fullwidth" >
        <div class="form-group"> 
        <?php
        
        session_start();
    $msg="";
    if(!empty($_SESSION["msg"]))
    {
        $msg=$_SESSION["msg"];

    }
    session_destroy();
    ?>
        <h3 class="display-4 text-text-muted "><mark><?php print_r($msg)?></mark></h3>
        <h2><bold> CHANGE CREDENTIAL</bold></h2>
        <label>
            <input type="text" name="sn" placeholder="sn" title="Mention sn to CHANGE CREDENTIAL" class="form-control"/>
        </label><br>

        <label>
            <input type="text" name="newun" placeholder="NEW USERNAME" title="Mention NEW USERNAME to CHANGE CREDENTIAL" class="form-control"/>
        </label><br>

        <label>
            <input type="text" name="newpass" placeholder="NEW PASSWORD" title="Mention NEW PASSWORD to CHANGE CREDENTIAL faculty" class="form-control"/>
        </label><br>

        <button class="btn btn-dark btn-outline-info button">CHANGE</button>
        
        

       </div> 
    </form>

    
</body>
</html>