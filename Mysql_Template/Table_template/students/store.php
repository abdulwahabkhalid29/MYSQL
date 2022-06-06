<?php
    include ("../connection.php");
    $firstname  = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $email  = $_POST['email'];
    $classid = $_POST['classid'];
    $sql = "INSERT into student (firstname,lastname,phonenumber,email,classid) VALUE ('$firstname','$lastname','$phonenumber','$email','$classid')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: student.php");
    }
?>