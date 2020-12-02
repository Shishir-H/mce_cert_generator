<?php

require_once ('./dbOps.php');

    

//  Assigning documents to the value
$docArr = array("Study Certificate 1 ( General )", "Study Certificate 2 ( purpose for Bank loan renewal)", "Study Certificate ( for passed-out students )", "Course completion Certificate","Character Certificate","No Objection Certificate","Expenditure Certificate","Provisional Degree Certificate","CGPA Calculation Certificate","SSLC PUC possession Certificate");

    

if(isset($_POST['name'])  && isset($_POST['usn']) && isset($_POST['branch']) && isset($_POST['document']) && isset($_POST['curAcYear']))
{
    $name = $_POST['name'];
    $usn = $_POST['usn'];
    $branch = $_POST['branch'];
    $document = $_POST['document'];
    $curAcYear = $_POST['curAcYear'];
    $year = $_POST['year'];
    $mailId = $_POST['mailId'];

    //to get current year
    $date = date("d/m/Y");

    $reqstdDoc =  $docArr[$document];
    // Insert into DataBase
    
    $college = $_POST['college'];
    $startYear = $_POST['startYear'];
    $completionYear = $_POST['completionYear'];
    $courseCompYear = $_POST['courseCompYear'];

    $sem = $_POST['sem'];
    $sem1 = $_POST['sem1'];
    $sem2 = $_POST['sem2'];
    $sem3 = $_POST['sem3'];
    $sem4 = $_POST['sem4'];
    $sem5 = $_POST['sem5'];
    $sem6 = $_POST['sem6'];
    $sem7 = $_POST['sem7'];
    $sem8 = $_POST['sem8'];

    $sql = new Mysql();
    $sql->dbConnect();
   

    $msg = "Hi, '.$name.' thank you for using online portal.\nYour application for '.$reqstdDoc.' has been accepted and the same will be available soon";
    $msg = $msg."\n\nRegards\n\nDev Team\nMCE Hassan";
    $msg = wordwrap($msg,70);
    
    $headers = 'MIME-Version: 1.0';
    $headers .= 'Content-type: text/html; charset=iso-8859-1';
    $to = "$mailId";
    $subject = "Regarding your application for '.$reqstdDoc.'";
    $headers .= "From: someone@example.com\r\n";
    mail($to,$subject,$msg,$headers);
    

    $sql->insertInto("student_data",['',$name,$usn,$mailId,$branch,$document,$reqstdDoc,$curAcYear,$courseCompYear,$year,$startYear,$completionYear,$sem,$college,$sem1,$sem2,$sem3,$sem4,$sem5,$sem6,$sem7,$sem8,$date]);
 
    echo("<div class='alert alert-danger mt-3 text-center'>Invalid Email/Password</div>");
    sleep(1);
    header("Location: ../");

    die();



}


?>
