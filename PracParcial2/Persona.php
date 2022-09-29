<?php 
include_once "IProfesor.php";

abstract class Persona{
    abstract protected function comer();
    abstract public  function caminar();
    public function dormir(){
        echo "Zzzzz\n";
    }
}

class Trabajador extends Persona{
    public function comer(){
        echo "Comiendo Pupusas.....\n";
    }

    public function caminar() {
        echo "caminando....\n"; //chmob777
    }
}

$trab1 = new Trabajador;

$trab1->comer();
$trab1->dormir();

class ProfesorBachillerato extends Trabajador implements Iprofesor{
    public function darClases(){
        echo "Dando clases de PHP...\n\n\n";
    }

    public function calificar(){
        echo "Solo malas notas veo...\n\n\n";
    }
}

$bach = new ProfesorBachillerato;

$bach->dormir();
$bach->calificar();


?>