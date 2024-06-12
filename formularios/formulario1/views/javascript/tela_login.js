var entradaSenha = document.getElementById("idsenha");
var icone_olho = document.getElementById("icone_olho");

function mostrarSenha() {
  if (entradaSenha.type === "password") {
    entradaSenha.setAttribute("type", "text");
    icone_olho.classList.replace("bi-eye-fill", "bi-eye-slash-fill");
  } else {
    entradaSenha.setAttribute("type", "password");
    icone_olho.classList.replace("bi-eye-slash-fill", "bi-eye-fill");
  }
}

function limparCampos(){
if(entradaSenha.type=="text"){
mostrarSenha();

}

}