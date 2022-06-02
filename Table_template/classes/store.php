<?php
    include ("connection.php");
    $classname  = $_POST['classname'];
    $roomnumber  = $_POST['roomnumber'];
    $email  = $_POST['email'];
    $buildingnumber = $_POST['buildingnumber'];
    $sql = "INSERT into table_class (classname,roomnumber,email,buildingnumber) VALUE ('$classname','$roomnumber','$email','$buildingnumber')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: classes/class.php");
    }
?>