<?php
    require_once "connectDB.php";

    //Одобрити
    $status = 2;

    if(isset($_GET['id'])){
        $id = htmlentities($_GET['id']);

        $query ="UPDATE reviews SET status='$status' WHERE id = '$id'";
        $result = mysqli_query($conn, $query) or die("Помилка " . mysqli_error($conn)); 

        mysqli_close($conn);
    }
    header("Location: ../admin.php");
 
?>