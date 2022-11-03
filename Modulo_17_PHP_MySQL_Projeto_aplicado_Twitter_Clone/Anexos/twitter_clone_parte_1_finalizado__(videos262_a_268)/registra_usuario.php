<?php

require_once('bd.class.php');

//$_POST
//$_GET

$usuario	= $_POST['usuario'];
$email 		= $_POST['email'];
$senha		= md5($_POST['senha']); //md5 encripta a senha

$objBd = new bd();
$objBd->conecta_mysql();
//"usuarios" é o nome da tabela. Dentro dessa tabela tem os campos: usuario, email e senha
$sql = " insert into usuarios(usuario, email, senha)values('$usuario', '$email', '$senha') ";

if(mysql_query($sql)){
	echo 'Usuário foi registrado com sucesso!';
} else {
	echo 'Erro ao tentar inserir o registro';
}

?>
