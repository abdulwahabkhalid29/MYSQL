<?php
    include ("connection.php");
    $sql = "SELECT * FROM myGuests";
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
    <style>
        table,td,th{
            border-collapse: collapse;
            border: 1px solid lightgray;
            vertical-align: bottom;
            padding: 10px;
            
        }
        
        td{
            text-align: left;
            padding: 20px;
        }
        tr:nth-child(even){
        background-color: lightgray;
    }
    tr:nth-child(odd){
        background-color: white;
    }
    tr:hover{
        background-color: gray;
    }
    th{
        font-size: 25px;
    }
    </style>
    <title>table</title>
    
</head>
<body style="background: linear-gradient(to right, orangered, orange);">
        <div class="container pt-5">
            <h1 class="text-light text-center pb-5">MYSQL Table With PHP Code :-</h1>
            
    <div class="mt-5">
            <a href="create.php"><button class="btn btn-success float-right pl-5 pr-5 mb-3">MYSQL Form Data</button></a>
    </div>
      <table class=" table table-hover mt-5">
          <tr>
              <th>Id</th>
              <th>FirstName</th>
              <th>LastName</th>
              <th>Email</th>
              <th>reg_date</th>
              <th>Change</th>
              <th>Delete</th>
          </tr>
          <?php
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
      ?>
          <tr>
              <td class="text-danger"><?php echo $row['id']?></td>
              <td class="text-primary"><?php echo $row['firstname']?></td>
              <td class="text-danger"><?php echo $row['lastname']?></td>
              <td class="text-primary"><?php echo $row['email']?></td>
              <td class="text-danger"><?php echo $row['reg_date']?></td>
              <td class="text-primary"><a href="edit.php?id=<?php echo $row['id']?>" class="text-primary">Edit</a>&nbsp;</td>
              <td class="c7"><a href="delete.php?id=<?php echo $row['id']?>" class="text-danger">Delete</a>&nbsp;</td>
          </tr>
      
    <?php  
    }
    }
    ?>
    </table>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>