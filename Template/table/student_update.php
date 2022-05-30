<?php
    include ("connection.php");
    $id = $_POST['id'];
    $firstname  = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $email  = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $sql = "UPDATE student_table SET firstname='$firstname', lastname='$lastname', email='$email', phonenumber='$phonenumber' WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: student.php");
    }
?>