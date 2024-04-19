


var nameErro=document.getElementById('name-erro');
var emailErro=document.getElementById('email-erro');
var phoneErro=document.getElementById('phone-erro');
var passErro=document.getElementById('pass-erro');
var cpassErro=document.getElementById('cpass-erro');
var submitErro=document.getElementById('submit-erro');




function validateName(){
  var name=document.getElementById('username').value;

if(name.length==0){
   nameErro.innerHTML='required'; 
   return false;
}
nameErro.innerHTML='<i class="fa-solid fa-circle-check"></i>';
return true;

}
/*function validateEmail(){

  var mail=document.getElementById('email').value;

  var regx=/^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+.([a-z]+)(.[a-z]+)?$/
  if(regx.text(mail)){
    emailErro.innerHTML='<i class="fa-solid fa-circle-check"></i>';
    
    return true;
  }
  emailErro.innerHTML='required'; 
  
return false;
}
*/

function validatePhone(){
var phone=document.getElementById('number').value;

if(phone.length == 0){
phoneErro.innerHTML='required';
return false;
}

if(phone.length != 10){
phoneErro.innerHTML='invalid number';
return false;
}
if(isNaN(phone)){
phoneErro.innerHTML='invalid format';
return false;
}
phoneErro.innerHTML='<i class="fa-solid fa-circle-check"></i>';
return true;

}

function validatePass(){

var pass=document.getElementById('password').value;

if(pass.length==0){
  passErro.innerHTML='required';
  return false;
}
passErro.innerHTML='<i class="fa-solid fa-circle-check"></i>';
return true;


}
function validateCpass(){
var cpass=document.getElementById('cpassword').value;
var pass=document.getElementById('password').value;
if(cpass!=pass){
  cpassErro.innerHTML='invalid';
  return false;
}
cpassErro.innerHTML='<i class="fa-solid fa-circle-check"></i>';
return true;


}


function validate(){
if(!validateName() || !validateEmail() || !validatePhone() || !validatePass() || !validateCpass()){
    
  submitErro.style.display='inline';
  
  submitErro.innerHTML='please fix error to submit';
     setTimeout(function(){submitErro.style.display= 'none';}, 3000);
     return false;
}

}



