<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PHP</title>

	</head>

	<body>
		

<?php
	//Função sem retorno
	function primeira_funcao() {
		$a='abc <br \>';
		echo $a;
	}

	//Função com retorno
	function calcula_soma(){
		return 5+3;
	}

	//Função sem retorno
	primeira_funcao();

	//função que tem retorno:
	echo calcula_soma(); 	//ou: var $soma = calcula_soma(); 
	echo '<br />';

//-----------------------------------------------------------------------

	function exibir_boas_vindas($nome) {
		echo '<br /> Bem vindo ao curso de php, '.$nome;
	}

	exibir_boas_vindas('João Pedro');
	echo '<br />';
//-----------------------------------------------------------------------
	//Aqui é definida um valor default caso não seja passado nenhum parâmetro
	function exibir_profissao($profissao='trabalhador') { 
		echo '<br /> Você atua como '.$profissao;
	}

	 exibir_profissao('programador');

	echo '<br /> <br />  Abaixo usamos o valor de parâmetro default da função:';
	 exibir_profissao(); 
	

?>


	</body>
</html>
