var nameError = document.getElementById("username-error");
var emailError = document.getElementById("email-error");
var psdError = document.getElementById("password-error");
var psd2Error = document.getElementById("password2-error");
var submitError = document.getElementById("submit-error");

function validateName(){
    var name = document.getElementById("username").value;
    if(name.length == 0){
        nameError.innerHTML = "Name is required";
    }
}

