<?php
    require_once "connectDB.php";

    if(isset($_GET['id'])){
        $id = htmlentities($_GET['id']);

        $query ="DELETE FROM reviews WHERE id = '$id'";
        $result = mysqli_query($conn, $query) or die("Помилка " . mysqli_error($conn)); 

        mysqli_close($conn);
    }
    header("Location: ../admin.php");
 
?>