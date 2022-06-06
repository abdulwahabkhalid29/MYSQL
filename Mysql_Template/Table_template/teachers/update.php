<?php
    include ("../connection.php");
    $id = $_POST['id'];
    $firstname  = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $classid = $_POST['classid'];
    $sql = "UPDATE teacher SET firstname='$firstname', lastname='$lastname', phonenumber='$phonenumber', classid='$classid' WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: teacher.php");
    }
?>