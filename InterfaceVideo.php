<?php

interface Auto {
    public  function enceder();
    public function apagar();
}

interface gasolina extends Auto{
    //metodos de la interface gasolina la cual hereda de 
    //interface auto 
    public function vaciarTanque();
    public function llenarTanque($cant);
}

class Deportivo implements gasolina{
    ///aqui se colocan todos los metodos de gasolina
    //ya que hereda de auto tiene que incluirse los metodos de interface auto

    private $estado = false;
    private $tanque = 0;
public function estado(){
     if ($this -> estado){
        print "El auto esta encendido y tiene " .$this -> tanque ." de litros en el tanque";
        
     }else {
        print "El auto esta apagado";
     } 
 }

    public function enceder(){
      if ($this -> estado){
      print "NO puedes encender el auto dos veces";
      }else{ 
        if ($this -> tanque <= 0){
            print "Usted no puede encender el auto porque esta vacio";
        }else {
            print "El auto encendido <br>";
            $this -> estado = true;
        }
      }
    }
    public function apagar(){
        if ($this -> estado){
            print "Auto apagado <br>";
            $this -> estado = false;
            }else{ 
            print "El auto ya esta apagado<br>";
            //$this -> estado = true;
            } 
    }
    public function vaciarTanque(){
     $this->tanque = 0;
    }
    public function llenarTanque($cant){
    $this -> tanque = $cant;
    }

    public function usar($km){
if($this -> estado){
    $reducir = $km / 3;
    $this -> tanque = $this -> tanque - $reducir;
    if($this -> tanque <= 0)
    $this -> estado = false;
}else{
    print "El auto esta apagado y no se puede usar <br>";
     }
  }
}

$obj  = new Deportivo();
$obj -> llenarTanque(100);
$obj -> enceder();
$obj -> usar(360);
$obj -> estado();
?>