<?php
    include ("../connection.php");
    $firstname  = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $classid = $_POST['classid'];
    $sql = "INSERT into teacher (firstname,lastname,phonenumber,classid) VALUE ('$firstname','$lastname','$phonenumber','$classid')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: teacher.php");
    }
?>