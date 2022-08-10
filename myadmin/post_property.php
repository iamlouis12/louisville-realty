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

    <!-- menu -->
        <div class="col-md-2 bg-secondary mt-5"> 
            <div class="row mt-2"><a href="post_property.php" class="btn btn-primary btn-lg"> Post a property</a></div>
            <div class="row mt-2"><a href="post_blog.php" class="btn btn-primary btn-lg"> Post on our blog</a></div>
            <div class="row mt-2"><a href="logout.php" class="btn btn-primary btn-lg"> Logout</a></div>
        </div>

        <?php 
        // if(!isset($_SESSION['name'])){
        //     header("location:../login.php");
        // }else{  
        // ?>

        <div class="col-md-3 mt-5"> 
            <div class="card" style="width: 300px; height: 400px;"> 
                <img src="../include/images/<?php echo $_SESSION['image'];?>" height="250" class="card-img-top" alt="..." >
                <div class="card-body"> 
                    <h3 class="card-title"> Welcome <?php echo $_SESSION['name'];?>  </h3>
                    <h4 class="card-text">Acount type: <?php echo $_SESSION['account_type'];?> </h4>
                    <h5 class="card-text">Email: <?php echo $_SESSION['email'];?> </h5>
                </div>
            </div>
            </div>
        


        <div class="col-md-5 mt-5">
            <form action="../include/propertyprocess.php" method="post" enctype="multipart/form-data">
            <h4> POST A PROPERTY </h4>
            Price:<br><input type="text" name="price" class="form-control mb-2" placeholder="Price">
            Title:<br><input type="text" name="title" class="form-control mb-2" placeholder="Title e.g C of O or R of O">
            Locality:<br><input type="text" name="locality" class="form-control mb-2" placeholder="Enter a locality or area">
            Street/Estate:<br><input type="text" name="street" class="form-control mb-2" placeholder="Street/Estate">
            Total Area (sqm):<br><input type="text" name="total_area" class="form-control mb-2" placeholder="Total Area (sqm)">
            Total Bedroom:<br><input type="text" name="bedroom" class="form-control mb-2" placeholder="Bedrooms"> 
            Total Bathroom :<br><input type="text" name="bathroom" class="form-control mb-2" placeholder="Bathrooms">
            More Description:<br><textarea name="description" cols="90" rows="5"> </textarea>
            <input type="file" name="img" class="form-control mt-2">
            <input type="file" name="img1" class="form-control mt-2">
             <input type="file" name="img2" class="form-control mt-2">
            Company Name:<br><input type="text" name="company" class="form-control mb-2" placeholder="Company Name">
            Phone No:<br><input type="text" name="phone" class="form-control mb-2" placeholder="Phone No">
            <input type="submit" name="post" value="Post" class="btn btn-info mt-2">

            </form>


              
        </div>
    </div>

    <?php include_once "../include/footermyadmin.php" ?>

    
</body>
</html>