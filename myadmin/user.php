<?php 
// session_start();
require_once "../include/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/new.css" rel="stylesheet">
</head>
<body>
    <?php include_once "../include/navmyadmin.php" ?>
       
    

        <div class="row ">

        <?php 
        // if(!isset($_SESSION['name'])){
        //     header("location:login.php");
        // }else{ 
        ?>
            <div class="col-md-2 bg-secondary mt-5"> 
                <div class="row mt-2"><a href="post_property.php" class="btn btn-info btn-lg"> Post a property</a></div>
                <div class="row mt-2"><a href="post_blog.php" class="btn btn-info btn-lg"> Post on our blog</a></div>
                <div class="row mt-2"><a href="logout.php" class="btn btn-info btn-lg"> Logout</a></div>
            </div>
            
            <div class="col-md-4 mt-5"> 
            <div class="card" style="width: 300px; height: 400px;"> 
                <img src="image/img15.jpg" height="250" class="card-img-top" alt="..." >
                <div class="card-body"> 
                    <h3 class="card-title"> Welcome Mr Louis</h3>
                    <h4 class="card-text">Acount type: individual account </h4>
                    <h5 class="card-text">Email: xyz@yahoo.com </h5>
                </div>
            </div>
            </div>

        </div>

        <?php include_once "../include/footer.php" ?>
        <?php echo $_SESSION['email'];?> 
        <?php echo $_SESSION['account_type'];?>
        <?php echo $_SESSION['name'];?> 
        <?php echo $_SESSION['image'];?>
    
</body>
</html>