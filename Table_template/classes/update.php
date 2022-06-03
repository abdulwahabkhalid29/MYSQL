<?php
    include ("../connection.php");
    $id = $_POST['id'];
    $classname  = $_POST['classname'];
    $roomnumber  = $_POST['roomnumber'];
    $email  = $_POST['email'];
    $buildingnumber = $_POST['buildingnumber'];
    $sql = "UPDATE table_class SET classname='$classname', roomnumber='$roomnumber', email='$email', buildingnumber='$buildingnumber' WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: class.php");
    }
?>