<?php 

// Sessão
session_start();

// Conexão com o BD 
require_once 'db_connect.php';

// Função clear
function clear ($input){
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);

	return $var; 
}


if(isset($_POST['btn-editar'])){
	$nome = clear($_POST['nome']);
	$sobrenome = clear($_POST['sobrenome']);
	$email = clear($_POST['email']);
	$idade = clear($_POST['idade']);
    $id = clear($_POST['id']);

	$sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)){
		$_SESSION['mensagem'] = 'Atualizado com sucesso';
		header('Location: ../index.php');
	} else {
		$_SESSION['mensagem'] ='Ocorreu um erro ao atualizar';
		header ('Location: ../index.php');
	}

}

