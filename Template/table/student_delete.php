<?php
    include ("connection.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM student_table WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: student.php");
    }
?>