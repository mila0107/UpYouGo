<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Receber dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Incluir o arquivo de conexão ao banco de dados
    include 'ligaBD.php';

    // Verificar se é um login de empresa
    $query = "SELECT * FROM empresa WHERE email='$email' AND senha='$senha'";
    $result = mysqli_query(liga(), $query);

    if (mysqli_num_rows($result) > 0) {
        // Login bem-sucedido para empresa
        header("Location: ../html/interfaceEmp.html");
        exit();
    } else {
        // Verificar se é um login de aluno
        $query = "SELECT * FROM alunos WHERE email='$email' AND senha='$senha'";
        $result = mysqli_query(liga(), $query);

        if (mysqli_num_rows($result) > 0) {
            // Login bem-sucedido para aluno
            header("Location: /html/vagas.html");
            exit();
        } else {
            // Se chegou aqui, o login falhou
            echo "<script>alert('Login falhou. Verifique suas credenciais e tente novamente.');</script>";
            //Redirecionar para a página do formulário após mostrar a mensagem  
            echo "<script>window.location.href = '../html/formEst.html';</script>";
        }
    }
}
?>
