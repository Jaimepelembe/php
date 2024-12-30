function validateSearchContact() {
    if (validateTextFieldSize("searchBox", 2, 40)) {
      return true;
    } else {
      return false;
    }
  }
  