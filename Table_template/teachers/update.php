<?php
    include ("../connection.php");
    $id = $_POST['id'];
    $firstname  = $_POST['firstname'];
    $email  = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $classid = $_POST['classid'];
    $sql = "UPDATE teacher_table SET firstname='$firstname', email='$email', phoneNumber='$phoneNumber', classid='$classid' WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: teacher.php");
    }
?>