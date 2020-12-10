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
   
    
    <table class="table">

        <thead class="thead-dark">
                <tr>
                <th scope="col-2">Name</th>
                <th scope="col-2">USN</th>
                <th scope="col-2">Branch</th>
                <th scope="col-2">Email</th>
                <th scope="col-2">Document</th>
                <th scope="col-2">Date</th>
                <th scope="col-2">File</th>
                </tr>
        </thead>

        <form method="post" action="">
<?php
    require_once './dbOps.php';
    
    session_start();

    if(!isset($_SESSION['email'])){
        header("Location: login.php");
        die();
    }
    $limit = 10;    
    if (isset($_GET["page"])) {  
        $pn  = $_GET["page"];  
    }  
    else {  
        $pn=1;  
    };   

    $start_from = ($pn-1) * $limit; 

    $sql = new Mysql();
    $sql->dbConnect();
    $res = $sql->freeRun("SELECT * FROM student_data  ORDER BY id DESC LIMIT $start_from, $limit");

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
                    <td scope='col'><a class='btn btn-primary btn-sm btn-download' href='makepdf.php?id=$row[id]' target='_blank'>View</a></td>
                    <td scope='col'><a class='btn btn-primary btn-sm btn-download' href='./edit_page.php?id=$row[id]' target='_blank'>Edit</a></td>
                </tr>
                
                

            ");
            

    };
    ?>
    </form>
</table>
    
    <ul class="pagination pagination-md justify-content-center"> 
                        <?php   

                            require_once 'dbOps.php';
                                                    
                            $sql = new Mysql();
                            $con = $sql->dbConnect();

                            $res = "SELECT COUNT(*) FROM student_data";   
                            $rs_result = mysqli_query($con, $res);   
                            $row = mysqli_fetch_row($rs_result); 

                            $total_records = $row[0];   
                             
                            $total_pages = ceil($total_records / $limit);  
                            $pagLink = "";                    
                            for ($i=1; $i<=$total_pages; $i++) { 
                                if ($i==$pn) { 
                                    $pagLink .= "<li class='active page-item'>
                                                    <a class='page-link' href='admin.php?page=".$i."'>".$i."</a>
                                                </li>"; 
                                }             
                                else  { 
                                    $pagLink .= "<li class='page-item'>
                                                    <a class='page-link' href='admin.php?page=".$i."'>".$i."</a>
                                                </li>";   
                                                                         
                                } 
                            }
                            
                            echo $pagLink;   

                        ?> 
                    </ul>
        <span class="d-flex justify-content-center">
         <a href='generateReport.php' class="btn btn-primary pull-right btn-generate">Generate Report </a>
    </span>

</body>
</html>