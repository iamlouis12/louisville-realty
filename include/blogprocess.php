
<?php require_once "db.php"; ?>

<?php 
          if (isset($_POST['submit'])){
            $title = $_POST['title'];
            $author = $_POST['author'];
            $description = $_POST['description'];


            $img=$_FILES['img']['name'];
            $img_tmp=$_FILES['img']['tmp_name'];
            move_uploaded_file($img_tmp,"images/$img");

           // echo $title,$author,$description;

            $sql = "INSERT INTO p_blog (author,title,description,img) VALUES ('$author','$title','$description','$img')";
            mysqli_query($connect,$sql);

            header("location:../myadmin/post_blog.php");
          }
          ?>
