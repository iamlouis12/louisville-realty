<?php 
// session_start();
//require_once "db.php";
?>

<div class="container-fluid mb-5">
    <div class="row"> 

      <!-- start of copied nav -->
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
<div class="container-fluid ">
  <a class="navbar-brand" href="../index.php"><img src="../image/clogo2.jpg" height="100px" width="100px" class="rounded-circle"> </a>
  <li class="nav-item">
    <a class="nav-link active text-light" aria-current="page" href="../index.php" style="font-family:times new roman; font-size:35px;">LOUISVILLE</a>
  </li>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link text-light" href="about.php">ABOUT</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link text-light" href="services.php">SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="contact.php">CONTACT</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="login.php">LOGIN</a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="register.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          DISCOVER!
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="sale_pro.php">PROPERTIES FOR SALE</a></li>
          <li><a class="dropdown-item" href="./sale_pro.php">PROPERTIES TO LET</a></li>
          <!-- <li><a class="dropdown-item" href="register.php">POST A PROPERTY FOR FREE</a></li> -->
          <li><a class="dropdown-item" href="login.php" data-bs-toggle="modal" data-bs-target="#exampleModal">LOGIN</a></li>
          <!-- <li><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Login </a></li> -->
          <li><a class="dropdown-item" href="register.php">REGISTER</a></li>
          <!-- <li><a class="dropdown-item" href="register.php">ARTISAN</a></li> -->
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="login.php">POST A PROPERTY FOR FREE!</a></li>
        </ul>
      </li>

    </ul>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light" type="submit">Search</button>
    </form>
  </div>
</div>
</nav>
<!-- end of the copied nav -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Please enter your details to login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <div class="form-control">
          <form  action="" method="post" >
            <label>Email:</label><br>
            <input type="text" class="form-control" name="email">
            <label> Password:</label><br>
            <input type="password" class="form-control"  name="password">
           
          
        </div>

      
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" name="login" class="btn btn-primary" value="Login">
        </form>
      </div>
    </div>
  </div>
</div>

<!-- modal end -->



    </div>
  </div>