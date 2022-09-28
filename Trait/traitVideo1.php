<?php 

class Persona{

    ///si se tiene un metodo con el mismo nombre ya sea en una clase y en un trait se
    ///sobreEscribir en el trait ya que el metodo mque manda en este caso seria el que se 
    ////coloco en el trait en cambio cuando se escribe en la clase hija es decir,
    //en el caso de poner en la clase hija un metodo con el mismo nombre 
    ///mandara el metodo que se hizo en la clase hija
    
    public function saludo(){
        echo "echo";
    }

    /*
    public function setNombre($nombre){
        $this->nombre = strtolower($nombre);
    }

    public function getNombre(){
        return ucwords($this->nombre);
    }*/
}
  
//////***************TRAIT QUE SE SOBREESCRIBE************** */
/*trait Latinoamericano{
//    public function saludo(){
        echo "Hola Mundo";
    }
}

class Peruano extends Persona{
    use Latinoamericano;
    public function saludo(){
        echo "Hola Mundo desde peruano";
    }

}*/

/*
//EN EL CASO DE QUERER UTILIZAR VARIOS TRAIT 
trait Hola{
    public function decirHola(){
         echo "Hola";
     }
 }

trait Mundo{
     public function decirMundo(){
          echo "Mundo";
      }
  }


  class Peruano extends Persona{
     ///para agregar los dos trait se hace lo siguiente
     use Hola, Mundo;
 
 }   */


 ////******************************************************* */
 ///EN ESTE CASO AMBOS TRAIT LLEVAN UN METODO CON EL MISMO NOMBRE POR LO MCUAL AMBOS ENTRARIAN EN CONFLICTO 
 ////YA QUE AMBOS SE ESTAN LLAMANDO DESDE LA MISMA CLASE PARA PODER DECIR CUAL SE USARA O INDICAR 
 ///CUAL DE LOS DOS SE QUIERE UTILIZAR SE HACE LO QUE SE HIZO EN LA CLASE PERUANO DONDE SE VA A LLAMAR LOS TRAIT
/*
 trait A{
    public function saludo(){
         echo "Hola mundo desde el trait a te amo";
     }
 }

trait B{
     public function saludo(){
          echo "Hola Mundo desde el trat B te adoro";
      }
  }


  class Peruano extends Persona{
     ///para agregar los dos trait se hace lo siguiente
     use A, B{
        //PARA INDICAR QUE SE QUIERE USAR EL METODO SALUDOM DEL TRAIT A y no el TRAIT B
        //con esto se soluciona el comflicto que se tiene al colocar dos metodos con el mismo nombre en los trai
        //A::saludo insteadOf B;

        //PARA INDICAR QUE SE QUIERE USAR EL METODO SALUDOM DEL TRAIT B y no el TRAIT A
        B::saludo insteadOf A;
     }
 
 } */


 /////***********************AL CREAR METODOS PROTEGIDOS ***********************
 /*trait A{
    ///si se hace un metodo protegido solo podemos acceder a el desde otro metodo 
    ///y si queremos acceder desde una determinada clase lo que se hace es y queremos cambiar su visibilidad
    ///queremos quen sea publico se hace lo mque esta en la clase peruano
    protected function saludo(){
         echo "Hola Mundo desde el trat A metodo protegido";
     }
 }

 class Peruano extends Persona{
    ///parav acceder al metodo protegido del trait
    use A { saludo as public; }

} 
*/


////////*****************USO DE TRAIT COMPUSTOS DE OTROS TRAIT */
/*
trait A{
    public function decirHola2(){
         echo "Hola .......";
     }
 }

 trait B{
    public function decirMundo2(){
         echo "Mundo te amo";
     }
 }

 trait C{
     use A,B;
 }


 class Peruano extends Persona{
    ///para agregar los dos trait se hace lo siguiente
    use C;

} 

*/

///////************EN LOS TRAIT TAMBIEN SE PUEDEN ESCRIBIR METODOS ABSTRACTOS */
trait A{
    public function decirHola2(){
         echo "Hola .......";
     }
 }

 trait B{
    public function decirMundo2(){
         echo "Mundo te amo";
     }

     abstract public function saludo2();
 }

 trait C {

    use A,B;

    ////AL CREAR UN METODO ABSTRACTOM QUE OBLIGA A CREAR UN METODO PUBLIC
    public function saludo2(){
     $this->decirHola2();
     $this->decirMundo2();
    }
 }


 class Peruano extends Persona{
    ///para agregar los dos trait se hace lo siguiente
    use C;

} 
$peruano =new Peruano;
//$peruano->decirHola();
//$peruano->decirMundo();
//$peruano->saludo();
//$peruano->decirHola2();
//$peruano->decirMundo2();
$peruano->saludo2();
