const completionYear = document.getElementById('completionYear');
const startYear = document.getElementById('startYear');
const college = document.getElementById('college');
const year = document.getElementById('year');
const curAcYear = document.getElementById('curAcYear');
const sem = document.getElementById('sem');
const btn_sbt = document.getElementById('btn_sbt');
const doc = document.getElementById('doc');
const form = document.getElementById('form');
const inSgpa = document.getElementById('inSgpa');
const courseCompYear = document.getElementById('courseCompYear');

const alert = document.getElementById('alert');

form.onsubmit = ()=>{
    alert.style.display = "block";
}

const hide = ()=>{
    completionYear.style.display = "none";
    startYear.style.display = "none";
    sem.style.display = "none";
    college.style.display = "none";
    btn_sbt.style.display = "none";
    inSgpa.style.display = "none";
    courseCompYear.style.display = "none";
}
hide();

doc.onchange =  display = ()=>{
    const doc = document.getElementById('doc').value;
    if(doc==0 || doc==1 || doc==9){
        hide();
        curAcYear.required = true;
        year.required = true;
        btn_sbt.style.display = "block";
    }else if(doc==3){
        
        completionYear.style.display = "block";
        startYear.style.display = "block";
        startYear.required = true;
        completionYear.required = true;

        btn_sbt.style.display = "block";
        
    }else if(doc==4  || doc==2){
      
        completionYear.style.display = "block";
        startYear.style.display = "block";
        btn_sbt.style.display = "block";
        startYear.required = true;
        completionYear.required = true;

    }else if(doc==5){
        hide();
        college.style.display = "block";
        btn_sbt.style.display = "block";
        curAcYear.required = true;
        year.required = true;
    }else if(doc==6){
        hide();
        btn_sbt.style.display = "block";
    }else if(doc==7){
        year.style.display = "none";
        courseCompYear.style.display = "block";
        inSgpa.style.display = "block";
        btn_sbt.style.display = "block";
        

    }
    else if(doc==8){
        year.style.display = "none";
        inSgpa.style.display = "block";
        btn_sbt.style.display = "block";
        

    }
  
      }
