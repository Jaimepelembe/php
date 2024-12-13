function validateTextField(id) {
  var textField = document.getElementById(id);
  const value = textField.value;
  if (value == null || value == "") {
    const message =
      "Por favor, preencha o campo " + textField.getAttribute("name");
    showError(message);
    textField.focus();
    return false;
  }
  return true;
}

/**
 * Validate the size of a text in a textField or textArea
 * @param id The id of the textField or textArea
 * @param minimum The minimum lenght of the text
 * @param  maximum The maximum lenght of the text
 * @returns True if the size is valid or False otherwise
 */
function validateTextFieldSize(id, minimum, maximum) {
  var textField = document.getElementById(id);
  var value = textField.value;

  if (!validateTextField(id)) {
    return false;
  }

  if (value.length < minimum) {
    const message =
      textField.getAttribute("name") +
      " deve ter no mínimo " +
      minimum +
      " caracteres.";
    showError(message);
    textField.focus();
    return false;
  }

  if (value.length > maximum) {
    const message =
      textField.getAttribute("name") +
      " deve ter no máximo " +
      maximum +
      " caracteres.";
    showError(message);
    textField.focus();
    return false;
  }
  return true;
}

/**
 * Verify if the text of a textField or textArea is numerical
 * @param id The id of the textField or textArea
 * @returns True if the text is numerical or False otherwise
 */
function validateNumericalField(id) {
  var textField = document.getElementById(id);
  var value = textField.value;
  if (isNaN(value)) {
    const message = "O campo ";
    textField.getAttribute("name") + " só deve ter números.";
    showError(message);
    textField.focus();
    return false;
  }
  return true;
}

/**
 * Verify if at least one item was selected in a selectField or combo box
 * @param id The id of the selectField or combo box
 *
 *
 */
function validateSelectField(id) {
  var selectField = document.getElementById(id);
  var index = selectField.selectedIndex;
  if (index == null || index < 0) {
    const message = "Selecione pelo menos um ";
    selectField.getAttribute("name");
    showError(message);
    selectField.focus();
    return false;
  }
  return true;
}

/**
 * Verify if at least one item was checked in a checkbox
 * @param id The id of the checkbox
 *
 *
 */
function validateCheckboxField(id) {
  var checkbox = document.getElementById(id);
  if (!checkbox.checked) {
    const message = "Selecione pelo menos um ";
    checkbox.getAttribute("name");
    showError(message);
    checkbox.focus();
    return false;
  }
  return true;
}

/**
 * Verify if at least one item was selected in a Radio button
 * @param id The id of the Radio button
 *
 *
 */
function validateRadioButtonFields(id) {
  var radioButtonOptions = document.getElementsByName(id);
  var selected = false;
  for (var i = 0; i < radioButtonOptions.length; i++) {
    if (radioButtonOptions[i].checked) {
      selected = true;
      break;
    }
  }

  if (!selected) {
    var radioButton = document.getElementById(id);
    const message = "Selecione pelo menos um ";
    radioButton.getAttribute("name");
    showError(message);
    radioButton.focus();
    return false;
  }
  return true;
}

/**
 * Verify if a phone number is valid using the format 8[2-7]XXXXXXX
 * @param id The id of the textField
 *@returns True if the number is valid and False otherwise
 *
 */
function validatePhoneNumber(id) {
  var textField = document.getElementById(id);
  var phoneNumber = textField.value;
  if (!validateTextField(id)) {
    return false;
  } else {
    var regularExpression = /^8[2-7]\d{7}$/;
    if (regularExpression.test(phoneNumber)) {
      return true;
    } else {
      const message =
        "O formato do número está incorreto. <br> <br> Deve ser 8[2-7]XXXXXXX ";
      showError(message);
      textField.focus();

      return false;
    }
  }
}

/**
 * Verify if the email is valid using the format
 * @param id The id of the textField
 *@returns True if the email is valid and False otherwise
 *
 */
function validateEmail(id) {
  var textField = document.getElementById(id);
  var email = textField.value;
  var regularExpression =
    /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})$/;

  if (!validateTextField(id)) {
    return false;
  } else {
    if (regularExpression.test(email)) {
      return true;
    } else {
      const message =
        "O formato do email está incorreto. <br> <br> Deve ser exemplo@dominio.com";
      showError(message);
      textField.focus();
      return false;
    }
  }
}

/**
 * Shows a error in a modal
 * @param message The message showed in the modal
 *
 */
function showError(message) {
  const messageAlert = document.getElementById("messageAlert");
  messageAlert.innerHTML = message;

  const modal = document.getElementById("modal");
  modal.showModal();
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
 * Clean the content of textFields or textAreas of the same class
 * @param {*} className The name of the class
 */
function cleanFieldsByClassName(className) {
  var listFields = document.getElementsByClassName(className);
  if (listFields != null) {
    for (i = 0; i < listFields.length; i++) {
      listFields[i].value = "";
    }
  }
}

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

/*Close modal */
function closeModal(modalId) {
  const modal = document.getElementById(modalId);
  modal.close();
}

/****The alert****/

/**
 * Hidden a element setting his display to none
 * @param id The id of the element
 */
function hiddenElement(id) {
  var element = document.getElementById(id);
  element.style.display = "none";
}

/**
 * Removes a element from the html body
 * @param {*} id The id of the element
 */
function removeElement(id) {
  var element = document.getElementById(id);
  if (element != null) {
    element.remove(element);
  }
}

/**
 * Removes a element in a interval
 * @param {*} id The id of the element
 * @param {*} interval The interval in milliseconds
 */
function removeElementInInterval(id, interval) {
  setTimeout(function () {
    removeElement(id);
  }, interval);
}

removeElementInInterval("alert", 4000); //Removes the alert in a interval of 4 seconds
