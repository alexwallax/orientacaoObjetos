<?php

require_once './Carro.class.php';

$gol = new Carro();

$gol->modelo = "Gol";
$gol->cor = "Prata";

$gol->acelera();
$gol->acelera();

echo "Velocidade atual: {$gol->pegaMarcha()}";
echo "";

$gol->acelera();
$gol->acelera();
$gol->acelera();

echo "{$gol->pegaMarcha()}";