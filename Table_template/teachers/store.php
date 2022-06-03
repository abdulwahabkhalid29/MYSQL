<?php
    include ("../connection.php");
    $firstname  = $_POST['firstname'];
    $email  = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $classid = $_POST['classid'];
    $sql = "INSERT into teacher_table (firstname,email,phoneNumber,classid) VALUE ('$firstname','$email','$phoneNumber','$classid')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: teacher.php");
    }
?>