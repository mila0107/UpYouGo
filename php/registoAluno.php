<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telemovel = $_POST['telemovel'];
$distrito = $_POST['distrito'];
$senha = $_POST['senha'];

include 'ligaBD.php';
$query = "INSERT INTO alunos(nome, email, telemovel, distrito, senha) VALUES('$nome','$email','$telemovel','$distrito', '$senha')";
if(registaUser($query)){
	echo "<script>alert('Registo bem sucedido!');</script>";
	header("Location: /html/vagas.html");
	exit();
}else{
	echo "<script>alert('Erro ao tentar registar utilizador!');</script>";
}
// Exibir algum erro
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>








