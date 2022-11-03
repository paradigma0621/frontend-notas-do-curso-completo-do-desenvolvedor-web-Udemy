<?php

/*Formatação da função date():
Y - 2019
y - 19

m - mes

d - dia

h - horas (0hr->12hr)

H - horas (0hr->24hr)

i - minutos  (pois o m já foi reservado para mês)

Pode ser que a hora aparece diferente do nosso relógio. É por causa do timezone do servidor de PHP.

*/
echo date("d/m/Y");
echo '<br />';

echo date("d-m-Y");
echo '<br />';

echo date("Y-m-d");
echo '<br />';

echo date("d/m/Y H:i");
echo '<br />';

//-----------------------------------------
echo 'Cálculo para datas:';
echo '<br />';

$data_inicial = '2015-04-02';
$data_final = '2015-04-09';

$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);
echo '2015-04-02: data em segundos: ' . $time_inicial; //mostra a data em segundos
echo '<br />';

$diferenca_time = $time_final - $time_inicial;
echo 'A diferenca de time é: ' . $diferenca_time;

echo '<br />';

//-----------------

$dia_segundos = 24*60*60;
$diferenca_dias = $diferenca_time / $dia_segundos;
echo 'Dias de diferenca: '. $diferenca_dias;

?>
