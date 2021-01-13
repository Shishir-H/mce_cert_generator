<?php

require_once ('./dbOps.php');

    

//  Assigning documents to the value
$docArr = array("Study Certificate 1 ( General )", "Study Certificate 2 ( purpose for Bank loan renewal)","Study Certificate  ( For passed out students)", "Course completion Certificate","Character Certificate","No Objection Certificate ( General )","No Objection Certificate ( For admission to particular college )","Expenditure Certificate","Provisional Degree Certificate","CGPA Calculation Certificate","SSLC PUC possession Certificate");

    

if(isset($_POST['name'])  && isset($_POST['usn']) && isset($_POST['branch']) && isset($_POST['document']) && isset($_POST['curAcYear']))
{
    $name =  htmlspecialchars($_POST['name']);
    $usn =  htmlspecialchars($_POST['usn']);
    $branch =  htmlspecialchars($_POST['branch']);
    $document =  htmlspecialchars($_POST['document']);
    $curAcYear =  htmlspecialchars($_POST['curAcYear']);
    $year =  htmlspecialchars($_POST['year']);
    $mailId =  htmlspecialchars($_POST['mailId']);

    //to get current year
    $date = date("d/m/Y");

    $reqstdDoc =  $docArr[$document];

    
    $college =  htmlspecialchars($_POST['college']);
    $startYear =  htmlspecialchars($_POST['startYear']);
    $completionYear =  htmlspecialchars($_POST['completionYear']);
    $courseCompYear =  htmlspecialchars($_POST['courseCompYear']);


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
 
    // echo("<div class='alert alert-danger mt-3 text-center'>Invalid Email/Password</div>");
    sleep(1);
    header("Location: ../");

    die();



}


?>
