<?php
    include ("connection.php");
    $firstname  = $_POST['firstname'];
    $email  = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $sql = "INSERT into teacher_table (firstname,email,phoneNumber) VALUE ('$firstname','$email','$phoneNumber')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: teacher.php");
    }
?>