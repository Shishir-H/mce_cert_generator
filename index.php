<?php

// include the library

use PHPMailer\PHPMailer\Exception;
use Mpdf\Mpdf;

require_once __DIR__ . '/vendor/autoload.php';
$stylesheet = file_get_contents('./pdf.css');

    $name = $_POST['name'];
    $usn = $_POST['usn'];
    $branch = $_POST['branch'];
    $document = $_POST['document'];

    // $startYear = $_POST['startYear'];
    // $completionYear = $_POST['completionYear'];
    // $curAcYear = $_POST['curAcYear'];
    // $year = $_POST['year'];

if(isset($_POST['name'])  && isset($_POST['usn']) && isset($_POST['branch']) && isset($_POST['document']))
{
    
    $college = $_POST['college'];
    
    //to get current year
    $date = date("d/m/Y");
    $curYear = date('y');
    $prevYear = date('Y')-1;



        

    
    // a new instance of the library

    $mpdf = new Mpdf(); 

    $data = "";

    if($document == 1){
        
        $data .= (
            '<div>
                <p class = "head-para">MCE/Dean-SA/study Cer/'.$prevYear.'-'.$curYear.'</p> 
                <p class = "head-para">Date : '.$date.'</p> 
                <h1>study certificate</h1>
                <p>This is to certify that Mr/Ms. <span>'.$name.'</span> bearing USN: <span>'.$usn.'</span> is a bonafide student of this institution.  He/She is eligible for 3rd year B.E. in <span>'.$branch.'</span> during the Academic year <span>'.$prevYear.'-'.$curYear.'</span></p>
                <p>His/her character and conduct are/were good, during his/her stay in this College.</p>
            </div>');
           echo $data;
    }else if($document==2){
        $data .= (
            '<div>
                <p>MCE/Dean-SA/study Cer/'.$prevYear.'-'.$curYear.' Date: '.$date.'</p>
                <h1>STUDY CERTIFICATE FOR LOAN</h1>
                <p>This is to certify that Mr/Ms. <span>'.$name.'</span>  bearing USN: <span>'.$usn.'</span> is a bonafide student of this institution.  He/She is eligible for 1st year B.E. in <span>'.$branch.'</span> during the Academic year <span>2019-20.</span></p>
                <p>He/She has to pay the fee details as follows.</p>
                <table class = "table">
            
                    <tr>
                        <td>Tuition fee </td>
                        <td>55310.00</td>
                    </tr>
                    <tr>
                        <td>Other fee</td>
                        <td>4310.00</td>
                    </tr>
                    <tr>
                        <td>MTES (R) Corpus Fund (Tentative)</td>
                        <td>15000.00</td>
                    </tr>
                </table>
                <p>His/her character and conduct are/were good, during his/her stay in this College.</p>
            </div>');

    }else if($document ==3){
        
    $startYear = $_POST['startYear'];
    $completionYear = $_POST['completionYear'];
    
        $data .= (
            
            '<div>
                <p>MCE/Dean-SA/CCC/'.$prevYear.'-'.$curYear.' Date: '.$date.'</p>
                <h1>COURSE COMPLETION CERTIFICATE</h1>
                <p>This is to certify that Mr/Ms. <span>'.$name.'</span> bearing USN: <span>'.$usn.'</span> is a bonafide student of this institution and studied B.E. in <span>'.$branch.'</span> during the academic year <span>'.$startYear.' to  '.$completionYear.'</span>.</p>
                <p>He/She has completed his/her four years Programme.  He/She has successfully fulfilled the course requirements and has attained the qualification for which the certificate is to be awarded during July- 2019. 
                <br>His / Her character and conduct have been good during his / her stay in the college.</p>
            </div>'
        );
    
    }else if($document==4){
        
    $startYear = $_POST['startYear'];
    $completionYear = $_POST['completionYear'];
        if(empty($startYear)){
            alert("Please enter the something in the searchbox");
        }else{
            $data .= (
                
                '<div>
                    <p>MCE/Dean-SA/CC/'.$prevYear.'-'.$curYear.' Date: '.$date.'</p>
                    <h1>Charecter Certificate</h1>
                    <p>This is to certify that Mr/Ms. <span>'.$name.'</span> bearing USN: <span>'.$usn.'</span> is a bonafide student of this institution and studied B.E. in <span>'.$branch.'</span> during the academic year '.$startYear.' to  '.$completionYear.'.</p>
                    <p>His/Her character and conduct were good, during the stay in this College.</p>
                </div>'
            );
        }

    }else if($document==5){
        $curAcYear = $_POST['curAcYear'];
        $year = $_POST['year'];
        
        $data .= (
            
            '<div>
                <p>MCE/Dean-SA/NOC/'.$prevYear.'-'.$curYear.' Date: '.$date.'</p>
                <h1>No Objection Certificate</h1>
                <p>This is to certify that Mr/Ms. <span>'.$name.'.</span> bearing USN: <span>'.$usn.'</span> was a bonafide student of this institution.  He/She was pursuing <span>'.$year.'</span> year B.E. in <span>'.$branch.'</span> during the Academic year <span>'.$curAcYear.'</span>.</p>
                <p>His/her character and conduct are/were good, during his/her stay in this College.</p>
                <p>This institution has No Objection to Mr. Varun G. for newly admission to '.$college.' </p>
            </div>'
        );
        
    }else if($document==6){
        $data .= (
            
            '<div>
                <p>MCE/Dean-SA/EC/'.$prevYear.'-'.$curYear.' Date: '.$date.'</p>
                <h1>Expenditure Certificate</h1>
                <p>This is to certify that Mr./Ms. <span>'.$name.'</span>  bearing USN: <span>'.$usn.'</span> bonafide student of this institution studying  <span>'.$sem.'</span> semester B.E in  <span>'.$branch.'</span> under aided/unaided/Government  seat/management seat  during <span>'.$curAcYear.'</span></p>
                <p>The probable expenditure for his/her 4 years degree course will be.</p>
                <table class = "table">
                <tr>
                    <th>Particulars</th>
                    <th>I Yr.</th>
                    <th>II Yr.</th>
                    <th>III Yr.</th>
                    <th>III IV Yr.</th>
                    <th>Grand Total.</th>
                </tr>
                <tr>
                    <td>Tuition fee</td>
                    <td>15,000</td>
                    <td>15,000</td>
                    <td>15,000</td>
                    <td>15,000</td>
                </tr>
                    <tr>
                    <td>Other Fee (Exam Fee +University Reg Fee+Other University Fee</td>
                    <td>7,310</td>
                    <td>4,650</td>
                    <td>4,650</td>
                    <td>4,650</td>
                    </tr>
                <tr>
                    <td>MTES (R) Corpus Fund (Tentative)</td>
                    <td>18,000</td>
                    <td>16,000</td>
                    <td>16,000</td>
                    <td>16,000</td>
                </tr>
                <tr>
                    <td>Books</td>
                    <td>10,000</td>
                    <td>10,000</td>
                    <td>10,000</td>
                    <td>10,000</td>
                </tr>
                <tr>
                    <td>Drawing Board, Drafter, Calculator & Accessories</td>
                    <td>10,000</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Computer / Laptop</td>
                    <td>45,000</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Project</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>15,000</td>
                </tr>
                <tr>
                    <td><span>Total<span></td>
                    <td><span>1,05,310.00<span></td>
                    <td><span>45,650.00<span></td>
                    <td><span>45,650.00<span></td>
                    <td><span>60,650.00<span></td>
                    <td><span>2,57,260.00<span></td>
                </tr>
            </table>       
            <p><span>Rs: 2,57,260</span> (Rs Two lakh fifty seven thousand two hundred and sixty only) <br>He/She bears good character and conduct.</p>
            <p><span>Note</span></p>
            <p style = "font-size: 14px;">1) Issue the D D for Corpus Fund In the Favor Of Malnad Technical Education Society ®, Hassan, <br>
            2) issue the D D for Tuition fee in the favour of Principal, Malnad College of Engineering, Hassan.
            </p>
            <pagebreak>
            <table class = "table">
                <tr>
                    <th>Particulars</th>
                    <th>I Yr.</th>
                    <th>II Yr.</th>
                    <th>III Yr.</th>
                    <th>III IV Yr.</th>
                    <th>Grand Total.</th>
                </tr>
                <tr>
                    <td>Tuition fee</td>
                    <td>75,000</td>
                    <td>75,000</td>
                    <td>75,000</td>
                    <td>75,000</td>
                </tr>
                    <tr>
                    <td>Other Fee (Exam Fee +University Reg Fee+Other University Fee</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    </tr>
                <tr>
                    <td>MTES (R) Corpus Fund (Tentative)</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                    <td>0.00</td>
                </tr>
                <tr>
                    <td>Books</td>
                    <td>10,000</td>
                    <td>10,000</td>
                    <td>10,000</td>
                    <td>10,000</td>
                </tr>
                <tr>
                    <td>Drawing Board, Drafter, Calculator & Accessories</td>
                    <td>10,000</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Computer / Laptop</td>
                    <td>45,000</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Project</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>15,000</td>
                </tr>
                <tr>
                    <td><span>Total<span></td>
                    <td><span>1,40,000.00<span></td>
                    <td><span>85,000.00<span></td>
                    <td><span>85,000.00<span></td>
                    <td><span>1,00,000.00<span></td>
                    <td><span>4,10,000.00<span></td>
                </tr>
            </table>
            <p><span>Rs: 4,10,000</span> (Rs Four lakh ten thousand only)<br>He/She bears good character and conduct.</p>
            <p><span>Note</span></p>
            <p style = "font-size: 14px;">1) Issue the D D for Corpus Fund In the Favor Of Malnad Technical Education Society ®, Hassan, <br>
            2) issue the D D for Tuition fee in the favour of Principal, Malnad College of Engineering, Hassan.
            </p>
        </div>'
        );
        
    }else if($document==7){
        // getting sem marks
    $sem1 = $_POST['sem1'];
    $sem2 = $_POST['sem2'];
    $sem3 = $_POST['sem3'];
    $sem4 = $_POST['sem4'];
    $sem5 = $_POST['sem5'];
    $sem6 = $_POST['sem6'];
    $sem7 = $_POST['sem7'];
    $sem8 = $_POST['sem8'];

    // calculate cgpa

    $sem1_perc = round((($sem1 - 0.75)*10),2);
    $sem2_perc = round((($sem2 - 0.75)*10),2);
    $sem3_perc = round((($sem3 - 0.75)*10),2);
    $sem4_perc = round((($sem4 - 0.75)*10),2);
    $sem5_perc = round((($sem5 - 0.75)*10),2);
    $sem6_perc = round((($sem6 - 0.75)*10),2);
    $sem7_perc = round((($sem7 - 0.75)*10),2);
    $sem8_perc = round((($sem8 - 0.75)*10),2);
    
    // calculate cgpa

    $cgpa =  round((($sem1 + $sem2 +$sem3 + $sem4 +$sem5 + $sem6 + $sem7 + $sem8)/8.0),2);
    
    // calculate cgpa
    $perc = round(($cgpa-0.75*10),2);
        $data .=(
        '<div>
            <p>MCE/Dean-SA/PDC/'.$prevYear.'-'.$curYear.' Date: '.$date.'</p>
            <h1>Provisional Degree Certificate</h1>
            <p>This is to certify that Mr/Ms '.$name.' has successfully completed Bachelor of Engineering degree in '.$branch.' in the year 2019 with USN '.$usn.'  and he/she is eligible for the award of  degree. Her CGPA is '.$cgpa.' for the entire B.E programme. </p>
            <p>His/Her character and conduct have been good during the stay in our college.</p>
        </div>'
        );
    }else if($document==8){
        // getting sem marks
    $sem1 = $_POST['sem1'];
    $sem2 = $_POST['sem2'];
    $sem3 = $_POST['sem3'];
    $sem4 = $_POST['sem4'];
    $sem5 = $_POST['sem5'];
    $sem6 = $_POST['sem6'];
    $sem7 = $_POST['sem7'];
    $sem8 = $_POST['sem8'];

    // calculate cgpa

    $sem1_perc = round((($sem1 - 0.75)*10),2);
    $sem2_perc = round((($sem2 - 0.75)*10),2);
    $sem3_perc = round((($sem3 - 0.75)*10),2);
    $sem4_perc = round((($sem4 - 0.75)*10),2);
    $sem5_perc = round((($sem5 - 0.75)*10),2);
    $sem6_perc = round((($sem6 - 0.75)*10),2);
    $sem7_perc = round((($sem7 - 0.75)*10),2);
    $sem8_perc = round((($sem8 - 0.75)*10),2);
    
    // calculate cgpa

    $cgpa =  round((($sem1 + $sem2 +$sem3 + $sem4 +$sem5 + $sem6 + $sem7 + $sem8)/8.0),2);
    
    // calculate cgpa
    $perc = round(($cgpa-0.75*10),2);
        $data .=(
            '<div>
                <p>MCE/Dean-SA/PDC/'.$prevYear.'-'.$curYear.' Date: '.$date.'</p>
                <h1>Provisional Degree Certificate</h1>
                <p>This is to certify that the CGPA scored by <span>'.$name.'</span> who has completed B.E. in <span>'.$branch.' </span> with  USN <span>'.$usn.'</span> from this Institution the equivalent percentage of marks for the CGPA earned in the below semester is as follows:-</p>
                <table>
                    <tr>
                        <th>Semester</th>
                        <th>CGPA</th>
                        <th>CGPA Percentage</th>
                    </tr>
                    <tr>
                        <td>I</td>
                        <td>'.$sem1.'</td>
                        <td>'.$sem1_perc.'</td>
                    </tr>
                    <tr>
                        <td>II</td>
                        <td>'.$sem2.'</td>
                        <td>'.$sem2_perc.'</td>
                    </tr>
                    <tr>
                        <td>III</td>
                        <td>'.$sem3.'</td>
                        <td>'.$sem3_perc.'</td>
                    </tr>
                    <tr>
                        <td>IV</td>
                        <td>'.$sem4.'</td>
                        <td>'.$sem4_perc.'</td>
                    </tr>
                    <tr>
                        <td>V</td>
                        <td>'.$sem5.'</td>
                        <td>'.$sem5_perc.'</td>
                    </tr>
                    <tr>
                        <td>VI</td>
                        <td>'.$sem6.'</td>
                        <td>'.$sem6_perc.'</td>
                    </tr>
                    <tr>
                        <td>VII</td>
                        <td>'.$sem7.'</td>
                        <td>'.$sem7_perc.'</td>
                    </tr>
                    <tr>
                        <td>VIII</td>
                        <td>'.$sem8.'</td>
                        <td>'.$sem8_perc.'</td>
                    </tr>
                </table>
                <p style = "text-align:center;"><span>Percentage =(CGPA-0.75	)x10</span></p>
                
  
            </div>'
            );
        
    }

   
    $mpdf->WriteHTML($stylesheet,1);
    $mpdf->WriteHtml($data);

    $mpdf->output();   
    

}

?>
