let inputs=document.querySelectorAll('.inputs');
let labels=document.querySelectorAll('.labels');
let sub =document.getElementById("sub");
sub.onclick=()=>{
   
    for(let i =0;i<inputs.length;i++){
        if(inputs[i].value==""){
            labels[i].innerHTML=`invalid ${inputs[i].name}`
            break;
        }
        else if(inputs[i].value!=""){
            labels[i].innerHTML="";
        }
        if(i==2&&inputs[2].value.includes('@')==false){
            labels[i].innerHTML=`invalid email`
            break;
        }
        if(i==4&&inputs[4].value!=inputs[3].value){
            labels[i].innerHTML=`Confirming Password is diffrent`
        }
    }
   
    if(inputs[0].value!=''&&inputs[1].value!=''&&inputs[2].value!=''&&inputs[3].value!=''&&inputs[3].value==inputs[4].value&&inputs[2].value.includes('@')==true){
        window.location.href="main.html";
    }
    
    
    
}
for (let j = 0; j < inputs.length; j++) {
    inputs[j].onkeydown=()=>{
   labels[j].innerHTML=""
    }
    
}

