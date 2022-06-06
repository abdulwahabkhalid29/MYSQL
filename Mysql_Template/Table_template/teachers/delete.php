<?php
    include ("../connection.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM teacher WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: teacher.php");
    }
?>