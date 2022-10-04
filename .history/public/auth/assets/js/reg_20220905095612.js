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
    nameError.innerHTML = 'valid';
    return true;
}

