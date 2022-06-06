<?php
    include ("../connection.php");
    $id = $_POST['id'];
    $classname  = $_POST['classname'];
    $florenumber  = $_POST['florenumber'];
    $buildingnumber = $_POST['buildingnumber'];
    $sql = "UPDATE class SET classname='$classname', florenumber='$florenumber', buildingnumber='$buildingnumber' WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: class.php");
    }
?>