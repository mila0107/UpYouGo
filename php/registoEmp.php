<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$nif = $_POST['nif'];
$telemovel = $_POST['telemovel'];
$distrito = $_POST['distrito'];
$senha = $_POST['senha'];

include 'ligaBD.php';
$query = "INSERT INTO empresa(nome, email, nif, telemovel, distrito, senha) VALUES('$nome','$email', '$nif', '$telemovel','$distrito', '$senha')";
if(registaUser($query)){
	header("Location: interfaceEmp.html");
    exit();
}else{
	echo "<script>alert('Erro ao tentar registar Empresa!');</script>";
}

?>