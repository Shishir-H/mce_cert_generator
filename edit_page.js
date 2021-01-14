const completionYear = document.getElementById('completionYear');
const startYear = document.getElementById('startYear');
const college = document.getElementById('college');
const year = document.getElementById('year');
const curAcYear = document.getElementById('curAcYear');
const sem = document.getElementById('sem');
const doc = document.getElementById('doc');
const sgpa = document.getElementById('sgpa');
const courseCompYear = document.getElementById('courseCompYear');
const total_sem = document.getElementById('total_sem');
const cgpa = document.getElementById('cgpa');

const deg_awarded_on = document.getElementById('deg_awarded_on');

const loan_table = document.getElementById('loan_table');
const expenditure_table = document.getElementById('expenditure_table');
const semester_exp = document.getElementById('semester-exp');

const gt_in_words = document.getElementById('gt_in_words');

const hide=()=>{
    completionYear.style.display ="none";
    startYear.style.display ="none";
    curAcYear.style.display ="none";
    sem.style.display ="none";
    college.style.display ="none";
    courseCompYear.style.display ="none";
    cgpa.style.display ="none";
}
if(doc.value==0){
    hide();
}else if(doc.value==1){
    college.style.display = "none";
    courseCompYear.style.display="none";
    expenditure_table.style.display = "block";
 
    hide();
}else if(doc.value==3){

    sem.style.display ="none";
    college.style.display ="none";
    deg_awarded_on.style.display = "block";
    cgpa.style.display ="block";
    deg_awarded_on.required = true;
}else if(doc.value==4 || doc.value ==5){
    sem.style.display ="none";
    college.style.display ="none";
    completionYear.style.display ="none";
    courseCompYear.style.display = "none";
}else if(doc.value==6){
    sem.style.display ="none";
    startYear.style.display ="none";
    completionYear.style.display ="none";
    courseCompYear.style.display = "none";
}else if(doc.value==7){
    expenditure_table.style.display = "block";
    semester_exp.style.display = "block";
    semester_exp.required = true;
    console.log(semester_exp);
    hide();

}else if(doc.value==8){
    hide();
    courseCompYear.style.display = "block";
    year.style.display = "none";
    cgpa.style.display = "block";
}else if(doc.value==9){
    hide();
    sgpa.style.display = "block";
    total_sem.required = true;
}else if(doc.value==10){
    hide();
    
}
const getTotal=()=>{

    
   

    const tut_fee1 = document.getElementById('tut_fee1').value;
    const tut_fee2 = document.getElementById('tut_fee2').value;
    const tut_fee3 = document.getElementById('tut_fee3').value;
    const tut_fee4 = document.getElementById('tut_fee4').value;

    const ex_fee1 = document.getElementById('ex_fee1').value;
    const ex_fee2 = document.getElementById('ex_fee2').value;
    const ex_fee3 = document.getElementById('ex_fee3').value;
    const ex_fee4 = document.getElementById('ex_fee4').value;

    const corp_fee1 = document.getElementById('corp_fee1').value;
    const corp_fee2 = document.getElementById('corp_fee2').value;
    const corp_fee3 = document.getElementById('corp_fee3').value;
    const corp_fee4 = document.getElementById('corp_fee4').value;

    const book_fee1 = document.getElementById('book_fee1').value;
    const book_fee2 = document.getElementById('book_fee2').value;
    const book_fee3 = document.getElementById('book_fee3').value;
    const book_fee4 = document.getElementById('book_fee4').value;

    const acc_fee1 = document.getElementById('acc_fee1').value;
    const acc_fee2 = document.getElementById('acc_fee2').value;
    const acc_fee3 = document.getElementById('acc_fee3').value;
    const acc_fee4 = document.getElementById('acc_fee4').value;

    const lap_fee1 = document.getElementById('lap_fee1').value;
    const lap_fee2 = document.getElementById('lap_fee2').value;
    const lap_fee3 = document.getElementById('lap_fee3').value;
    const lap_fee4 = document.getElementById('lap_fee4').value;

    const proj_fee1 = document.getElementById('proj_fee1').value;
    const proj_fee2 = document.getElementById('proj_fee2').value;
    const proj_fee3 = document.getElementById('proj_fee3').value;
    const proj_fee4 = document.getElementById('proj_fee4').value;

    const tot_fee1_value = document.getElementById('tot_fee1_value');
    const tot_fee2_value = document.getElementById('tot_fee2_value');
    const tot_fee3_value = document.getElementById('tot_fee3_value');
    const tot_fee4_value = document.getElementById('tot_fee4_value');

  

    const total_fee1=parseInt(tut_fee1) + parseInt(ex_fee1) +  parseInt(book_fee1) + parseInt(lap_fee1) + parseInt(acc_fee1) + parseInt(proj_fee1)
    tot_fee1_value.value=total_fee1;

    const total_fee2=parseInt(tut_fee2) + parseInt(ex_fee2) +  parseInt(book_fee2) + parseInt(lap_fee2) + parseInt(acc_fee2) + parseInt(proj_fee2)
    tot_fee2_value.value=total_fee2;

    const total_fee3=parseInt(tut_fee3) + parseInt(ex_fee3) +  parseInt(book_fee3) + parseInt(lap_fee3) + parseInt(acc_fee3) + parseInt(proj_fee3)
    tot_fee3_value.value=total_fee3;

    const total_fee4=parseInt(tut_fee4) + parseInt(ex_fee4) + parseInt(book_fee4) + parseInt(lap_fee4) + parseInt(acc_fee4) + parseInt(proj_fee4)
    tot_fee4_value.value=total_fee4;
    if(year.value=='2nd'){
        tot_fee1_value.value='-';
      
    }else if(year.value=='3rd'){
        tot_fee1_value.value='-';
       tot_fee2_value.value='-';
    }else if(year.value=='4th'){
        tot_fee1_value.value='-';
        tot_fee1_value.value='-';
        tot_fee3_value.value='-';
    }

}

if(year.value=='2nd'){
    tut_fee1.value = '-';
    tut_fee1.readOnly = true;
    
    ex_fee1.value = '-';
    ex_fee1.readOnly = true;
   
 
    corp_fee1.value = '-';
    corp_fee1.readOnly = true;
 
 
    book_fee1.value = '-';
    book_fee1.readOnly = true;
 
 
    
    acc_fee1.value = '-';
     acc_fee1.readOnly = true;
    
    lap_fee1.value = '-';
     lap_fee1.readOnly = true;
 
    proj_fee1.value = '-';
    proj_fee1.readOnly = true;
 
 }else if(year.value=='3rd'){
     tut_fee1.value = '-';
     tut_fee2.value = '-';
     tut_fee1.readOnly = true;
     tut_fee2.readOnly = true;
 
    
    ex_fee1.value = '-';
    ex_fee2.value = '-';
    ex_fee1.readOnly = true;
    ex_fee2.readOnly = true;
 
 
    corp_fee1.value = '-';
    corp_fee2.value = '-';
    corp_fee1.readOnly = true;
    corp_fee2.readOnly = true;
 
    book_fee1.value = '-';
    book_fee2.value = '-';
    book_fee1.readOnly = true;
    book_fee2.readOnly = true;
    
    acc_fee1.value = '-';
    acc_fee2.value = '-';
    acc_fee1.readOnly = true;
    acc_fee2.readOnly = true;
    
    lap_fee1.value = '-';
    lap_fee2.value = '-';
    lap_fee1.readOnly = true;
    lap_fee2.readOnly = true;
 
    proj_fee1.value = '-';
    proj_fee2.value = '-';
    proj_fee1.readOnly = true;
    proj_fee2.readOnly = true;
 }else if(year.value=='4th'){
     tut_fee1.value = '-';
     tut_fee2.value = '-';
     tut_fee3.value = '-';
     tut_fee1.readOnly = true;
     tut_fee2.readOnly = true;
     tut_fee3.readOnly = true;
     
     ex_fee1.value = '-';
     ex_fee2.value = '-';
     ex_fee3.value = '-';
     ex_fee1.readOnly = true;
    ex_fee2.readOnly = true;
    ex_fee3.readOnly = true;
  
     corp_fee1.value = '-';
     corp_fee2.value = '-';
     corp_fee3.value = '-';
     corp_fee1.readOnly = true;
    corp_fee2.readOnly = true;
    corp_fee3.readOnly = true;
  
     book_fee1.value = '-';
     book_fee2.value = '-';
     book_fee3.value = '-';
     book_fee1.readOnly = true;
     book_fee2.readOnly = true;
     book_fee3.readOnly = true;
     
     acc_fee1.value = '-';
     acc_fee2.value = '-';
     acc_fee3.value = '-';
     acc_fee1.readOnly = true;
     acc_fee2.readOnly = true;
     acc_fee3.readOnly = true;
     
     lap_fee1.value = '-';
     lap_fee2.value = '-';
     lap_fee3.value = '-';
     lap_fee1.readOnly = true;
     lap_fee2.readOnly = true;
     lap_fee3.readOnly = true;
  
     proj_fee1.value = '-';
     proj_fee2.value = '-';
     proj_fee3.value = '-';
     proj_fee1.readOnly = true;
     proj_fee2.readOnly = true;
     proj_fee3.readOnly = true;
 }
