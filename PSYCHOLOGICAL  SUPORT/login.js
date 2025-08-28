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
    }
   
    if(inputs[0].value!=''&&inputs[1].value!=''){
        window.location.href="home.html"
    }
}
for (let j = 0; j < inputs.length; j++) {
    inputs[j].onkeydown=()=>{
   labels[j].innerHTML=""
    }
    
}
