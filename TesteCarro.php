<?php

require_once './Carro.class.php';

$gol = new Carro();

$gol->modelo = "Gol";
$gol->cor = "Prata";

$gol->colocarVlelocidadeAtual(25);

$gol->acelera();
$gol->acelera();

echo "Cor do carro{$gol->pegaCor()}<br />";

echo "Velocidade atual: {$gol->pegaVelocidadeAtual()}";
echo "Marcha Atual: {$gol->pegaMarcha()}<br>";

$gol->acelera();
$gol->acelera();
$gol->acelera();

echo "Velocidade atual: {$gol->pegaVelocidadeAtual()}";
echo "Marcha Atual: {$gol->pegaMarcha()}<br>";

$gol->freia();
$gol->freia();
$gol->freia();
$gol->freia();
$gol->freia();
$gol->freia();
$gol->freia();
$gol->freia();
$gol->freia();
$gol->freia();

echo "Velocidade atual: {$gol->pegaVelocidadeAtual()}";
echo "Marcha Atual: {$gol->pegaMarcha()}<br>";