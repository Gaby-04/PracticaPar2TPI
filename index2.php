<?php 
class Calculadora {
    public $n1;
    public $n2;

    function _construct($n1, $n2) {
        $this->n1 = $n1;
        $this->n2 = $n2;
    }

    public function sumar() {
        echo $this->n1 + $this->n2;
    }

    public function restar() {
        echo $this->n1 - $this->n2;
    }

}

class CalculadoraBasica extends Calculadora {
    function _construct($n1, $n2) { 
        parent::_construct($n1, $n2);
    }
}

$calc = new CalculadoraBasica(30, 20);
$calc->sumar();