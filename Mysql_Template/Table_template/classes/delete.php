<?php
    include ("../connection.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM class WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: class.php");
    }
?>