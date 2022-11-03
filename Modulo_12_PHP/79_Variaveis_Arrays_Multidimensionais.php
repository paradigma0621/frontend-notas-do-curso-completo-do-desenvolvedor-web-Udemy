<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Titulo</title>
	</head>

	<body>

	<?php
		$tabuleiro_xadrez[8]['a']='torre preta';

		$tabuleiro_xadrez[8]['b']= 'cavalo preto';
//(...)
		$tabuleiro_xadrez[7]['a']='peao preto';
		$tabuleiro_xadrez[7]['b']='peao preto';
//(...)
		$tabuleiro_xadrez[1]['h']='torre branca';
//-----------------------
//Podemos ter arrays tridimensionais:
$novoArrayTrid[8]['a'] = array();
//-----------------------
print_r($tabuleiro_xadrez);
//impressão de array nã funciona com print

print('<br /> mostrando apenas 1 elemento: '. $tabuleiro_xadrez[1]['h']);


?>

	</body>
</html>
