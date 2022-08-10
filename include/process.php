
<?php require_once "db.php"; ?>


        <?php
        if(isset($_POST['submit'])){
            $name = $_POST ['name'];
            $username = $_POST ['username'];
            $email = $_POST ['email'];

            //$chk = "SELECT * FROM louisville WHERE email = '{$email}'";
            //$con = mysqli_query($connect,$chk);
           // if(!$con){

                $password = $_POST ['password'];
                $confirmpassword= $_POST ['confirmpassword'];
                $gen = $_POST ['gen'];
    
                $img = $_FILES ['img']['name'];
                $img_tmp = $_FILES ['img']['tmp_name'];
                move_uploaded_file($img_tmp, "images/$img");
                
               // echo $name, $username, $email, $password, $confirmpassword, $gen;
    
               $sql = "INSERT INTO user_reg (name,username,email,password,confirmpassword,account_type,image)
                VALUES ('$name','$username','$email','$password','$confirmpassword','$gen','$img')";
                mysqli_query($connect,$sql);
                header("location:../register.php");
                
                //exit();
           // }else{
              //  echo " email already exist";
        //}

    }
        ?>