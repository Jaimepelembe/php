function validateTextField(id) {
  var textField = document.getElementById(id);
  const value = textField.value;
  if (value == null || value == "" || /^\s+$/.test(value)) {
    const message = "Por favor, preencha o campo " + textField.getAttribute("name");
    showError(message);
  }
}

function validateName(name) {}

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
