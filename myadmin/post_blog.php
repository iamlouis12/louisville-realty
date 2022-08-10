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

    <style> 


     </style>
       
    <div class="row ">
        <!-- menu -->
        <div class="col-md-2 bg-secondary mt-5"> 
            <div class="row mt-2"><a href="post_property.php" class="btn btn-primary btn-lg bb"> Post a property</a></div>
            <div class="row mt-2"><a href="post_blog.php" class="btn btn-primary btn-lg bb"> Post on our blog</a></div>
            <div class="row mt-2"><a href="logout.php" class="btn btn-primary btn-lg bb"> Logout</a></div>
        </div>
        <div class="col-md-3 mt-5"> 
            <div class="card" style="width: 300px; height: 400px;"> 
                <img src="../image/img12.jpg" height="250" class="card-img-top" alt="..." >
                <div class="card-body"> 
                    <h3 class="card-title"> Welcome MR Louie</h3>
                    <h4 class="card-text">Acount type: Developer</h4>
                    <h5 class="card-text">Email: xyz@gmail.com </h5>
                </div>
            </div>
            </div>
        <div class="col-md-5 mt-5">
            <form action="../include/blogprocess.php" method="post" enctype="multipart/form-data">
                <h1> Registration / Posting</h1>
                <div class="row mt-2 mb-2"> 
                    <label class="col-md-2"> Author:</label>
                        <input type="text" name="author" class="form-control" placeholder="Author">
                    
                </div>
                <div class="row mt-2 mb-2"> 
                    <label class="col-md-2"> Title</label>
                    
                        <input type="text" name="title" class="form-control" placeholder="title">
                    
                </div>
                <div class="row mb-2"> 
                    <label class="col-md-2"> Article</label>
                        <textarea name="description" cols="70" rows="5"> </textarea>
                </div>
                <div class="row mb-2"> 
                    <label class="col-md-2"> Image</label>
                        <input type="file" name="img" class="form-control">
                     
                </div>
                <input type="submit" name="submit" class="btn btn-primary mt-3 mb-2">
            </form>

              
        </div>
    </div>

    <?php include_once "../include/footermyadmin.php" ?>

    
</body>
</html>