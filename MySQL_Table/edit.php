<?php
    include ("connection.php");
    $sql = "SELECT FROM myguests WHERE id =$row[id]";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body style="background: linear-gradient(to right, blue, lightblue);">
<div class="container bg-light p-5 mt-5 shadow-lg">
            <div class="mt-5">
                <a href="index.php"><button class="btn btn-outline-primary float-right pl-5 pr-5 mb-3">Back to Table</button></a>
            </div>
            <h1 class="text-danger p-4 mt-5">MYSQL FORM :-</h1>
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
</body>
</html>