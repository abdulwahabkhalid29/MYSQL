<?php
    include ("../connection.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM table_class WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: class.php");
    }
?>