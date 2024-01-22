<?php

require_once __DIR__. '/funcao.php';
require_once __DIR__. '/continuar.php';
require_once __DIR__. '/variaveis.php';
require_once __DIR__. '/linhaxcoluna.php';
require_once __DIR__. '/readMatriz.php';

do {


echo "Calculo entre duas matrizes. \n \n ";
//quadrada ou não quadrada


$matriz0 = linhaxcoluna(); //perguntar linha e coluna
$num0 = readMatriz();
$matriz1 = linhaxcoluna();
$num1 = readMatriz();




echo resultado();
$continuar = continuar();


} while ($continuar === true);
?>