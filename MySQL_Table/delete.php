<?php
    include ("connection.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM myGuests WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: index.php");
    }
?>