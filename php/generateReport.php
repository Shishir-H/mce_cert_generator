<?php
    require_once './dbOps.php';
    session_start();
    $sql = new Mysql();
    $con = $sql->dbConnect();

    $setSql = "SELECT 
    id,
    name,
    usn,
    email,
    branch,
    document_name,
    cur_ac_year,
    cou_comp_year,
    year,
    start_year,
    completion_year,
    sem,
    college,
    sem1,
    sem2,
    sem3,
    sem4,
    sem5,
    sem6,
    sem7,
    sem8,
    date

    from student_data";

    $setRec = mysqli_query($con, $setSql);  
    
    $columnHeader = ''; 

    $columnHeader = "Id"." \t".
                    "Name"." \t".
                    "USN"." \t".
                    "Email"." \t".
                    "Branch"." \t".
                    "Document Name"." \t".
                    "Academic Year"." \t".
                    "Course Completion Year"." \t".  
                    "Year"." \t".  
                    "Course Start Year"." \t".  
                    "Course Completion Year"." \t".  
                    "Semester"." \t".  
                    "College(only for NOC)"." \t".  
                    "Sem-1 SGPA"." \t".  
                    "Sem-2 SGPA"." \t".  
                    "Sem-3 SGPA"." \t".  
                    "Sem-4 SGPA"." \t".  
                    "Sem-5 SGPA"." \t".  
                    "Sem-6 SGPA"." \t".  
                    "Sem-7 SGPA"." \t".  
                    "Sem-8 SGPA"." \t".  
                    "date";  
    
    $setData = '';  
    while ($rec = mysqli_fetch_row($setRec)) {  
        $rowData = '';  
        foreach ($rec as $value) {  
            $value = '"' . $value . '"' . "\t";  
            $rowData .= $value;  
        }  
        $setData .= trim($rowData) . "\n";  
    }  
        
        
    header("Content-type: application/octet-stream");  
    header('Content-Disposition: attachment;filename="StudentReport.xls"'); 
    header("Pragma: no-cache");  
    header("Expires: 0");  
        
    echo (ucwords($columnHeader) . "\n" . $setData . "\n");  
        


    

    
?>