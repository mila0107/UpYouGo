<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar se o email foi enviado
    if (isset($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email = $_POST["email"];

        function gerarToken($tamanho = 32) {
            return bin2hex(random_bytes($tamanho));
        }

        // Gerar um token de redefinição de senha
        $token = gerarToken();
        $resetLink = "http://127.0.0.1:5500/html/forgotpass.html?token=" . $token;

        // Salve o token no banco de dados com o email do usuário e prazo de validade

        $to = $email;
        $subject = "Redefinição de Senha - Up You Go";
        $message = "Clique neste link para redefinir sua senha: $resetLink";
        $headers = "From: milennafidelis.pt@gmail.com"; // Seu endereço de email

        // Certifique-se de que o servidor está configurado corretamente para enviar emails
        if (mail($to, $subject, $message, $headers)) {
            echo "Email de redefinição enviado com sucesso. Verifique sua caixa de entrada.";
        } else {
            echo "Ocorreu um erro ao enviar o email. Por favor, tente novamente.";
        }
    } else {
        echo "Ocorreu um erro. Por favor, forneça um endereço de email válido.";
    }
}
?> -->
