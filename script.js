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
const hide = ()=>{
    completionYear.style.display = "none";
    startYear.style.display = "none";
    sem.style.display = "none";
    curAcYear.style.display = "none";
    year.style.display = "none";
    college.style.display = "none";
    btn_sbt.style.display = "none";
    inSgpa.style.display = "none";
}
hide();

btn_sbt.onclick = ()=>{
    form.submit();
    form.reset();
}
doc.onchange =  display = ()=>{
    const doc = document.getElementById('doc').value;
    if(doc==1 || doc==2){
        hide();
        btn_sbt.style.display = "block";
    }else if(doc==3){
        
        completionYear.style.display = "block";
        startYear.style.display = "block";
        startYear.required = true;
        completionYear.required = true;

        btn_sbt.style.display = "block";
        
    }else if(doc==4){
      
        completionYear.style.display = "block";
        startYear.style.display = "block";
        btn_sbt.style.display = "block";
        startYear.required = true;
        completionYear.required = true;

    }else if(doc==5){
        hide();
        curAcYear.style.display = "block";
        year.style.display = "block";
        btn_sbt.style.display = "block";

        curAcYear.required = true;
        year.required = true;
    }else if(doc==6){
        hide();
        btn_sbt.style.display = "block";
    }else if(doc==7 || doc==8 ){
        inSgpa.style.display = "block";
        btn_sbt.style.display = "block";
        

    }
  
      }



// display();