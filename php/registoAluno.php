<?php

if (isset($_POST['nome'], $_POST['email'], $_POST['telemovel'], $_POST['distrito'], $_POST['senha'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telemovel = $_POST['telemovel'];
    $distrito = $_POST['distrito'];
    $senha = $_POST['senha'];

    include 'ligaBD.php';

    $query = "INSERT INTO alunos(nome, email, telemovel, distrito, senha) VALUES('$nome','$email','$telemovel','$distrito', '$senha')";
    
    if (registaUser($query)) {
        echo "<script>alert('Registo bem sucedido!');</script>";
        echo "<script>window.location.href = '../html/vagas.html';</script>";
        exit();
    } else {
        echo "<script>alert('Erro ao tentar registar utilizador!');</script>";
    }
}else {
    echo "<script>alert('Todos os campos do formulário devem ser preenchidos!');</script>";
    echo "<script>window.location.href = '../html/cadEst.html';</script>";
}

?>
