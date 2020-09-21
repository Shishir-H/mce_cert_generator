<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="./styles/style.css">
</head>
<body>

<?php
include './dbOps.php';


$sql = new Mysql();
$sql->dbConnect();
$res = $sql->selectAll("student_details");
$rows = mysqli_fetch_all($res) ;

?>
 <div class="header">
        <img src="./assets/header.jpg" alt="header">
    </div>
    <h1>Admin Panel</h1>
<div>
    <h3>List of students who have applied for certificates:-</h3>
</div>

<div class="table">
    <div class="table-item table-item--head">Name</div>
    <div class="table-item table-item--head">USN</div>
    <div class="table-item table-item--head">Branch</div>
    <div class="table-item table-item--head">Document</div>
    <div class="table-item table-item--head">Date</div>
    
    <?php
        foreach($rows as $key=>$row){
                foreach($row as $key=>$value){ ?>
                    <div class="table-item table-item--reg"><?php echo $value ?></div>
            <?php }
    }?>
</div>

</body>
</html>