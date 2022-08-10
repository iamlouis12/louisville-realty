<?php include_once "../include/db.php"; ?>
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
    <!-- nav begins -->

      <nav class="navbar navbar-expand-lg navbar-light bg-secondary" aria-label="Main navigation">

<div class="container-fluid ">
  <a class="navbar-brand" href="index.php"><img src="../image/clogo2.jpg" height="100px" width="100px" class="rounded-circle"> </a>
  <li class="nav-item">
    <a class="nav-link active text-light" aria-current="page" href="index.php" style="font-family:times new roman; font-size:35px;">LOUISVILLE</a>
  </li>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <!-- <li class="nav-item">
        <a class="nav-link text-light" href="about.php">ABOUT</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link text-light" href="services.php">SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="contact.php">CONTACT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="blog.php">BLOG</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link text-light" href="superadmin.php">Properties posted</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="readblog.php">Blog posts</a>
      </li>

    </ul>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light" type="submit">Search</button>
    </form>
  </div>
  </div>
  <a href="" class="btn btn-danger me-5">Logout</a>
</div>
</div>
</nav>
<!-- end of the copied nav -->
    <!-- nav end -->

       
    <div class="container mt-5">
        <!-- <div class="row"> -->
            <!-- <div class="col-md-2 bg-secondary mt-5"> 
                <div class="row mt-2"><a href="" class="btn btn-info btn-lg"> Post a property</a></div>
                <div class="row mt-2"><a href="" class="btn btn-info btn-lg"> Post on our blog</a></div>
                <div class="row mt-2"><a href="" class="btn btn-info btn-lg"> Logout</a></div>
            </div> -->
            

                <table class="table-hover table table-bordered">
                    <tr>
                        <th> ID </th>
                        <th> AUTHOR </th>
                        <th> TITLE </th>
                        <th> DESCRIPTION </th>
                        <th> IMAGE </th>
                        <th> DATE </th>
                        <th> UPDATE </th>
                        <th> DELETE </th>
                    </tr>

                    <?php 
                    $sn=0;
                    $sql = "SELECT * FROM p_blog";
                    $result = mysqli_query($connect,$sql);
                    while($row=mysqli_fetch_assoc($result)){
                        $id = $row ['id'];
                        $author = $row ['author'];
                        $title = $row ['title'];
                        $description = $row ['description'];
                        $img = $row ['img'];
                        $date = $row ['date']; 
                        $sn++;             
                    ?>

                    <tr>
                        <td><?= $sn?> </td>
                        <td><?= $author?> </td>
                        <td><?=$title ?> </td>
                        <td><?=$description=substr($description,0,50); ?> </td>
                        <td><img src="../include/images/<?=$img ?>" height="100px" width="100px"> </td>
                        <td><?=$date ?> </td>
                        <td><a href="" class="btn btn-success btn-sm">Update</a></td>
                        <td><a href="deleteb.php?delete=<?=$id;?>" class="btn btn-danger btn-sm">Delete</a></td>
                        
                    </tr>
                       <?php } ?>
                </table>
            <!-- </div> -->
        </div>
        <?php include_once "../include/footer.php" ?>
</body>
</html>