var buttonLogin=document.getElementById("buttonLogin");
var buttonSignup=document.getElementById("buttonSignup");

buttonLogin.addEventListener("click",function(event){
window.location.href="../views/login.php";
});

buttonSignup.addEventListener("click",function(event){
window.location.href="../views/signup.php";
});
