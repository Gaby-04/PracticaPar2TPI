<?php 
abstract class Animal{
    public $nombre;
    public $color;

    public function describir (){
        return "El nombre es: ".$this->nombre.", el color es: ".$this->color;
    }

    abstract public function sonido();
}

class Gato extends Animal{
    public function describir(){
        return parent::describir();
    }

    public function sonido(){
        return 'Miau';
    }
}

class Perro extends Animal{
    public function describir(){
        return parent::describir();
    }

    public function sonido(){
        return 'Guau';
    }
}

$animal = new Gato;
$animal->nombre = 'Anastasia';
$animal->color = "Gris";
echo $animal->describir();
echo "<br />";
echo $animal->sonido();