<?php

function liga(){
	$servername = 'localhost';
	$user = "root";
	$pass = "";
	$bd = 'upyougo';
	$liga = mysqli_connect($servername,$user,$pass,$bd);
	if($liga){
		return $liga;
	}else{
		echo "<script>alert('Erro ao tentar ligar à base de dados!');</script>";
		return null;
	}
}

function registaUser($query){
	$liga = liga();
	if($liga){
		if(mysqli_query($liga,$query)){
			mysqli_close($liga);
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
}

// Exibir algum erro
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>