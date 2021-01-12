<?php

// include the library

use PHPMailer\PHPMailer\Exception;
use Mpdf\Mpdf;

require_once __DIR__ . '/vendor/autoload.php';
include './dbOps.php';
$stylesheet = file_get_contents('../styles/pdf.css');

    $name = $_POST['name'];
    $usn = $_POST['usn'];
    $branch = $_POST['branch'];
    $document = $_POST['document'];
    $cur_ac_year = $_POST['curAcYear'];
    $year = $_POST['year'];

    // Assigning documents to the value
    $docArr = array("Study Certificate 1 ( General )", "Study Certificate 2 ( purpose for Bank loan renewal)", "Course completion Certificate","Character Certificate","No Objection Certificate ( General )","No Objection Certificate ( For admission to particular college )","Expenditure Certificate","Provisional Degree Certificate","CGPA Calculation Certificate","SSLC PUC possession Certificate");

    

if(isset($_POST['name'])  && isset($_POST['usn']) && isset($_POST['branch']) && isset($_POST['document']) && isset($_POST['curAcYear']))
{
    //to get current year
    $date = date("d/m/Y");

    // $reqstdDoc =  $docArr[$document];
    $college = $_POST['college'];
    
 
    // a new instance of the library


    $mpdf = new Mpdf(); 

    $data = '<div style="height:3rem;"></div>
                <div><p style="text-align:right";>Date:'.$date.'</p></div>';

    if($document == 0 || $document == 2){
        
        $data .= (
            '
            <div>
                <h1>study certificate</h1>
                <p>This is to certify that Mr/Ms. <span>'.$name.'</span> bearing USN: <span>'.$usn.'</span> is a bonafide student of this institution.  He/She is eligible for '.$year.' year B.E. in <span>'.$branch.'</span> during the Academic year <span>'.$cur_ac_year.'</span></p>
                <p>His/her character and conduct are/were good, during his/her stay in this College.</p>
            </div>
            ');
          
        }else if($document==1){
            $tuition_fee = $_POST['tuition_fee'];
            $other_fee = $_POST['other_fee'];
            $corpus_fund = $_POST['corpus_fund'];
            $data .= (
                '<div>
                <h1>STUDY CERTIFICATE FOR LOAN</h1>
                    <p>This is to certify that Mr/Ms. <span>'.$name.'</span>  bearing USN: <span>'.$usn.'</span> is a bonafide student of this institution.  He/She is eligible for '.$year.' year B.E. in <span>'.$branch.'</span> during the Academic year <span>'.$cur_ac_year.'</span></p>
                    <p>He/She has to pay the fee details as follows.</p>
                    <table class = "table">
                
                        <tr>
                            <td>Tuition fee </td>
                            <td>'.$tuition_fee.'</td>
                        </tr>
                        <tr>
                            <td>Other fee</td>
                            <td>'.$other_fee.'</td>
                        </tr>
                        <tr>
                            <td>MTES (R) Corpus Fund (Tentative)</td>
                            <td>'.$corpus_fund.'</td>
                        </tr>
                    </table>
                    <p>His/her character and conduct are/were good, during his/her stay in this College.</p>
                </div>');

            }else if($document ==3){
                $start_year = $_POST['startYear'];
                $completion_year = $_POST['completionYear'];
                $deg_awarde_on = $_POST['degree_awarded_on'];
                
                    $data .= (
                        
                        '<div>
                            <h1>COURSE COMPLETION CERTIFICATE</h1>
                            <p>This is to certify that Mr/Ms. <span>'.$name.'</span> bearing USN: <span>'.$usn.'</span> is a bonafide student of this institution and studied B.E. in <span>'.$branch.'</span> during the academic year <span>'.$start_year.'</span> to <span> '.$completion_year.'</span>.</p>
                            <p>He/She has completed his/her four years Programme.  He/She has successfully fulfilled the course requirements and has attained the qualification for which the certificate is to be awarded during <span>'.$deg_awarde_on.'</span>. 
                            <br><br>His / Her character and conduct have been good during his / her stay in the college.</p>
                        </div>'
                    );
    
    }else if($document==4){
            
        $start_year = $_POST['startYear'];
        $completion_year = $_POST['completionYear'];
            
                $data .= (
                    
                    '<div>
                    <h1>Character Certificate</h1>
                        <p>This is to certify that Mr/Ms. <span>'.$name.'</span> bearing USN: <span>'.$usn.'</span> is a bonafide student of this institution and studied B.E. in <span>'.$branch.'</span> during the academic year <span>'.$start_year.'</span> to  <span>'.$completion_year.'</span>.</p>
                        <p>His/Her character and conduct were good, during the stay in this College.</p>
                    </div>'
                );
            
        

            }else if($document==5){
                $start_year = $_POST['startYear'];
                $data .= (
                    
                    '<div>
                        <h1>No Objection Certificate</h1>
                        <p>This is to certify that Mr/Ms. <span>'.$name.'.</span> bearing USN: <span>'.$usn.'</span>, joining this  institution for the year '.$start_year.'  has not completed B.E in our institution (M.C.E, Hassan).The college has no objection in the above said candidate pursuing his study elsewhere.</p>
                        <p>His character and conduct were Satisfactory.</p>
                    </div>'
                );

            }else if($document==6){
            
            
                $data .= (
                    
                    '<div>
                        <h1>No Objection Certificate</h1>
                        <p>This is to certify that Mr/Ms. <span>'.$name.'.</span> bearing USN: <span>'.$usn.'</span> was a bonafide student of this institution.  He/She was pursuing <span>'.$year.'</span> year B.E. in <span>'.$branch.'</span> during the Academic year <span>'.$cur_ac_year.'</span>.</p>
                        <p>His/her character and conduct are/were good, during his/her stay in this College.</p>
                        <p>This institution has No Objection to <span>Mr. '.$name.'</span> for newly admission to <span>'.$college.'</span> </p>
                    </div>'
                );
        
            }else if($document==7){
                $tut_fee1=$_POST['tut_fee1'];
                $tut_fee2=$_POST['tut_fee2'];
                $tut_fee3=$_POST['tut_fee3'];
                $tut_fee4=$_POST['tut_fee4'];

                $ex_fee1 = $_POST['ex_fee1'];
                $ex_fee2 = $_POST['ex_fee2'];
                $ex_fee3 = $_POST['ex_fee3'];
                $ex_fee4 = $_POST['ex_fee4'];

                $corp_fee1 = $_POST['corp_fee1'];
                $corp_fee2 = $_POST['corp_fee2'];
                $corp_fee3 = $_POST['corp_fee3'];
                $corp_fee4 = $_POST['corp_fee4'];
                
                $book_fee1 = $_POST['book_fee1'];
                $book_fee2 = $_POST['book_fee2'];
                $book_fee3 = $_POST['book_fee3'];
                $book_fee4 = $_POST['book_fee4'];
                
                $acc_fee1 = $_POST['acc_fee1'];
                $acc_fee2 = $_POST['acc_fee2'];
                $acc_fee3 = $_POST['acc_fee3'];
                $acc_fee4 = $_POST['acc_fee4'];
                
                $lap_fee1 = $_POST['lap_fee1'];
                $lap_fee2 = $_POST['lap_fee2'];
                $lap_fee3 = $_POST['lap_fee3'];
                $lap_fee4 = $_POST['lap_fee4'];
                
                $proj_fee1 = $_POST['proj_fee1'];
                $proj_fee2 = $_POST['proj_fee2'];
                $proj_fee3 = $_POST['proj_fee3'];
                $proj_fee4 = $_POST['proj_fee4'];
                
                $tot_fee1 = $_POST['tot_fee1'];
                $tot_fee2 = $_POST['tot_fee2'];
                $tot_fee3 = $_POST['tot_fee3'];
                $tot_fee4 = $_POST['tot_fee4'];

             

                $year = $_POST['year'];
                if($year=='1st'){
                    $year='4';
                }else if($year=='2nd'){
                    $year='3';
                }else if($year=='3rd'){
                    $year='2';
                }else if($year=='4th'){
                    $year='1';
                }


                
                $data .= (
                    
                    '<div>
                    
                        <h1>Expenditure Certificate</h1>
                        <p>This is to certify that Mr./Ms. <span>'.$name.'</span>  bearing USN: <span>'.$usn.'</span> bonafide student of this institution studying  <span>'.$sem.'</span> semester B.E in  <span>'.$branch.'</span> under aided/unaided/Government  seat/management seat  during <span>'.$cur_ac_year.'</span></p>
                        <p>The probable expenditure for his/her '.$year.' years degree course will be.</p>
                        <table class = "table">
                        <tr>
                            <th>Particulars</th>
                            <th>I Yr.</th>
                            <th>II Yr.</th>
                            <th>III Yr.</th>
                            <th>IV Yr.</th>
                        </tr>
                        <tr>
                            <td>Tuition fee</td>
                            <td>'.$tut_fee1.'</td>
                            <td>'.$tut_fee2.'</td>
                            <td>'.$tut_fee3.'</td>
                            <td>'.$tut_fee4.'</td>
                        </tr>
                            <tr>
                            <td>Other Fee (Exam Fee +University Reg Fee+Other University Fee</td>
                            <td>'.$ex_fee1.'</td>
                            <td>'.$ex_fee2.'</td>
                            <td>'.$ex_fee3.'</td>
                            <td>'.$ex_fee4.'</td>
                            </tr>
                       
                        <tr>
                            <td>Books</td>
                            <td>'.$book_fee1.'</td>
                            <td>'.$book_fee2.'</td>
                            <td>'.$book_fee3.'</td>
                            <td>'.$book_fee4.'</td>
                        </tr>
                        <tr>
                            <td>Drawing Board, Drafter, Calculator & Accessories</td>
                            <td>'.$acc_fee1.'</td>
                            <td>'.$acc_fee2.'</td>
                            <td>'.$acc_fee3.'</td>
                            <td>'.$acc_fee4.'</td>
                        </tr>
                        <tr>
                            <td>Computer / Laptop</td>
                            <td>'.$lap_fee1.'</td>
                            <td>'.$lap_fee2.'</td>
                            <td>'.$lap_fee3.'</td>
                            <td>'.$lap_fee4.'</td>
                        </tr>
                        <tr>
                            <td>Project</td>
                            <td>'.$proj_fee1.'</td>
                            <td>'.$proj_fee2.'</td>
                            <td>'.$proj_fee3.'</td>
                            <td>'.$proj_fee4.'</td>
                        </tr>
                        <tr>
                            <td style = "border:none;"></td>
                            <td><span>'.$tot_fee1.'<span></td>
                            <td><span>'.$tot_fee2.'<span></td>
                            <td><span>'.$tot_fee3.'<span></td>
                            <td><span>'.$tot_fee4.'<span></td>
                        </tr>
                        
                        <tr class= "noBorder">       
                            <td colspan="5" >
                                <p style="text-decoration:underline;"><span>Note</span></p>    
                            </td><br>
                        </tr>
                        <tr class = "noBorder">
                            <td colspan="5">
                                <p style = "font-size: 14px;">1) Issue the D D for Corpus Fund In the Favor Of Malnad Technical Education Society ®, Hassan.
                            </td>
                        </tr> <br><br>
                        <tr>
                            <td>MTES (R) Corpus Fund (Tentative)</td>
                            <td>'.$corp_fee1.'</td>
                            <td>'.$corp_fee2.'</td>
                            <td>'.$corp_fee3.'</td>
                            <td>'.$corp_fee4.'</td>
                        </tr>
                    </table>
                    <br>
                    <pre>     2)Issue the D D for Tuition fee in the favour of Principal, Malnad College of Engineering, Hassan.</pre>
                    </p>
                    
                </div>'
                );
            
            }else if($document==8){
                $cou_comp_year = $_POST['courseCompYear'];
                $cgpa = $_POST['cgpa'];

                    $data .=(
                    '<div>  
                    <h1>Provisional Degree Certificate</h1>
                        <p>This is to certify that Mr/Ms <span>'.$name.'</span> has successfully completed Bachelor of Engineering degree in <span>'.$branch.'</span> in the year <span>'.$cou_comp_year.'</span> with USN <span>'.$usn.'</span>  and he/she is eligible for the award of  degree. His/Her CGPA is <span>'.$cgpa.'</span> for the entire B.E programme. </p>
                        <p>His/Her character and conduct have been good during the stay in our college.</p>
                    </div>'
                    );
                }else if($document==9){
                    $toal_sem=$_POST['total_sem'];
                    if($toal_sem==1){
                        $sem1 = $_POST['sem1'];
                        $sem1_perc = round((($sem1 - 0.75)*10),2);

                        $data .=(
                            '<div>
                                <h1>TO WHOMSOEVER IT MAY CONCERN</h1>
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
                                </table>
                                    <p style = "text-align:center;"><span>Percentage =(CGPA-0.75	)x10</span></p>
                            </div>'
                        );
                    }else if($toal_sem==2){
                        $sem1 = $_POST['sem1'];
                        $sem2 = $_POST['sem2'];
                        $sem1_perc = round((($sem1 - 0.75)*10),2);
                        $sem2_perc = round((($sem2 - 0.75)*10),2);

                        $data .=(
                            '<div>
                                <h1>TO WHOMSOEVER IT MAY CONCERN</h1>
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
                                </table>
                                    <p style = "text-align:center;"><span>Percentage =(CGPA-0.75	)x10</span></p>
                            </div>'
                        );
                    }else if($toal_sem==3){
                        $sem1 = $_POST['sem1'];
                        $sem2 = $_POST['sem2'];
                        $sem3 = $_POST['sem3'];
                        $sem1_perc = round((($sem1 - 0.75)*10),2);
                        $sem2_perc = round((($sem2 - 0.75)*10),2);
                        $sem3_perc = round((($sem3 - 0.75)*10),2);

                        $data .=(
                            '<div>
                                <h1>TO WHOMSOEVER IT MAY CONCERN</h1>
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
                                </table>
                                    <p style = "text-align:center;"><span>Percentage =(CGPA-0.75	)x10</span></p>
                            </div>'
                        );

                    }else if($toal_sem==4){
                        $sem1 = $_POST['sem1'];
                        $sem2 = $_POST['sem2'];
                        $sem3 = $_POST['sem3'];
                        $sem4 = $_POST['sem4'];
                        $sem1_perc = round((($sem1 - 0.75)*10),2);
                        $sem2_perc = round((($sem2 - 0.75)*10),2);
                        $sem3_perc = round((($sem3 - 0.75)*10),2);
                        $sem4_perc = round((($sem4 - 0.75)*10),2);

                        $data .=(
                            '<div>
                                <h1>TO WHOMSOEVER IT MAY CONCERN</h1>
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
                                </table>
                                    <p style = "text-align:center;"><span>Percentage =(CGPA-0.75	)x10</span></p>
                            </div>'
                        );

                    }else if($toal_sem==5){
                        $sem1 = $_POST['sem1'];
                        $sem2 = $_POST['sem2'];
                        $sem3 = $_POST['sem3'];
                        $sem4 = $_POST['sem4'];
                        $sem5 = $_POST['sem5'];
                        $sem1_perc = round((($sem1 - 0.75)*10),2);
                        $sem2_perc = round((($sem2 - 0.75)*10),2);
                        $sem3_perc = round((($sem3 - 0.75)*10),2);
                        $sem4_perc = round((($sem4 - 0.75)*10),2);
                        $sem5_perc = round((($sem5 - 0.75)*10),2);

                        $data .=(
                            '<div>
                                <h1>TO WHOMSOEVER IT MAY CONCERN</h1>
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
                                </table>
                                    <p style = "text-align:center;"><span>Percentage =(CGPA-0.75	)x10</span></p>
                            </div>'
                        );
                    }else if($toal_sem==6){
                        $sem1 = $_POST['sem1'];
                        $sem2 = $_POST['sem2'];
                        $sem3 = $_POST['sem3'];
                        $sem4 = $_POST['sem4'];
                        $sem5 = $_POST['sem5'];
                        $sem6 = $_POST['sem6'];
                        $sem1_perc = round((($sem1 - 0.75)*10),2);
                        $sem2_perc = round((($sem2 - 0.75)*10),2);
                        $sem3_perc = round((($sem3 - 0.75)*10),2);
                        $sem4_perc = round((($sem4 - 0.75)*10),2);
                        $sem5_perc = round((($sem5 - 0.75)*10),2);
                        $sem6_perc = round((($sem6 - 0.75)*10),2);

                        $data .=(
                            '<div>
                                <h1>TO WHOMSOEVER IT MAY CONCERN</h1>
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
                                        <td>'.$sem6_perc.'</td>
                                    </tr>
                                    <tr>
                                        <td>VI</td>
                                        <td>'.$sem6.'</td>
                                        <td>'.$sem6_perc.'</td>
                                    </tr>
                                </table>
                                    <p style = "text-align:center;"><span>Percentage =(CGPA-0.75	)x10</span></p>
                            </div>'
                        );
                    }else if($toal_sem==7){
                        $sem1 = $_POST['sem1'];
                        $sem2 = $_POST['sem2'];
                        $sem3 = $_POST['sem3'];
                        $sem4 = $_POST['sem4'];
                        $sem5 = $_POST['sem5'];
                        $sem6 = $_POST['sem6'];
                        $sem7 = $_POST['sem7'];
                        $sem1_perc = round((($sem1 - 0.75)*10),2);
                        $sem2_perc = round((($sem2 - 0.75)*10),2);
                        $sem3_perc = round((($sem3 - 0.75)*10),2);
                        $sem4_perc = round((($sem4 - 0.75)*10),2);
                        $sem5_perc = round((($sem5 - 0.75)*10),2);
                        $sem6_perc = round((($sem6 - 0.75)*10),2);
                        $sem7_perc = round((($sem7 - 0.75)*10),2);

                        $data .=(
                            '<div>
                                <h1>TO WHOMSOEVER IT MAY CONCERN</h1>
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
                                        <td>'.$sem6_perc.'</td>
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
                                </table>
                                    <p style = "text-align:center;"><span>Percentage =(CGPA-0.75	)x10</span></p>
                            </div>'
                        );
                    }else if($toal_sem==8){
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
                        $perc = round(($cgpa-0.75*10),2);
                            $data .=(
                                '<div>
                                        <h1>TO WHOMSOEVER IT MAY CONCERN</h1>
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
                    }else if($document==10){
                        $cur_ac_year = $_POST['curAcYear'];
                        $data .= (
                            '<div>
                                    <h1>TO WHOM SO EVER IT MAY CONCERN</h1>
                                <p>This is to certify that Mr/Ms. <span>'.$name.'</span> bearing USN: <span>'.$usn.'</span> is a bonafide student of this institution studying  <span>'.$year.'</span> year <span>B.E</span> in <span>'.$branch.'</span> during the academic year  <span>'.$cur_ac_year.'. </span></p>
                                <p>He has submitted his original SSLC & PU Marks card to this college at the time of admission and the same was sent to Visvesvaraya Technological University, Belagavi, for verification. However the Copy of the original Marks Card is Attested.</p>
                            </div>');
                }

   
    $mpdf->WriteHTML($stylesheet,1);
    $mpdf->WriteHtml($data);

    $mpdf->output();   
    

}

?>
