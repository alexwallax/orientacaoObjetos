<?php

require_once './Cliente.class.php';

class Conta {
    
    private $saldo;
    private $numero;
    private $agencia;
    private $titular;


    public function __construct($numero, $agencia, Cliente $titular, $saldo) {
        $this->numero = $numero;
        $this->agencia = $agencia;
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setAgencia($agencia) {
        $this->agencia = $agencia;
    }

    public function setTitular($titular) {
        $this->titular = $titular;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getAgencia() {
        return $this->agencia;
    }

    public function getTitular() {
        return $this->titular;
    }

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            return true;
        } else {
            return false;
        }
    }

    public function saca($valor) {
        if ($this->saldo >= $valor && $valor > 0) { //se o saldo for maior ou igual ao vao e valor for maior que zero faz o saque
            $this->saldo -= $valor;
            echo "saque efetuado";
            return true;
        } else {
            return false;
        }
    }

    public function transfere($valor, Conta $outraConta) {
        if ($this->saca($valor)) {
            $outraConta->depositar($valor);
            return true;
        }
        return false;
    }

    public function __toString() { // toString é apenas para transferir para string para mostrar na tela
        return "Conta{"
                . "saldo: {$this->saldo}, "
                . "numero: {$this->numero}, "
                . "agencia: {$this->agencia}, "
                . "titular: {$this->titular}}";
    }

}




//class Conta {
//   
//    private $numero;
//    private $agencia;
//    private $titula;
//    private $saldo;
//    
//    public function __construct($numero, $agencia, $titula) {
//        $this->numero = $numero;
//        $this->agencia = $agencia;
//        $this->titula = $titula;
//    }
//
//    
//    public function getNumero() {
//        return $this->numero;
//    }
//
//    public function getAgencia() {
//        return $this->agencia;
//    }
//
//    public function getTitula() {
//        return $this->titula;
//    }
//
//    public function getSaldo() {
//        return $this->saldo;
//    }
//
//    public function setNumero($numero) {
//        $this->numero = $numero;
//    }
//
//    public function setAgencia($agencia) {
//        $this->agencia = $agencia;
//    }
//
//    public function setTitula($titula) {
//        $this->titula = $titula;
//    }
//
//    public function setSaldo($saldo) {
//        $this->saldo = $saldo;
//    }
//
//
//    
//}