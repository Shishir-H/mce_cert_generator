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
        $reqstdDoc = $row['document_name'];
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
        <img src="../assets/header.jpg" alt="header">
    </div>
    <div class="sub-header">
        <h1>Edit Document</h1>
    </div>
    
    

    
    <div class="container mt-10">
        <form action="./make_pdf.php" method="post" id="form" class="form" style = "width:90%">
            <input type="text" style="display:none;" name="id" value="<?php echo $id; ?>"></input>
             <input type="text" placeholder="Full Name" name="name" class="form-control" id="fullname" onkeyup="this.value = this.value.toUpperCase();" value ="<?php echo  $name ?>" required>
            <input type="text" placeholder="USN"  name="usn" class="form-control" id="CAP-USN" maxlength="10" onkeyup="this.value = this.value.toUpperCase();" pattern = "^4MC[0-9]{2}[A-Za-z]{2}[0-9]{3}$"  value ="<?php echo  $usn ?>" required>
            <input type="text" placeholder="Email" name="mailId" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value ="<?php echo  $email ?>" required>
            <input type="text" placeholder="Branch" name="branch" class="form-control" value ="<?php echo  $branch ?>" required>
                       
            <select class="form-control" name="document" id = "doc">
              
              <option value="<?php echo "$document" ?>" hidden selected><?php echo $reqstdDoc ?></option>
              <option value="0">Study Certificate ( General )</option>
              <option value="1">Study Certificate ( purpose for Bank loan renewal )</option>
              <option value="2">Study Certificate ( for passed-out students )</option>
              <option value="3">Course completion Certificate</option>
              <option value="4">Character Certificate</option>
              <option value="5">No Objection Certificate ( General )</option>
              <option value="6">No Objection Certificate ( For admission to particular college )</option>
              <option value="7">Expenditure Certificate ( General )</option>
              <option value="8">Provisional Degree Certificate</option>
              <option value="9">CGPA Calculation Certificate</option>
              <option value="10">SSLC PUC possession Certificate</option>
          </select>
          
          <input type="text" placeholder="Current Academic Year Ex. 2019-20" name="curAcYear" class="form-control" id="curAcYear" pattern="^[1-9][0-9]{3}-[0-9]{2}$" value ="<?php echo  $cur_ac_year ?>">
          <input type="text" placeholder="Course Completion Year" name="courseCompYear" class="form-control" id="courseCompYear" value ="<?php echo  $cou_comp_year ?>">
          <input type="text" placeholder="Year Ex. 1st,2nd,3rd,4th" name="year" class="form-control" id="year" pattern="^(1st|2nd|3rd|4th)$" value ="<?php echo  $year ?>">
          <input  type="text" placeholder="From Academic Year ex : 2018-19" name="startYear" class="form-control" id="startYear"  pattern="^[1-9][0-9]{3}-[0-9]{2}$" value ="<?php echo  $start_year ?>">
          <input type="text" placeholder="To Academic Year ex : 2021-22" name="completionYear" class="form-control" id="completionYear" pattern="^[1-9][0-9]{3}-[0-9]{2}$" value ="<?php echo  $completion_year ?>">
          <input type="text" placeholder="Semester" name="sem" class="form-control" id="sem" value ="<?php echo  $sem ?>">
          <input type="text" placeholder="College You want to be admitted" name="college" class="form-control" id="college" value ="<?php echo  $college ?>">
          <input type="text" style="display:none;" placeholder="Degree certificate awarded or will be awarded on ex-July-2019 " name="degree_awarded_on" class="form-control" id="deg_awarded_on">
          <div class="semCgpa" id="inSgpa">
            <input type="number" placeholder="Number of semesters completed" name="total_sem" class="form-control" id="totalSem">
            <input type="text" placeholder="SGPA in SEM 1" name="sem1" class="form-control" id="sem1" value ="<?php echo  $sem1 ?>">
            <input type="text" placeholder="SGPA in SEM 2" name="sem2" class="form-control" id="sem2" value ="<?php echo  $sem2 ?>">
            <input type="text" placeholder="SGPA in SEM 3" name="sem3" class="form-control" id="sem3" value ="<?php echo  $sem3 ?>">
            <input type="text" placeholder="SGPA in SEM 4" name="sem4" class="form-control" id="sem4" value ="<?php echo  $sem4 ?>">
            <input type="text" placeholder="SGPA in SEM 5" name="sem5" class="form-control" id="sem5" value ="<?php echo  $sem5 ?>">
            <input type="text" placeholder="SGPA in SEM 6" name="sem6" class="form-control" id="sem6" value ="<?php echo  $sem6 ?>">
            <input type="text" placeholder="SGPA in SEM 7" name="sem7" class="form-control" id="sem7" value ="<?php echo  $sem7 ?>">
            <input type="text" placeholder="SGPA in SEM 8" name="sem8" class="form-control" id="sem8" value ="<?php echo  $sem8 ?>">
          </div>
        <div style = "display:none;  align:center;margin-left:auto;margin-right:auto;" id="loan_table">
                     <table class = "table">
                        <tr>
                            <td>Tuition fee </td>
                            <td><input type="text" placeholder="Tuition Fee" name="tuition_fee" class="form-control" value="55310.00"></input></td>
                        </tr>
                        <tr>
                            <td>Other fee</td>
                            <td><input type="text" placeholder="Other Fee" name="other_fee" class="form-control" value="4310.00"></input></td>
                        </tr>
                        <tr>
                            <td>MTES (R) Corpus Fund (Tentative)</td>
                            <td><input type="text" placeholder="Corpus Fund" name="corpus_fund" class="form-control" value="15000.00"></input></td>
                        </tr>
                    </table>
    </div>
    <div id="expenditure_table" style = "display:none;">
<table class = "table" style = "align:center;margin-left:auto;margin-right:auto;" id="expenditure_table">
                        <tr>
                            <th>Particulars</th>
                            <th>I Yr.</th>
                            <th>II Yr.</th>
                            <th>III Yr.</th>
                            <th>IV Yr.</th>
                            <th>Grand Total.</th>
                        </tr>
                        <tr>
                            <td>Tuition fee</td>
                            <td><input type="text" class="form-control"  name="tut_fee1"></input></td>
                            <td><input type="text" class="form-control"  name="tut_fee2"></input></td>
                            <td><input type="text" class="form-control"  name="tut_fee3"></input></td>
                            <td><input type="text" class="form-control"  name="tut_fee4"></input></td>
                            
                        </tr>
                            <tr>
                            <td>Other Fee (Exam Fee +University Reg Fee+Other University Fee</td>
                            <td><input type="text" class="form-control"  name="ex_fee1"></input></td>
                            <td><input type="text" class="form-control"  name="ex_fee2"></input></td>
                            <td><input type="text" class="form-control"  name="ex_fee3"></input></td>
                            <td><input type="text" class="form-control"  name="ex_fee4"></input></td>
                       </tr>
                        <tr>
                            <td>MTES (R) Corpus Fund (Tentative)</td>
                            <td><input type="text" class="form-control"  name="corp_fee1"></input></td>
                            <td><input type="text" class="form-control"  name="corp_fee2"></input></td>
                            <td><input type="text" class="form-control"  name="corp_fee3"></input></td>
                            <td><input type="text" class="form-control"  name="corp_fee4"></input></td>
                        </tr>
                        <tr>
                            <td>Books</td>
                            <td><input type="text" class="form-control"  name="book_fee1"></input></td>
                            <td><input type="text" class="form-control"  name="book_fee2"></input></td>
                            <td><input type="text" class="form-control"  name="book_fee3"></input></td>
                            <td><input type="text" class="form-control"  name="book_fee4"></input></td>
                        </tr>
                        <tr>
                            <td>Drawing Board, Drafter, Calculator & Accessories</td>
                            <td><input type="text" class="form-control" name="acc_fee1"></input></td>
                            <td><input type="text" class="form-control" name="acc_fee2"></input></td>
                            <td><input type="text" class="form-control" name="acc_fee3"></input></td>
                            <td><input type="text" class="form-control" name="acc_fee4"></input></td>
                        </tr>
                        <tr>
                            <td>Computer / Laptop</td>
                            <td><input type="text" class="form-control" name="lap_fee1"></input></td>
                            <td><input type="text" class="form-control" name="lap_fee2"></input></td>
                            <td><input type="text" class="form-control" name="lap_fee3"></input></td>
                            <td><input type="text" class="form-control" name="lap_fee4"></input></td>
                        </tr>
                        <tr>
                            <td>Project</td>
                            <td><input type="text" class="form-control" name="proj_fee1"></input></td>
                            <td><input type="text" class="form-control" name="proj_fee2"></input></td>
                            <td><input type="text" class="form-control" name="proj_fee3"></input></td>
                            <td><input type="text" class="form-control" name="proj_fee4"></input></td>
                        </tr>
                        <tr>
                            <td><span>Total<span></td>
                            <td><input type="text" class="form-control" name="tot_fee1"></input></td>
                            <td><input type="text" class="form-control" name="tot_fee2"></input></td>
                            <td><input type="text" class="form-control" name="tot_fee3"></input></td>
                            <td><input type="text" class="form-control" name="tot_fee4"></input></td>
                            <td><input type="text" class="form-control" name="grand_tot_fee"></input></td>
                        </tr>
                    </table>
                    <label for="total">Grand total in words:</label>
                    <input type="text" placeholder="Grand total in words" name="gt_in_words" class="form-control" id="" >

    </div>
        <button  class="btn btn-success" type="submit" name="download" id="btn_sbt">Download</button>

    
        </form>
        
    
    </div>
 
    
 <script src="../edit_page.js"></script>   

    
</body>
</html>