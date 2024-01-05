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
	header("Location: ../html/vagas.html");
	exit();
}else{
	echo "<script>alert('Erro ao tentar registar utilizador!');</script>";
}

// $conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
//     die("Falha na conexão: ". $conn->connect_error);
// }

// $sql = "INSERT INTO users (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

// if ($conn->query($sql) === TRUE) {
//    header("Location: vagas.html");
//    echo "deu tudo certo";
//    exit;
// } else {
//     echo "Erro: " . $sql . $conn->error;
// }

// $conn->close();

// ?>








