<?php
    include ("../connection.php");
    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <style>
        table,td,th{
            border-collapse: collapse;
            border: 1px solid lightgray;
            vertical-align: bottom;
            padding: 10px;
            
        }
        .back{
        background-image: url(../assets/image/xbg_2.jpg.pagespeed.ic.UrtJzl_WMI.webp);
        background-size: 100%;
        background-position: 50% 50%;
        height: 550px;

        width: 100%;
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
<body style="">
<div class="container-fluid bg-light back">
    <div class="container">
    <?php include("../nav.php")?>
        <div class="mt-5 pt-5 ml-5 pb-5">
        <p class="text-secondary">We have 850,000 great job offers you deserve!</p>
            <h1 class="text-light"><b> Your Dream <br> <span style="font-family:cursive;"> Job is Waiting </span></b></h1><br><br>
            <ul class="nav nav-tabs " style="border: none;" role="tablist">
                <li class="nav-item">
                  <a class="bg-primary text-light nav-link active" data-toggle="tab" href="#Overview">Overview</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link bg-success text-light" data-toggle="tab" href="#Founder">Founder</a>
                </li>
              </ul>
              <div  class="pb-3 tab-content bg-light w-75">
                <div id="Overview" class="container tab-pane active"><br>
                    <div class="row">
                      <div class="col-md-3 mt-3">
                          <input type="text" class="form-control" placeholder="eg. Adam scott">
                      </div>
                      <div class="col-md-3 mt-3">   
                          <select class="form-control">
                            <option value="1">Category</option>  
                            <option value="1">Full Time</option>
                            <option value="1">Part Time</option>
                          </select>
                      </div>
                      <div class="col-md-3 mt-3">
                        <input type="text" class="form-control" placeholder="location">
                      </div>
                      <div class="col-md-3 mt-3">
                        <button class="btn btn-primary form-control">Search</button>
                      </div>    
                    </div>
                </div>
                <div id="Founder" class="container tab-pane fade"><br>
                  <div class="row">
                    <div class="col-md-3 mt-3">
                        <input type="text" class="form-control" placeholder="eg. Adam scott">
                    </div>
                    <div class="col-md-3 mt-3">   
                        <select class="form-control">
                          <option value="1">Category</option>
                          <option value="1">Tamporary</option>
                          <option value="1">Ferelance</option>
                        </select>
                    </div>
                    <div class="col-md-3 mt-3">
                      <input type="text" class="form-control" placeholder="location">
                    </div>
                    <div class="col-md-3 mt-3">
                      <button class="btn btn-primary form-control">Search</button>
                    </div>    
                  </div>
                </div>
            </div>
        </div>
      </div>
      </div>
        <div class="container pt-5">
            <h1 class="text-dark text-center pb-5">STUDENT_TABLE</h1>
            
    <div class="mt-5">
            <a href="create.php"><button class="btn btn-success float-right pl-5 pr-5 mb-5 ">MYSQL Form Data</button></a>
    </div>
      <table class=" table table-hover mt-5">
          <tr>
              <th>Id</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Phone Number</th>
              <th>Email</th>
              <th>Class Id</th>
              <th>Action</th>

          </tr>
          <?php
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
      ?>
          <tr>
              <td class="text-danger"><?php echo $row['id']?></td>
              <td class="text-primary"><?php echo $row['firstname']?></td>
              <td class="text-danger"><?php echo $row['lastname']?></td>
              <td class="text-danger"><?php echo $row['phonenumber']?></td>
              <td class="text-primary"><?php echo $row['email']?></td>
              <td class="text-primary"><?php echo $row['classid']?></td>
              <td class="text-danger"><a href="edit.php?id=<?php echo $row['id']?>" class="text-primary">Edit</a>&nbsp;
              <a href="delete.php?id=<?php echo $row['id']?>" class="text-primary">Delete</a>&nbsp;</td>
          </tr>
      
    <?php  
    }
    }
    ?>
    </table>
    </div>
    <?php include("../footer.php")?>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.js"></script>
</body>
</html>