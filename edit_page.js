const completionYear = document.getElementById('completionYear');
const startYear = document.getElementById('startYear');
const college = document.getElementById('college');
const year = document.getElementById('year');
const curAcYear = document.getElementById('curAcYear');
const sem = document.getElementById('sem');
const doc = document.getElementById('doc');
const inSgpa = document.getElementById('inSgpa');
const courseCompYear = document.getElementById('courseCompYear');

const loan_table = document.getElementById('loan_table');
const expenditure_table = document.getElementById('expenditure_table');
const total_sem = document.getElementById('totalSem');
console.log(doc.value);



if(doc.value==1){
    college.style.display = "none";
    courseCompYear.style.display="none";
    loan_table.style.display = "block";
}else if(doc.value==6){
    expenditure_table.style.display = "block";
}else if(doc.value==8 || doc.value==7){
    inSgpa.style.display = "block";
}
