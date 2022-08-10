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
        <a class="nav-link text-light" href="superadmin.php">PROPERTIES POSTED</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="readblog.php">BLOG POST</a>
      </li>


    </ul>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light me-3" type="submit">Search</button>
    </form>

  </div>
  <a href="" class="btn btn-danger me-5">Logout</a>
</div>

</nav>
<!-- end of the copied nav -->

    <!-- nav end -->

       
    <div class="container-fluid mt-5"> 
      <div class="row">

                <table class="table-hover table table-bordered">
                    <tr>
                        <th> ID </th>
                        <th> PRICE </th>
                        <th> TITLE </th>
                        <th> LOCALITY </th>
                        <th> STREET</th>
                        <th> TOTAL AREA </th>
                        <th> TOTAL BEDROOM </th>
                        <th> TOTAL BATHROOM </th>
                        <th> DESCRIPTION </th>
                        <th> IMAGE </th>
                        <th> IMAGE 1</th>
                        <th> IMAGE 2 </th>
                        <th> COMPANY </th>
                        <th> PHONE NO. </th>
                        <th> DATE </th>
                        <th> UPDATE </th>
                        <th> DELETE </th>
                    </tr>

                    <?php
                    $sn=0; 
                    $sql = "SELECT * FROM p_property";
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
                        $img1 = $row ['img1'];
                        $img2 = $row ['img2'];
                        $company = $row ['company'];
                        $phonenumber = $row ['phonenumber'];
                        $date = $row ['date'];
                        $sn++;
                        

                    
                    ?>

                    <tr>
                        <td><?= $sn?> </td>
                        <td><?= $price?> </td>
                        <td><?=$title ?> </td>
                        <td><?=$locality ?> </td>
                        <td><?=$street ?> </td>
                        <td><?= $total_area ?> </td>
                        <td><?= $total_bedroom?> </td>
                        <td><?=$total_bathroom ?> </td>
                        <td><?=$description=substr($description,0,50); ?> </td>
                        <td><img src="../include/images/<?=$img ?>" height="100px" width="100px"> </td>
                        <td><img src="../include/images/<?=$img1 ?>" height="100px" width="100px"> </td>
                        <td><img src="../include/images/<?=$img2 ?>" height="100px" width="100px"> </td>
                        <td><?=$company ?> </td>
                        <td><?=$phonenumber ?> </td>
                        <td><?=$date ?> </td>
                        <td><a href="" class="btn btn-success btn-sm">Update</a></td>
                        <td><a href="deletep.php?delete=<?=$id;?>" class="btn btn-danger btn-sm">Delete</a></td>
                        
                    </tr>
                       <?php } ?>
                </table>
            </div>
        </div>
        <?php include_once "../include/footer.php" ?>
</body>
</html>