<?php

class Carro {
    // atributos
    private $modelo;
    private $cor;
    private $velocidadeAtual;
    private $velocidadeMaxima;
    
    /* construtor */
    public function __construct($modelo, $cor) {
        $this->modelo = $modelo;
        $this->cor = $cor;
    }
    
    //Métodos
    public function pegaCor() {
        return $this->cor;
    }

    public function colocarVlelocidadeAtual($velocidadeAtual) {
        if ($velocidadeAtual < 0) {
            echo "Velocidade não pode ser negativa";
        } elseif ($velocidadeAtual % 10 != 0) {
            echo "Velocidade deve ser multiplo de 10";
        } else {
            $this->velocidadeAtual = $velocidadeAtual;
        }
    }

    public function pegaVelocidadeAtual() {
        return $this->velocidadeAtual;
    }

    public function acelera() {
        $this->velocidadeAtual += 10.0;
    }

    public function freia() {
        if ($this->velocidadeAtual >= 10) {
        $this->velocidadeAtual -= 10.0;
        }
    }

    public function pegaMarcha() {
        if ($this->velocidadeAtual == 0) {
            return "neutro";
        } elseif ($this->velocidadeAtual < 20) {
            return "1º marcha";
        } elseif ($this->velocidadeAtual < 30) {
            return "2º marcha";
        } elseif ($this->velocidadeAtual < 50) {
            return "3º marcha";
        } elseif ($this->velocidadeAtual < 70) {
            return "4º marcha";
        } else {
            return "5º marcha";
        }
    }

}






