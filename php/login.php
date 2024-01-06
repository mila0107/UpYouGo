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
        header("Location: /html/interfaceEmp.html");
        exit();
    }

    // Verificar se é um login de aluno
    $query = "SELECT * FROM alunos WHERE email='$email' AND senha='$senha'";
    $result = mysqli_query(liga(), $query);

    if (mysqli_num_rows($result) > 0) {
        // Login bem-sucedido para aluno
        header("Location: /html/vagas.html");
        exit();
    }

    // Verificar se é um login de instituição
    $query = "SELECT * FROM instituicoes WHERE email='$email' AND senha='$senha'";
    $result = mysqli_query(liga(), $query);

    if (mysqli_num_rows($result) > 0) {
        // Login bem-sucedido para instituição
        header("Location: /html/paginaInstituicao.html");
        exit();
    }

    // Se chegou aqui, o login falhou
    echo "<script>alert('Login falhou. Verifique suas credenciais e tente novamente.');</script>";
    // Redirecionar para a página do formulário após mostrar a mensagem  
    echo "<script>window.location.href = '../html/formEst.html';</script>";
}

// Exibir algum erro
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
