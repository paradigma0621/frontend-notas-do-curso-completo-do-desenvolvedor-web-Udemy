

<?php

require_once("87_Utilizando_Funcoes_02_Funcao_Desconto.php"); //Isso irá como que inserir o referido arquivo neste ponto do código

$valor_total=800;
$desconto=10;
$valor_total_com_desconto=0;



$valor_total_com_desconto = calcula_desconto($valor_total, $desconto);

?>

Valor Total: R$ <?php echo $valor_total ?> <br>
Valor Desconto: R$ <?php echo $desconto ?>% <br>
Valor Total com desconto: R$ <?php echo $valor_total_com_desconto ?> <br>
