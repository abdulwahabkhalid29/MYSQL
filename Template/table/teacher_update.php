<?php
    include ("connection.php");
    $id = $_POST['id'];
    $firstname  = $_POST['firstname'];
    $email  = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $sql = "UPDATE teacher_table SET firstname='$firstname', email='$email', phoneNumber='$phoneNumber' WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: teacher.php");
    }
?>