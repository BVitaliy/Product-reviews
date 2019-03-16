<?php 
    include "connectDB.php";

    $email = strip_tags(trim($_POST['email']));
    $name = strip_tags(trim($_POST['name']));
    $message = strip_tags(trim($_POST['message']));
    $date = $_POST['date'];
    $time = $_POST['time'];   

    $sql = "INSERT INTO `reviews` (`name`, `email`, `date`, `time`, `message`) VALUES ('$name', '$email', '$date', '$time', '$message')";

    if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>