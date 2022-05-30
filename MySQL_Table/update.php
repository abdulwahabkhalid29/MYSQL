<?php
    include ("connection.php");
    $firstname  = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $email  = $_POST['email'];
    $id = $_POST['id'];
    $sql = "UPDATE myGuests SET firstname='$firstname', lastname='$lastname', email='$email' WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: index.php");
    }
?>