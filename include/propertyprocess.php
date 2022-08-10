
<?php require_once "db.php"; ?>


<?php
            if(isset($_POST['post'])){
                $price = $_POST['price'];
                $title = $_POST['title'];
                $locality = $_POST['locality'];
                $street = $_POST['street'];
                $total_area = $_POST['total_area'];
                $bedroom = $_POST['bedroom'];
                $bathroom = $_POST['bathroom'];
                $description = $_POST['description'];

                $img = $_FILES['img']['name'];
                $img_tmp = $_FILES['img']['tmp_name'];
                move_uploaded_file($img_tmp,"images/$img");

                $img1 = $_FILES['img1']['name'];
                $img_tmp = $_FILES['img1']['tmp_name'];
                move_uploaded_file($img_tmp,"images/$img1");

                $img2 = $_FILES['img2']['name'];
                $img_tmp = $_FILES['img2']['tmp_name'];
                move_uploaded_file($img_tmp,"images/$img2");

                $company = $_POST['company'];
                $phone = $_POST['phone'];

                //echo $price, $title, $locality, $street, $total_area, $bedroom, $bathroom, $description;

                $sql = "INSERT INTO p_property (price,title,locality,street,total_area,total_bedroom,total_bathroom,description,img,img1,img2,company,phonenumber)
                VALUES ('$price','$title','$locality','$street','$total_area','$bedroom','$bathroom','$description','$img','$img1','$img2','$company','$phone')";
                mysqli_query($connect,$sql);
                header("location:../myadmin/post_property.php");    
            }


        
?>