<?php
    include ("../connection.php");
    $id = $_POST['id'];
    $firstname  = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $email  = $_POST['email'];
    $classid = $_POST['classid'];
    $sql = "UPDATE student SET firstname='$firstname', lastname='$lastname', phonenumber='$phonenumber', email='$email', classid='$classid' WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: student.php");
    }
?>