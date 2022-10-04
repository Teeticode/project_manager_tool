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
    emailError.innerHTML = '<i class="lni lni-checkmark-circle"></i>';
    return true;
}
function validatePsd(){
    var psd = document.getElementById("psd").value;
    psd=psd.trim(' ');
    if(psd.length < 6){
        psdError.innerHTML = "password too short";
        return false;
    }
    psdError.innerHTML = '<i class="lni lni-checkmark-circle"></i>';
    return true;
}
function validatePsd2(){
    var psd2 = document.getElementById("psd2").value;
    var psd = document.getElementById("psd").value;
    psd = psd.trim(' '); 
    psd2 = psd2.trim(' ');
    if(psd2 === psd){
        psd2Error.innerHTML = "password dont match";
        return false;
    }
    psd2Error.innerHTML = '<i class="lni lni-checkmark-circle"></i>';
    return true;
}

