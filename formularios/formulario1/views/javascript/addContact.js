function cleanAdditionFields() {
  cleanTextField("userName");
  cleanTextField("phoneNumber");
  cleanTextField("email");
}

function validateAddition() {
  if (
  validateTextFieldSize("userName", 2, 40) &&
  validatePhoneNumber("phoneNumber") &&
    validateEmail("email")
  ) {
    alert("submeti")
    return true;
  } else {
    return false;
  }
}
