<?php require "include/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
        <meta name="description" content="" >
        <meta name="author" content="" >
        <title>View More</title>
        <link href="css/bootstrap.css" rel="stylesheet" >
        <link href="css/new.css" rel="stylesheet" >
        <!-- font start -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&display=swap" rel="stylesheet">
        <!-- font end -->
    </head>
    <body>
        <?php include_once "include/nav.php" ?>

        <?php 
        if(isset($_GET['view'])){
            $view = $_GET ['view'];
        }

        $sql= "SELECT * FROM p_property WHERE id = '{$view}'";
        $result = mysqli_query($connect,$sql);
        while($row=mysqli_fetch_assoc($result)){
            $id = $row ['id'];
            $price = $row ['price'];
            $title = $row ['title'];
            $locality = $row ['locality'];
            $street = $row ['street'];
            $total_area = $row ['total_area'];
            $total_bedroom = $row ['total_bedroom'];
            $total_bathroom = $row ['total_bathroom'];
            $description = $row ['description'];
            $img = $row ['img'];
            $company = $row ['company'];
            $phonenumber = $row ['phonenumber'];
            $date = $row ['date'];
            
    

        ?>

        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-2"> 
                    <!-- empty div space  -->
                </div>
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1"><?=$locality?> <?$street?> <?=$title?></h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">Posted on <?=$date?></div>    
                        </header>

                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="include/images/<?=$img?>" width="700" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <div class="row">
                            <h2>Price:<?=$price?>       Total area: <?=$total_area?></h2> 
                            </div>
                            <div class="row">
                            <h5>Total Bedroom: <?=$total_bedroom?>     Total Bathroom: <?=$total_bathroom?> </h5>
                            </div>
                            <p class="fs-5 mb-4">Brief Description: <?=$description?> </p>
                            <h4 style="font-family: 'Lato', sans-serif; font-size: 17px;">Company: <?=$company?></h4>
                            <h4 style="font-family: 'Lato', sans-serif; font-size: 17px;">Phone number: <?=$phonenumber?></h4> 
                        </section>
                    </article>

                    <?php } ?>
                    <!-- Comments section-->
                    <section class="mb-5">
                        <div class="card bg-light">
                            <div class="card-body">
                                <!-- Comment form-->
                                <form class="mb-4"><textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea></form>
                                <!-- Comment with nested comments-->
                                <div class="d-flex mb-4">
                                    <!-- Parent comment-->
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Commenter Name</div>
                                        If you're going to lead a space frontier, it has to be government; it'll never be private enterprise. Because the space frontier is dangerous, and it's expensive, and it has unquantified risks.
                                        <!-- Child comment 1-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Commenter Name</div>
                                                And under those conditions, you cannot establish a capital-market evaluation of that enterprise. You can't get investors.
                                            </div>
                                        </div>
                                        <!-- Child comment 2-->
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">Commenter Name</div>
                                                When you put money directly to a problem, it makes a good headline.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single comment-->
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Commenter Name</div>
                                        When I look at the universe and all the ways the universe wants to kill us, I find it hard to reconcile that with statements of beneficence.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                
                
            </div>
        </div>

        <?php include_once "include/footer.php" ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
