<?php 

// Conexão com o banco de dados 


$servername = '';
$username = '';
$password = '';
$db_name = '';



$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
	echo "Erro na conexão: ".mysqli_connect_error();
endif;		



?>
