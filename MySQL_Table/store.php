<?php
    include ("connection.php");
    $firstname  = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $email  = $_POST['email'];
    $sql = "INSERT into myGuests (firstname,lastname,email) VALUE ('$firstname','$lastname','$email')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: index.php");
    }
?>