<?php

if (isset($_POST['nome'], $_POST['email'],$_POST['senha'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    include 'ligaBD.php';

    $query = "INSERT INTO instituicao(nome, email, senha) VALUES('$nome','$email', '$senha')";
    
    if (registaUser($query)) {
        echo "<script>alert('Registo bem sucedido!');</script>";
        echo "<script>window.location.href = '../html/interfaceInst.html';</script>";
        exit();
    } else {
        echo "<script>alert('Erro ao tentar registar utilizador!');</script>";
    }
} else {
    echo "<script>alert('Todos os campos do formulário devem ser preenchidos! INSTITUICAO');</script>";
    echo "<script>window.location.href = '../html/cadInst.html';</script>";
}

?>
