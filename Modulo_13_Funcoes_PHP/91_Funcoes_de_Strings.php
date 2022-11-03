<?php

$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : ''; /*O isset é pq na primeira carregagem da página não está definida a variável cpf*/


echo 'Tamanho da string: ' . $total_string_cpf . '<br />';
$cpf = str_replace(".", "", $cpf); //substitui ponto por nada
echo $cpf . '<br />';
$cpf = str_replace("-", "", $cpf); //substitui '-' por nada
echo $cpf . '<br />';
$total_string_cpf = strlen($cpf);

if ($total_string_cpf != 11 && $cpf != '') {
	echo 'CPF invalido';
} else {
	echo 'Registrado';
}

?>

<form method="post" action="">

	<label>
		CPF:
		<input type="text" name="cpf">
	</label>

	<input type="submit" value="cadastrar">

</form>

<?php


//----------------------
echo '<br /> <br /> Agora usando a função: substr($texto, 0, 2)';

echo '$texto="abcdefghijk...';
$texto='abcdefghijk...';

echo '<br /> Agora usando a função: substr($texto, 0, 2): '.substr($texto, 0, 2);
echo '<br /> Agora usando a função: substr($texto, 2, 4): '.substr($texto, 2, 4);

//--------------------------------------------------------

?>
