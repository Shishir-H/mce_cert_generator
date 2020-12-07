<?php

    require_once './dbOps.php';
    $sql = new Mysql();
    $con = $sql->dbConnect();
    // echo $con;

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }elseif(isset($_POST['id'])){
        $id = $_POST['id'];
    };
   
    

    $query = "SELECT * FROM student_data WHERE id = $id";
    $res = $sql->selectFreeRun($query);
    while ($row = $res->fetch_assoc()) {
        
        $name = $row['name'];
        $usn = $row['usn'];
        $email = $row['email'];
        $branch = $row['branch'];
        $document = $row['doc_type'];
        $cur_ac_year = $row['cur_ac_year'];
        $cou_comp_year  = $row['cou_comp_year'];
        $year = $row['year'];
        $start_year = $row['start_year'];
        $completion_year = $row['completion_year'];
        $sem = $row['sem'];
        $college = $row['college'];
        $date = $row['date'];
        $sem1 = $row['sem1'];
        $sem2 = $row['sem2'];
        $sem3 = $row['sem3'];
        $sem4 = $row['sem4'];
        $sem5 = $row['sem5'];
        $sem6 = $row['sem6'];
        $sem7 = $row['sem7'];
        $sem8 = $row['sem8'];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/style.css">
    
    <title>Document</title>
</head>
<body>
    <div class="header">
        <img src="./assets/header.jpg" alt="header">
    </div>
    <div class="sub-header">
        <h1>MCE DOCUMENT CENTRE</h1>
    </div>
    
    

    
    <div class="container mt-10">
        <form action="./edit.php" method="post" id="form" class="form">
            <input type="text" style="display:none;" name="id" value="<?php echo $id; ?>"></input>
            <input type="text" placeholder="Full Name" name="name" class="form-control" id="fullname" onkeyup="this.value = this.value.toUpperCase();" value ="<?php echo  $name ?>" required>
            <input type="text" placeholder="USN"  name="usn" class="form-control" id="CAP-USN" maxlength="10" onkeyup="this.value = this.value.toUpperCase();" pattern = "^4MC[0-9]{2}[A-Za-z]{2}[0-9]{3}$"  value ="<?php echo  $usn ?>" required>
            <input type="text" placeholder="Email" name="mailId" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value ="<?php echo  $email ?>" required>
            <input type="text" placeholder="Branch" name="branch" class="form-control" value ="<?php echo  $branch ?>" required>
            
           <!-- <select class="form-control" name="branch" required>
              
                <option value disabled selected hidden>Branch</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Electronics & Communication Engineering">Electronics & Instrumentation Technology</option>
                <option value="Computer Science & Engineering">Computer Science & Engineering</option>
                <option value="Civil Engineering">Civil Engineering</option>
                <option value="Industrial Production & Engineering">Industrial Production & Engineering</option>
                <option value="Electricals & Electronics Engineering">Electrical & Electronics Engineering</option>
                <option value="Information Science & Engineering">Information Science & Engineering</option>
                <option value="Electronics & Instrumentation Engineering">Electronics & Instrumentation Engineering</option>
              
            </select> -->
            <select class="form-control" name="document" id = "doc">
              
              <option value disabled selected hidden>Required Document</option>
              <option value="0">Study Certificate ( General )</option>
              <option value="1">Study Certificate ( purpose for Bank loan renewal )</option>
              <option value="2">Study Certificate ( for passed-out students )</option>
              <option value="3">Course completion Certificate</option>
              <option value="4">Character Certificate</option>
              <option value="5">No Objection Certificate</option>
              <option value="6">Expenditure Certificate</option>
              <option value="7">Provisional Degree Certificate</option>
              <option value="8">CGPA Calculation Certificate</option>
              <option value="9">SSLC PUC possession Certificate</option>
            
          </select>
          <input type="text" placeholder="Current Academic Year Ex. 2019-20" name="curAcYear" class="form-control" id="curAcYear" pattern="^[1-9][0-9]{3}-[0-9]{2}$" value ="<?php echo  $cur_ac_year ?>">
          <input type="text" placeholder="Course Completion Year" name="courseCompYear" class="form-control" id="courseCompYear" value ="<?php echo  $cou_comp_year ?>">
          <input type="text" placeholder="Year Ex. 1st,2nd,3rd,4th" name="year" class="form-control" id="year" pattern="^(1st|2nd|3rd|4th)$" value ="<?php echo  $year ?>">
          <input  type="text" placeholder="2018-19" name="startYear" class="form-control" id="startYear"  pattern="^[1-9][0-9]{3}-[0-9]{2}$" value ="<?php echo  $start_year ?>">
          <input type="text" placeholder="2021-22" name="completionYear" class="form-control" id="completionYear" pattern="^[1-9][0-9]{3}-[0-9]{2}$" value ="<?php echo  $completion_year ?>">
          <input type="text" placeholder="Semester" name="sem" class="form-control" id="sem" value ="<?php echo  $sem ?>">
          <input type="text" placeholder="College You want to be admitted" name="college" class="form-control" id="college" value ="<?php echo  $college ?>">
          <div class="semCgpa" id="inSgpa">
            <input type="text" placeholder="SGPA in SEM 1" name="sem1" class="form-control" id="sem1" value ="<?php echo  $sem1 ?>">
            <input type="text" placeholder="SGPA in SEM 2" name="sem2" class="form-control" id="sem2" value ="<?php echo  $sem2 ?>">
            <input type="text" placeholder="SGPA in SEM 3" name="sem3" class="form-control" id="sem3" value ="<?php echo  $sem3 ?>">
            <input type="text" placeholder="SGPA in SEM 4" name="sem4" class="form-control" id="sem4" value ="<?php echo  $sem4 ?>">
            <input type="text" placeholder="SGPA in SEM 5" name="sem5" class="form-control" id="sem5" value ="<?php echo  $sem5 ?>">
            <input type="text" placeholder="SGPA in SEM 6" name="sem6" class="form-control" id="sem6" value ="<?php echo  $sem6 ?>">
            <input type="text" placeholder="SGPA in SEM 7" name="sem7" class="form-control" id="sem7" value ="<?php echo  $sem7 ?>">
            <input type="text" placeholder="SGPA in SEM 8" name="sem8" class="form-control" id="sem8" value ="<?php echo  $sem8 ?>">
          </div>
        <input  class="btn btn-success" type="submit" name="update" id="btn_sbt"></input>
        </form>
        
    
    </div>
    <script src="../script.js"></script>

    
</body>
</html>

<?php

require_once './dbOps.php';
$sql = new Mysql();
$conn = $sql->dbConnect();
       

    if(isset($_POST['name'])){

        $docArr = array("Study Certificate 1 ( General )", "Study Certificate 2 ( purpose for Bank loan renewal)", "Study Certificate ( for passed-out students )", "Course completion Certificate","Character Certificate","No Objection Certificate","Expenditure Certificate","Provisional Degree Certificate","CGPA Calculation Certificate","SSLC PUC possession Certificate");
        $reqstdDoc =  $docArr[$_POST['document']];
        

    $update = "UPDATE `student_data` SET 
        `name`='$_POST[name]',
        `usn`='$_POST[usn]',
        `email`='$_POST[mailId]',
        `branch`='$_POST[branch]',
        `doc_type`='$document',
        `document_name`='$reqstdDoc',
        `cur_ac_year`='$_POST[curAcYear]',
        `cou_comp_year`='$_POST[courseCompYear]',
        `year`='$_POST[year]',
        `start_year`='$_POST[startYear]',
        `completion_year`='$_POST[completionYear]',
        `sem`='$_POST[sem]',
        `college`='$_POST[college]',
        `sem1`='$_POST[sem1]',
        `sem2`='$_POST[sem2]',
        `sem3`='$_POST[sem3]',
        `sem4`='$_POST[sem4]',
        `sem5`='$_POST[sem5]',
        `sem6`='$_POST[sem6]',
        `sem7`='$_POST[sem7]',
        `sem8`='$_POST[sem8]',
         WHERE id='$id'";
    

    $query_run = mysqli_query($conn,$update);
    echo $query_run;
    
    echo $update;
    

    if($query_run){
        echo '<script type="text/javascript">alert("Updated")</script>';
    }else
    {
        echo '<script type="text/javascript">alert("Problem")</script>';
    }
    }
?>






