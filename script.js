function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}
function togglePassword() {
    var passwordInput = document.getElementById("password");
    var checkBox = document.getElementById("showPassword");

    if (checkBox.checked) {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}