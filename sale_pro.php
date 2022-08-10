<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> INDEX PAGE</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/new.css" rel="stylesheet">
    </head>
    <body>
        <style>
           img{
                border-radius: 10% 10% 10% 10%;
            }
        </style>

    
      <?php include_once "include/nav.php" ?>
      <div class="container">
        <div class="container-fluid "> 
          <div class="row"> 

            <?php 
            include_once "include/db.php";

            $sql="SELECT * FROM p_property";
            $result=mysqli_query($connect,$sql);
            while($row=mysqli_fetch_assoc($result)){
                $id = $row ['id'];
                $price = $row ['price'];
                $locality = $row ['locality'];
                $img = $row ['img'];
                $date= $row ['date'];
            

            
            ?>

              <div class="col-md-4 mt-3">
                  <div class="bg-light mb-4">
                      <a href="#!"><img class="card-img-top" src="include/images/<?=$img?>" height="300" alt="..." /></a>
                      <div class="card-body ">
                      
                          <h2 class="card-title">Price: <?=$price ?></h2>
                          <h4 class="card-text">Location: <?=$locality?></h3>
                          <div class="small text-muted">Date Posted: <?=$date?></div>
                         <?php echo "<a href='single_pro.php?view=$id' class='btn btn-primary' >View more details →</a> " ?>
                          <a class="btn btn-success " href="#!">Call the Agent →</a>
                      </div>
                  </div>
              </div>
              <?php } ?>
  
  <!-- <div class="col-lg-6">
      <div class="card mb-4">
          <a href="#!"><img class="card-img-top" src="image/img21.jpg" height="400" alt="..." /></a>
          <div class="card-body">
              <div class="small text-muted">January 1, 2022</div>
              <h2 class="card-title">Featured Post Title</h2>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
              <a class="btn btn-primary" href="#!">Read more →</a>
          </div>
      </div>
  </div> -->



  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Please Contact the Agent </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <div class="form-control">
            <h4>Company: Prince Chrono & associate </h4>
            <h5>Email: prince@yahoo.com </h5>
            <h5>Phone no: 09099999999 </h5>
        </div>

      
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- modal end -->

  </div>
  </div>
       
            
       </div>
         
      
      <?php include_once "include/footer.php" ?>
    </body>
</html>