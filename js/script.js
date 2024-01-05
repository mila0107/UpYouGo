/*Para caso o utilizador escolha a opção "Esqueci a senha"*/
function enviarEmail() {
  // Obtenha o valor do campo de email
  var email = document.getElementById("email").value;

  // Crie um objeto XMLHttpRequest
  var xhr = new XMLHttpRequest();

  // Especifica o método e a URL para a requisição
  xhr.open("POST", "/php/forgotpass.php", true);

  // Define o cabeçalho Content-Type
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  // Define a função de callback para lidar com a resposta do servidor
  xhr.onreadystatechange = function () {
      if (xhr.readyState == 4) {
          // Verifica se a solicitação foi concluída com sucesso (código 200)
          if (xhr.status == 200) {
              // Exibe a resposta do servidor (pode ser uma mensagem de sucesso ou erro)
              console.log(xhr.responseText);
          } else {
              console.error("Erro na requisição AJAX. Status: " + xhr.status);
          }
      }
  };

  // Envia a solicitação com os dados do formulário
  xhr.send("email=" + encodeURIComponent(email));
}


/*Para Confirmar a senha */
function verificarSenha() {
  var senha = document.getElementById('senha').value;
  var senha2 = document.getElementById('senha2').value;

  if (senha === senha2) {
     
  } else {
      alert('Senhas não coincidem. Tente novamente.');
  }
}