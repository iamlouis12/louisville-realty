<?php include_once "include/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
            <!-- Favicon-->
            <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
            <link href="css/bootstrap.css" rel="stylesheet">
            <link href="css/new.css" rel="stylesheet">
            <link href="css/footerr.css" rel="stylesheet">
            <!-- font start -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&display=swap" rel="stylesheet">
            <!-- font end -->
</head>
<body>
    <style>
        .imgb{
            height: 100px;
            width: 70px;
        }
    
    </style>
<?php include_once "include/nav.php" ?>


    
    <div class="container-fluid"> 

            <!-- Page header with logo and tagline-->
            <header class="py-3 bg-light border-bottom mb-4">
            <div class="container mt-5">
            <h1 class="fw-bolder text-center" style="font-family:Times New Roman">Welcome to Louisville Blog Page!</h1>
                <div class="row mb-3"> 
                <div class="col-lg-6 mt-3 my-5">
                    <p class="lead mb-0">In this blog page you will read contents related to general real estate trends,
                        ranging from property sales, management, valuation and apprasial of landed Properties.
                    </p>
                </div>
                <div class="col-lg-6"> 
                    <!-- Categories widget-->
                    <div class="card mt-3 mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                
                                
                                <select class="form-control form-select">
                                    
                                <option class="text-center"> Click here to view Categories...</option>
                                    <option class="text-center"> Real Estate</option>
                                    <option class="text-center"> Property Sales</option>
                                    <option class="text-center"> Mortgage</option>
                                    <option class="text-center"> Property Valuation</option>
                                    <option class="text-center"> Property Management</option>
                                    <option class="text-center"> Feasiblilty and Viabilty</option>

                                </select>
                                
                            </div>
                        </div>
                    </div>

                </div>
                </div>
            </div>
        </header>


        <div class="row">
            <?php 
            $sql = "SELECT * FROM p_blog";
            $result= mysqli_query($connect,$sql);
            while($row=mysqli_fetch_assoc($result)){
                $id = $row ['id'];
                $author=$row ['author'];
                $title=$row ['title'];
                $description=$row ['description'];
                $img= $row ['img'];
                $date = $row ['date'];
            
            ?>

            <div class="col-md-3 mt-3"> 
                <div class="card bg-light">
                    <img src="include/images/<?=$img?>" class="imgb" >
                    <div class="card-body">
                        <h4 class="card-title"> Title: <?=$title?> </h4>
                        <p class="card-text"> <?=$description=substr($description,0,200)?> <?php echo "<a href='blogsingle_po.php?readmore=$id'> [...] read more </a>" ?></p>
                        <em><div class="card small-text-muted">Posted by: <?=$author?> on <?=$date?> </div></em>
                    </div>
                </div>
            </div>
            <?php } ?>
               

        </div>
    </div>

    <?php include_once "include/footerr.php" ?>
</body>
</html>