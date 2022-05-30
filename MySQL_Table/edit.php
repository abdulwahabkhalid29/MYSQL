<?php
    include ("connection.php");
<<<<<<< HEAD
    $sql = "SELECT FROM myguests WHERE id =$row[id]";
    $result = $conn->query($sql);
=======
    $sql = "SELECT * FROM myGuests WHERE id = $_GET[id]";
    $result = $conn->query($sql);


>>>>>>> 5f481ba1c33fe4ee69d7e74f17866ac10fdc0dfc
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body style="background: linear-gradient(to right, blue, lightblue);">
=======
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>table</title>
    
</head>
<body style="background: linear-gradient(to right, orangered, orange);">
>>>>>>> 5f481ba1c33fe4ee69d7e74f17866ac10fdc0dfc
<div class="container bg-light p-5 mt-5 shadow-lg">
            <div class="mt-5">
                <a href="index.php"><button class="btn btn-outline-primary float-right pl-5 pr-5 mb-3">Back to Table</button></a>
            </div>
            <h1 class="text-danger p-4 mt-5">MYSQL FORM :-</h1>
<<<<<<< HEAD
            <form action="">
                <div style="font-family: initial;" class="text-dark row">
                    <div class="col-md-6 mt-5">
                        <label for="FirstName">First Name</label>
                        <input type="text" class="w-100 form-control" value="<?php echo $row['firstname'] ?>">
                    </div>
                    <div class="col-md-6 mt-5">
                        <label for="LastName">Last Name</label>
                        <input type="text" class="w-100 form-control" value="<?php echo $row['lastname'] ?>">
                    </div>
                    <div class="col-md-12 mt-5">
                        <label for="email">E-mail</label>
                        <input type="text" class="w-100 form-control" value="<?php echo $row['email'] ?>">
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="mt-4 col-md-12">
                        <a href="index.php"><button class="btn btn-outline-dark form-control mt-4">Save  Data</button></a>
                </div>    
                </div>
            </div>
=======


          <?php
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {  
      ?>

<form action="update.php" method="POST">
    <div style="font-family: initial;" class="text-dark row">
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        <div class="col-md-6 mt-5">
            <label for="FirstName">First Name</label>
            <input type="text" name="firstname" class="w-100 form-control" value="<?php echo $row['firstname'] ?>">
        </div>
        <div class="col-md-6 mt-5">
            <label for="LastName">Last Name</label>
            <input type="text" name="lastname" class="w-100 form-control" value="<?php echo $row['lastname'] ?>">
        </div>
        <div class="col-md-12 mt-5">
            <label for="email">E-mail</label>
            <input type="text" name="email"     class="w-100 form-control" value="<?php echo $row['email'] ?>">
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
>>>>>>> 5f481ba1c33fe4ee69d7e74f17866ac10fdc0dfc
</body>
</html>