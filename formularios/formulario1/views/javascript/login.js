
/**
 * Verify if all the inputs of the login are valid
 * @returns True if they are valid or false otherwise
 *
 */
function validateTheLogin() {
  if (
    validateTextFieldSize("userName", 2, 40) &&
    validateTextFieldSize("userPassword", 4, 255)
  ) {
  
    return true;
  }
  return false;
}

function cleanFields() {
  cleanTextField("userName");
  var userPassword = document.getElementById("userPassword");

  if (userPassword == null) {
    //showPassword();
    userPassword.setAttribute("type", "password");
    iconEye.classList.replace("bi-eye-slash-fill", "bi-eye-fill");
  } else {
    if (userPassword.type === "text") {
      userPassword.setAttribute("type", "password");
      iconEye.classList.replace("bi-eye-slash-fill", "bi-eye-fill");
      cleanTextField("userPassword");
    } else {
      cleanTextField("userPassword");
    }
  }
}
