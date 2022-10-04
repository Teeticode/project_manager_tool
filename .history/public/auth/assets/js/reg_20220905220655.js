var nameError = document.getElementById("usname-error");
var emailError = document.getElementById("email-error");
var psdError = document.getElementById("password-error");
var psd2Error = document.getElementById("password2-error");
var submitError = document.getElementById("submit-error");

function validateName(){
    var name = document.getElementById("username").value;
    name = name.trim(' ');
    if(name.length == 0){
        nameError.innerHTML = "Name is required";
        return false;
    }
    if(name.length <= 2){
        nameError.innerHTML = "Name too short";
        return false;
    }
    if(name.length >= 8){
        nameError.innerHTML = "Name too long";
        return false;
    }
    nameError.innerHTML = '<i class="lni lni-checkmark-circle"></i>';
    return true;
}
function validateEmail(){
    var email = document.getElementById("email").value;
    email = email.trim(' ');
    if(email.length == 0){
        emailError.innerHTML = "Email is required";
        return false;
    }
    if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
        emailError.innerHTML = 'invalid';
        return false;
    }
    emailError.innerHTML = '<i class="lni lni-checkmark-circle"></i>';
    return true;
}
function validatePsd(){
    var psd = document.getElementById("psd").value;
    psd=psd.trim(' ');
    if(psd.length < 6){
        psdError.innerHTML = "password short";
        return false;
    }
    psdError.innerHTML = '<i class="lni lni-checkmark-circle"></i>';
    return true;
}
function validatePsd2(){
    var psd = document.getElementById("psd").value;
    var psd2 = document.getElementById("psd2").value;
    
    psd = psd.trim(' '); 
    psd2 = psd2.trim(' ');
    if(psd2 !== psd){
        psd2Error.innerHTML = "password dont match";
        return false;
    }
    if(psd2.length < 6){
        psd2Error.innerHTML = "Password short";
        return false;
    }
    psd2Error.innerHTML = '<i class="lni lni-checkmark-circle"></i>';
    return true;
}

function checkterm(){
    var check = document.getElementById("check");
    var checkerror = document.getElementById("check-error");
    if(check.checked===false){
        return checkerror.innerHTML = "please check terms";
        
    }
    return true;
}
function validateForm(){
    var check = document.getElementById("check");
    if(!validateName() || !validateEmail() || !validatePsd() || !validatePsd2() || !checkterm()){
        submitError.style.display = "block";
        submitError.innerHTML = "Please fix errors to submit";
        setTimeout(function(){submitError.style.display="None"}, 3000)
        
        return false;
    }

    
    
}
function setterm(){
    var term = document.getElementById("term");
    var check = document.getElementById("check");
    if(check.checked == false){
        check.checked=true;
        
    }else{
        check.checked = false;
    }
    console.log(check.checked)
    
    

}