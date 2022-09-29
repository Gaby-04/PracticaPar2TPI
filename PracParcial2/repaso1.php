<?php

class Persona {
    private $nombre;
    private $apellido;
    private $edad;


    function _construct($nombre, $apellido, $edad) 
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad=$edad;
      }

    function _get($propiedad)
    {
        if(property_exists($this, $propiedad)){
            return $this->$propiedad;
        }
    }

    function _set($propiedad, $valor)
    {
        if(property_exists($this, $propiedad)){
            $this->$propiedad = $valor;
        }
    }

    function mayorEdad(){
        return $this->edad >= 18;
    }

    function nombreCompleto(){
        return $this->nombre . " ". $this->$apellido;
    }

}

$persona = new Persona("Katherine", "Amaya", 21);

if($persona->mayorEdad()){
  echo $persona->nombreCompleto(). "es mayor de edad";
}else{
  echo $persona->nombreCompleto(). "no es mayor de edad";
  } 
?>