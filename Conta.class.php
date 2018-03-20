<?php

class Conta {
   
    private $numero;
    private $agencia;
    private $titula;
    private $saldo;
    
    public function __construct($numero, $agencia, $titula) {
        $this->numero = $numero;
        $this->agencia = $agencia;
        $this->titula = $titula;
    }

    
    public function getNumero() {
        return $this->numero;
    }

    public function getAgencia() {
        return $this->agencia;
    }

    public function getTitula() {
        return $this->titula;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setAgencia($agencia) {
        $this->agencia = $agencia;
    }

    public function setTitula($titula) {
        $this->titula = $titula;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }


    
}