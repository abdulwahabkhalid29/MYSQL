<?php
    include ("../connection.php");
    $classname  = $_POST['classname'];
    $florenumber  = $_POST['florenumber'];
    $buildingnumber = $_POST['buildingnumber'];
    $sql = "INSERT into class (classname,florenumber,buildingnumber) VALUE ('$classname','$florenumber','$buildingnumber')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: class.php");
    }
?>