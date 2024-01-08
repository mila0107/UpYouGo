// Para Confirmar a senha 
function verificarSenha() {
  var senha = document.getElementById('senha').value;
  var senha2 = document.getElementById('senha2').value;

  if (senha === senha2) {
     
  } else {
      alert('Senhas não coincidem. Tente novamente.');
        document.getElementById('senha').classList.add('senha-nao-coincide');
        document.getElementById('senha2').classList.add('senha-nao-coincide');
  }
}