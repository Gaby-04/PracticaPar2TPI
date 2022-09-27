<?php 

abstract class ClaseAbstracta{
    abstract protected function getValor();
    abstract public function valorPrefijo($prefijo);

    //metodo publico
    public function imprimir(){
        echo $this->getValor();
    }
}
class ClaseConcreta extends ClaseAbstracta{
    protected function getValor(){
        return " Clase concreta";
    }

    public function valorPrefijo($prefijo, $separador = '.'){
        return $prefijo . " Clase concreta";
    }
}

$clase1 = new ClaseConcreta;
$clase1->imprimir();
echo $clase1->valorPrefijo('  asbdasdas');