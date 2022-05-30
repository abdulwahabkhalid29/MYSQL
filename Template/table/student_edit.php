<?php
    include ("connection.php");
    $sql = "SELECT * FROM student_table WHERE id = $_GET[id]";
    $result = $conn->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Student Table</title>
    
</head>
<body style="background: linear-gradient(to right, orangered, orange);">
<div class="container bg-light p-5 mt-5 shadow-lg">
            <div class="mt-5">
                <a href="student.php"><button class="btn btn-outline-primary float-right pl-5 pr-5 mb-3">Back to Table</button></a>
            </div>
            <h1 class="text-danger p-4 mt-5">MYSQL FORM :-</h1>


          <?php
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {  
      ?>

<form action="student_update.php" method="POST">
    <div style="font-family: initial;" class="text-dark row">
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        <div class="col-md-6 mt-5">
            <label for="firstname">First Name</label>
            <input type="text" class="w-100 form-control"  name="firstname" value="<?php echo $row['firstname']; ?>">
        </div>
        <div class="col-md-6 mt-5">
            <label for="lastname">Last Name</label>
            <input type="text" class="w-100 form-control" name="lastname" value="<?php echo $row['lastname']; ?>">
        </div>
        <div class="col-md-12 mt-5">
            <label for="email">Email</label>
            <input type="text"  class="w-100 form-control" name="email" value="<?php echo $row['email']; ?>">
        </div>
        <div class="col-md-6 mt-5">
            <label for="phonenumber">Phone Number</label>
            <input type="text" class="w-100 form-control" name="phonenumber" value="<?php echo $row['phonenumber']; ?>">
        </div>
        <div class="col-md-6 mt-5">
            <label for="classid">Class id</label>
            <input type="text" class="w-100 form-control" name="classid" value="<?php echo $row['classid']; ?>">
        </div>
    </div>
    <div class="row">
        <div class="mt-4 col-md-12">
                <button type="submit" class="btn btn-outline-dark form-control mt-4">Save  Data</button>
        </div>    
    </div>
</form>
           
    <?php  
    }
    }
    ?>
    </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>