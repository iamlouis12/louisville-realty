<?php include_once "../include/db.php"; ?>
<?php 
if(isset($_GET['delete'])){
    $delete_id = $_GET ['delete'];

    $delete = "DELETE FROM p_property WHERE id = $delete_id";
    mysqli_query($connect,$delete);
    header("location:superadmin.php");

}


?>