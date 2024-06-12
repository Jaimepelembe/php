// Função para converter tempo para segundos
function converterParaSegundos() {
    const horas = parseInt(document.getElementById('horas').value);
    const minutos = parseInt(document.getElementById('minutos').value);
    const segundos = parseInt(document.getElementById('segundos').value);

    const totalEmSegundos = (horas * 3600) + (minutos * 60) + segundos;

    alert(`O total convertido em segundos é: ${totalEmSegundos}`);
}

// Adicionar evento onclick 
document.getElementById('buttonCalcular').addEventListener('click', converterParaSegundos);