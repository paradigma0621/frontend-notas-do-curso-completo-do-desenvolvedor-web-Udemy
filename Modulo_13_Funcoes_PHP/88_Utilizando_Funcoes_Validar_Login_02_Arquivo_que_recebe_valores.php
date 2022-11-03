<?php

	require_once("88_Utilizando_Funcoes_Validar_Login_03_Funcao_Valida_Login.php");
	$login_usuario = $_POST['login'];
	$senha_usuario = $_POST['senha'];

	$usuario_validado = valida_login($login_usuario, $senha_usuario);

	if ($usuario_validado) {
		echo 'Usuário logado';
	} else {
		echo 'Acesso negado';
	}
	

?>

