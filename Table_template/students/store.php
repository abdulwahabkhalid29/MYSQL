<?php
    include ("../connection.php");
    $firstname  = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $email  = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $classid = $_POST['classid'];
    $sql = "INSERT into student_table (firstname,lastname,email,phonenumber,classid) VALUE ('$firstname','$lastname','$email','$phonenumber','$classid')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: student.php");
    }
?>