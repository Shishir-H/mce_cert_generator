<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="../styles/style.css">
</head>
<body>
<div class="header">
        <img src="../assets/header.jpg" alt="header">
    </div>
    
    <h1>Admin Panel</h1>
    <div>
        <form action ="./logout.php"> <button class="btn btn-primary pull-right btn-logout" type="submit" >Logout</button></form>
    </div>
    <div>
        <h3>List of students who have applied for certificates:-</h3>
    </div>
    <table class="table table-striped table-responsive table-hover col-12" style="font-size: 15px">

        <!-- <thead class="thead-dark"> -->
            <tr>
                <th scope="col-2">Name</th>
                <th scope="col-2">USN</th>
                <th scope="col-2">Branch</th>
                <th scope="col-2">Email</th>
                <th scope="col-2">Document</th>
                <th scope="col-2">Date</th>
                <th scope="col-2">File</th>
                
            </tr>
        <!-- </thead> -->


<?php
    require_once './dbOps.php';
    
    session_start();

    if(!isset($_SESSION['email'])){
        header("Location: login.php");
        die();
    }
    
    
    

    $sql = new Mysql();
    $sql->dbConnect();
    $res = $sql->selectAll("student_data");

    while($row = mysqli_fetch_assoc($res)){

        $Id = $row['id'];

          echo ("

                 <tr>
                
                    <td scope='col'>".$row["name"]."</td>
                    
                    <td scope='col'>".$row["usn"]."</td>
                    <td scope='col'>".$row["branch"]."</td>
                    <td scope='col'>".$row["email"]."</td>
                    <td scope='col'>".$row["document_name"]."</td>
                    <td scope='col'>".$row["date"]."</td>
                    <td scope='col'><a class='btn btn-success btn-sm' href='makepdf.php?id=$row[id]'>Download</a></td>

                </tr>

            ");
            

    };
    ?>
    </table>

</body>
</html>