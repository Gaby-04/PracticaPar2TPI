<?php 

///primero se crea un trait
trait Persona{

    ///un trait puede tener atributos
    public $nombre;

    //metodo 
    public function mostrarNombre(){
        echo $this->nombre;
    }

    //pueden haber metodos abstractos
    abstract function asignarNombre($nombre);
}

/*
trait Trabajador {
    protected function mensaje(){
        return "Mi nombre es: ".$this->nombre . "y soy hermosa";
    }
}*/

trait Trabajador {
  public function Hola(){
      echo "Mi Carlos precioso";
  }
}

////no puede haber un trait con el mismo nombre de una clase
class persona2{
  use Persona, Trabajador;

  public function asignarNombre($nombre){
    //$this->nombre = self:: mensaje() . $nombre;
    $this->nombre = $nombre;
  }

 // public function Hola(){
   // echo "Diego Ingeniero";
  //}
}

$persona = new persona2();
$persona->asignarNombre("Carlos"); ///para que aparesca el nombre de carlos ay que poner el eco y llamar el atributo nombre
//$persona->mostrarNombre();
$persona->Hola();
//echo $persona->nombre;

