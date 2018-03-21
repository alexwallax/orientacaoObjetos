<?php

require_once './Conta.class.php';

require_once './Cliente.class.php';

$chico = new Cliente("Chico");

$contaChico = new Conta(500, 111, 222, "Chico");

$ze = new Cliente("Ze");


$contaZe = new Conta(700, 111, 222, "Ze");


echo $contaChico;



























////$ze->saldo = 100.0;
//$ze->numero = 2323;
//$ze->agencia = 65;
//$ze->titular = "ze";
//
//if ($chico->transfere(200, $ze)) {
//    echo "Transferencia efetuada";
//} else {
//    echo "Transferencia não efetuada";
//}
//echo "<br>";
//echo $chico;
//echo "<br>";
//echo $ze;


















//echo $conta."<br />";
//
//$conta->saca(100);
//
//$conta->depositar(500);
//
//echo "<br />";
//
//echo $conta . "<br />";
//
//echo "Seu saldo é " . $conta->saldo;

