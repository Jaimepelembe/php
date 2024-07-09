/**
 * Shows or hidden the password of a password field
 * @param id The id of the element
 */
function showPassword(id) {
  var userPassword = document.getElementById(id);
  var iconEye = document.getElementById("iconEye");
  if (userPassword.type === "password") {
    userPassword.setAttribute("type", "text");
    iconEye.classList.replace("bi-eye-fill", "bi-eye-slash-fill");
  } else {
    userPassword.setAttribute("type", "password");
    iconEye.classList.replace("bi-eye-slash-fill", "bi-eye-fill");
  }
}

/**
 * Clean the content of a textField or textArea
 * @param id The id of the element
 */
function cleanTextField(id) {
  var textField = document.getElementById(id);
  textField.value = "";
}
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

/*
var form = document.getElementById("formSignup");

form.addEventListener("submit", function (event) {
  event.preventDefault(); //Prevent the form to being sent

  if (validateTheLogin()) {
    this.submit();
  } else {
    const message = "Formulário não enviado.";
    showError(message);
    alert("Formulário não enviado.");
  }
});*/
