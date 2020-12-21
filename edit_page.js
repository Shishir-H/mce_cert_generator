const completionYear = document.getElementById('completionYear');
const startYear = document.getElementById('startYear');
const college = document.getElementById('college');
const year = document.getElementById('year');
const curAcYear = document.getElementById('curAcYear');
const sem = document.getElementById('sem');
const doc = document.getElementById('doc');
const inSgpa = document.getElementById('inSgpa');
const courseCompYear = document.getElementById('courseCompYear');
const total_sem = document.getElementById('total_sem');

const deg_awarded_on = document.getElementById('deg_awarded_on');

const loan_table = document.getElementById('loan_table');
const expenditure_table = document.getElementById('expenditure_table');
console.log(doc.value);

const hide=()=>{
    completionYear.style.display ="none";
    startYear.style.display ="none";
    curAcYear.style.display ="none";
    sem.style.display ="none";
    college.style.display ="none";
    courseCompYear.style.display ="none";
}
if(doc.value==0){
    hide();
}else if(doc.value==1){
    college.style.display = "none";
    courseCompYear.style.display="none";
    loan_table.style.display = "block";
    hide();
}else if(doc.value==3){

    sem.style.display ="none";
    college.style.display ="none";
    deg_awarded_on.style.display = "block";
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
    hide();

}else if(doc.value==8){
    hide();
    courseCompYear.style.display = "block";
    year.style.display = "none";
    inSgpa.style.display = "block";
}else if(doc.value==9){
    hide();
    inSgpa.style.display = "block";
    total_sem.required = true;
}
