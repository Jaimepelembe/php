function validateTextField(id) {
  var textField = document.getElementById(id);
  const value = textField.value;
  if (value == null || value == "" || /^\s+$/.test(value)) {
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
 * Shows a error in a modal
 * @param message The message showed in the modal
 *
 */
function showError(message) {
  const messageAlert = document.getElementById("messageAlert");
  messageAlert.innerText = message;

  const modal = document.getElementById("modal");
  modal.showModal();
}

/*Close modal */
function closeModal(modalId) {
  const modal = document.getElementById(modalId);
  modal.close();
}
