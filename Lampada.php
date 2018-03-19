<?php

class Lampada {
    
    /* Atributos(propriedades) */
    public $potencia; 
    public $fabricante; 
    public $corLuz;
    public $estadoLampada;
    
    /* Métodos(comportamentos) */
    public function acende() {
        $this->estadoLampada = true;
        echo "Lampada acesa<br />";
    }
    public function apaga() {
        $this->estadoLampada = false;
    }
}

$ge = new Lampada();

$ge->corLuz = "Branca";
$ge->fabricante = "General Eletric";
$ge->potencia = 80.0;
$ge->acende();

//echo "O fabricante é {$ge->fabricante} com potência ($ge->potencia)";

// var_dump($ge); // mostra tudo do objeto


