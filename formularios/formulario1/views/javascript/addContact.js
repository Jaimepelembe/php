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
    return true;
  } else {
    return false;
  }
}

removeElementInInterval("alert",4000);//Removes the alert in a interval of 4 seconds