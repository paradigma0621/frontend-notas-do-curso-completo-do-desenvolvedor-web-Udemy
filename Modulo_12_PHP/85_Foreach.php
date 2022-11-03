<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Catálogo de produtos</title>

	</head>

	<body>
		

<?php
	$produtos[1] = 'sofá';
	$produtos[2] = 'mesa';
	$produtos[3] = 'cadeira';
	$produtos[4] = 'geladeira';
	$produtos[5] = 'fogão';


	echo '<br />';

	foreach ($produtos as $item) {
		echo $item . '<br />';
		
		if ($item == 'cadeira') {
			echo '   As cadeiras estão em oferta <br \>';
		}
	}

?>


	</body>
</html>
