<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>

	<?php

		$variavel_1 = 'Feijao';
		$lista_de_compras[1]= 'Feijao';
		$lista_de_compras[2]= 'Arroz';
		$lista_de_compras[3]= 'Café';
		$lista_de_compras[4]= 'Batata';

//OU:
$lista_de_compras2 = array(1 => 'Feijao2', 2 => 'Arroz2', 3 => 'Café2', 4 => 'Batata2');

//Podemos usar também indexadores com palavras

	$outra_lista['valor1'] ='valorPorPalavra1';
	$outra_lista['valor2'] ='valorPorPalavra2';
//OU:
$outra_lista2 = array(
		'celula1' => 'Feijao3', //tb pode pode por diversos tipos de var no mesmo array
		'celula2' => true, 
		1 => $lista_de_compras[4], 
		4 => 'Batata3',
		5 => -2.1 
		);

#echo $lista_de_compras; AP: retorna erro (AP: print tb?)
var_dump($lista_de_compras);
echo '<br />';
print_r($lista_de_compras2);
echo '<br /> Mostrarei com echo apenas um elemento do array: ';	  
echo $lista_de_compras[3];	
echo '<br /> Mostrarei com print apenas um elemento do array: ';	  
print $lista_de_compras2[3];
echo '<br />';
echo '<br /> Mostrarei um elemento do array indexado por palavra: <br />';
var_dump($outra_lista);

echo '<br />';
echo '<br /> Mostrarei um elemento do array indexado por palavra e numeros de vários tipos de dados: <br />';
var_dump($outra_lista2);
?>

	</body>
</html>
