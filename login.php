<?php 
// session_start();
require_once "include/db.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Login page </title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/new.css" rel="stylesheet">
</head>
<body>
<?php include_once "include/nav.php" ?>

<?php 
        // if(isset($_POST['login'])){
        //     $email = $_POST['email'];
        //     $password= $_POST['password'];

        //     $sql="SELECT * FROM user_reg WHERE email = '{$email}' AND password = '{$password}'";
        //     $result = mysqli_query($connect,$sql);
        //     while($row=mysqli_fetch_assoc($result)){
        //         $name = $row ['name'];
        //         $email = $row ['email'];
        //         $account_type = $row ['account_type'];
        //         $img = $row ['image'];

        //         $_SESSION['name']=$name;
        //         $_SESSION['email']=$email;
        //         $_SESSION['account_type']=$account_type;
        //         $_SESSION['image']=$img;

        //         header("location:user.php");
        //     } 
        //     echo "wrong email or password";
        //     exit();
        // }
        
        ?>


    
    <div class="container mt-5"> 
        <h1> LOGIN PAGE</h1>
        <p> Fill in your details below to login </p>
        <form action="" method="post"> 
        <div class="row mt-5">
            <label class="col-sm-2"> Email Address:</label>
                <div class="col-md-8">
                <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
        </div>
        <div class="row mt-3">
            <label class="col-sm-2"> Your Password:</label>
                <div class="col-md-8">
                <input type="password" class="form-control" name="password" placeholder="Password">
               </div>
        </div>
        <div class="row">
            <div class="col-md-2"> </div>
            <div class="col-md-3"> 
                <input type="submit" name="login" class="btn btn-secondary mt-3" value="Login">
            </div>
        </div>
        <p> if you have not registered with us, click <a href="register.php"> here to sign up</a> </p>
        
        </form>


    </div>

    <?php include_once "include/footer.php" ?>
    </body>
</html>