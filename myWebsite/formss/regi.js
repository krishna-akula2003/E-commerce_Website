// validation.js
function validateForm() {
    var mobileNumber = document.forms["registrationForm"]["number"].value;
    var password1 = document.forms["registrationForm"]["password1"].value;
    var password2 = document.forms["registrationForm"]["password2"].value;
    if (mobileNumber.length != 10) {
        alert("Mobile number must be exactly 10 digits.");
        return false;
    }
    var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    if (!strongRegex.test(password1)) {
        alert("Password must be strong. It should contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character.");
        return false;
    }
    if (password1 != password2) {
        alert("Passwords do not match.");
        return false;
    }
    return true;
}
