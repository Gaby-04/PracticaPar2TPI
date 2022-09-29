<?php 

 class Animal 
{
    public static function comer(){
        return "Todos los animales comen";
    }
   
}
/************** Aves **************
 * 
 * Diseñar toda la estructura orientada a objetos, haciendo uso de clases abstractas, que contengan agrupadas
todas las propiedades y comportamientos según su especie, también deberá utilizar interfaces para agrupar
comportamiento y traits para agrupar rasgos para que su diseño quede implementado de la manera más
robusta y óptima posible. Cabe mencionar que todo su diseño deberá derivarse de una superclase llamada
Animal.
*/

interface IAves{
    public static function correr();
    public static function volar();
    public static function cantan();
}

interface IRectiles{
    public static function arrastrarse();
    public static function venenoso();
    public static function cazar();
}

interface IMamiferos{
    public static function relacionSocial();
    public static function dominan();
    public static function subsistir();
    
}

interface IPeces{
    public static function sobrevivir();
    public static function depredador();
    public static function Comunicacinadan();
}


abstract class Aves extends Animal
{
    public static function nombre(){}
    public static function tipo(){}
    public static function viven(){}
    public static function descripcion(){}

}


abstract class Avestruces extends Aves{

    
    public static  function nombre(){
        return 'Avestruces';
    }
    public static function tipo(){
        return 'vertebrado';
    }
    public static function viven(){
        return "esta viven en la tierra";
    }
    public static function Modo(){
        return "los avestruces son amigables";
    }
    public static function descripcion(){
        return "El avestruz​ es una especie de ave estrutioniforme de la familia Struthionidae.​ Es un ave grande que no vuela, sino que es corredora. Se halla en África, y en tiempos pasados también habitó en Oriente Medio.";
    }

    
    public static function correr(){

        return "corren muy Rapidp";
        
    }
    public static  function volar(){
        return "no vuela mucho";
    }
    public static function cantar(){
        return "Canta muy Duro";
    }
}


abstract class Torogoz extends Aves{

    public static  function nombre(){
        echo "Torogoz";
    }
    public static function tipo(){
        return 'vertebrado';
    }

    public static function viven(){
        return "esta viven en tierra y son volarores ";
    }
    public static function Modo(){
        return "los torogoz son hermoso y se encuentra frecuentemente en el salvador";
    }
    public static function descripcion(){
        return "El momoto cejiazul​ es una especie de ave coraciforme de la familia Momotidae. Habita en Centroamérica desde la península de Yucatán hasta Panamá. Esta ave es también observada en América del Sur. En Colombia se le conoce como Barranquero. Es común y no se considera amenazado de extinción";
    }
    public static function correr(){

        return "corren muy DESPACIO";
        
    }
    public static function volar(){
        return "vuela muy rapido";
    }
    public static function cantar(){
        return "Canta muy bonito";
    }
}
abstract class Pinguinos extends Aves{

    public static  function nombre(){
        echo "pinguino";
    }
    public static function tipo(){
        return 'vertebrado';
    }

    public static function viven(){
        return "en zonas heledas y tambien anda en el mar";
    }
    public static function Modo(){
        return "los pinguinos  son sociable";
    }
    public static function descripcion(){
        return "Los pingüinos son una familia de aves, la única del orden Sphenisciformes. Son aves marinas, no voladoras, que se distribuyen casi exclusivamente en el hemisferio sur, exceptuando el pingüino de las islas Galápagos.";
    }
    public static function correr(){

        return "corren muy DESPACIO";
        
    }
    public static function volar(){
        return "no Vuelan";
    }
    public static function cantar(){
        return "Canta muy bonito";
    }
}




trait Rasgosaves{
    public static function ColorPlumas(){
    }
    public static function CapacidadVuelo(){
    }
    public static function Dieta(){
        
    }
}

trait Rasgosmamiferos{
    public static function colorPelaje(){}
    public static function CapacidadCorrer(){}
    public static function capacidadCazar(){}
}

trait Rasgosrectiles{
    public static function colorPiel(){}
    public static function terrestres(){}
    public static function capacidadCazarR(){}
}

trait Rasgospeces{
    public static function Escamoso(){}
    public static function TipoNado(){}
    public static function capacidadCazarP(){}
}





/************** Mamiferos ***************/
abstract class Mamifero extends Animal
{
    public static function Nombre(){}
    public static function viven(){}
    public static function descripcion(){}
}

abstract class Perro extends Mamifero{

    public static function Nombre(){
        return "Perro";
    }
    public static function tipo(){
        return 'vertebrado';
    }
    public static function viven(){
        return "viven en la tierra";
    }
    public static function Modo(){
        return "los perros son juguetones";
    }
    public static function descripcion(){
        return "El perro, ​​​ llamado perro doméstico o can, ​ y en algunos lugares coloquialmente llamado chucho, ​ tuso, ​ choco, ​ entre otros; es un mamífero carnívoro de la familia de los cánidos, que constituye una especie del género Canis.";
    }

}

class Gato extends Mamifero{

    public static function Nombre(){
        return "Gato";
    }
    public static function tipo(){
        return 'vertebrado';
    }

    public static function viven(){
        return "viven en la tierra";
    }
    public static function Modo(){
        return "los gatos controlan a los humanos";
    }
    public static function descripcion(){
        return "El gato doméstico​​, llamado popularmente gato, y de forma coloquial minino, ​ michino, ​ michi, ​ micho, ​ mizo, ​ miz, ​ morroño​ o morrongo, ​ entre otros nombres, es un mamífero carnívoro de la familia Felidae. Es una subespecie domesticada por la convivencia con el ser humano";
    }

}
class Tortuga extends Mamifero{

    public static  function Nombre(){
        return "Tortuga";
    }
    public static function tipo(){
        return 'vertebrado';
    }
    public static function viven(){
        return "viven en la tierra";
    }
    public static function Modo(){
        return "las tortugas controlan son lentas y viven muchos años";
    }
    public static function descripcion(){
        return "Las tortugas o quelonios forman un orden de reptiles caracterizados por tener un tronco ancho y corto, y un caparazón que protege los órganos internos de su cuerpo. Son el grupo de reptiles más antiguo que existe ya que perdura desde el periodo Triásico.";
    }

}
/************** Peces ***************/
abstract class Peces extends Animal
{
    public static function Nombre(){}
    public static function tipo(){}
    public static function viven(){
        return "Los peces viven en el mar ";
    }
    public static function descripcion(){}
}

abstract class Dephine extends Peces{

    public static function Nombre(){
        return "Delphine";
    }
    public static function tipo(){
        return 'vertebrado';
    }

    public static function viven(){}
    public static function Modo(){
        return "los delphine son amigables";
    }
    public static function descripcion(){
        return "Los delfines, llamados también delfines oceánicos para distinguirlos de los platanistoideos o delfines de río, son una familia de cetáceos odontocetos muy heterogénea, que comprende 37 especies actuales.";
    }
}
abstract class Tiburon extends Peces{

    public static function Nombre(){
        return "Tiburon";
    }
    public static function tipo(){
        return 'vertebrado';
    }
    public static function viven(){}
    public static function Modo(){
        return "los tubirones son agresivos";
    }
    public static function descripcion(){
        return "Los selaquimorfos o selacimorfos son un superorden de condrictios conocidos comúnmente con el nombre de tiburones o escualos. Algunos grandes escualos, como el tiburón blanco y el toro, son conocidos a veces con el nombre de jaquetones";
    }
    
}
abstract class Pez_payaso extends Peces{

    public static function Nombre(){
        return "Pez payaso";
    }
    public static function tipo(){
        return 'invertebrado';
    }

    public static function viven(){}
    public static function Modo(){
        return "los pez payaso son adorable";
    }
    public static function descripcion(){
        return "Amphiprioninae es una subfamilia de peces marinos de la familia Pomacentridae, que engloba únicamente a los géneros Amphiprion y Premnas, cuyos componentes son conocidos como peces payaso o peces de las anémonas.";
    }
    
}
abstract class Estrella_mar extends Peces{

    public static function Nombre(){
        return " Estrella de mar";
    }
    public static function tipo(){
        return 'vertebrado';
    }

    public static function viven(){}
    public static function Modo(){
        return "los estrella de mar son tranquilas";
    }
    public static function descripcion(){
        return "Los asteroideos o estrellas de mar son una clase del filo Echinodermata de simetría pentarradial, con cuerpo aplanado formado por un disco pentagonal con cinco brazos o más.​ El nombre «estrella de mar» se refiere esencialmente a los miembros de la clase Asteroidea.";
    }
}
/************** Peces ***************/
abstract class reptiles extends Animal
{
    public  static function Nombre(){}
    public static function tipo(){}
    public  static function viven(){}
    public  static function descripcion(){}
}

abstract class Ranas extends reptiles{
    public static function Nombre(){
        return "Rana";
    }
    public static function tipo(){
        return 'invertebrada';
    }
    public static  function viven(){
        return "Jungla";
    }
    public static function descripcion(){
        return "Los anuros son un grupo de anfibios, con rango taxonómico de orden, conocidos coloquialmente como ranas y sapos. Los adultos se caracterizan por carecer de cola, por presentar un cuerpo corto y muy ensanchado, y unas patas posteriores muy desarrolladas y adaptadas para el salto, y alas para volar.";
    }
}
abstract class Anaconda extends reptiles{
    public static  function Nombre(){
        return "Anaconda";
    }
    public static  function tipo(){
        return 'invertebrado';
    }
    public static  function viven(){
        return "Cuevas";
    }
    public static  function descripcion(){
        return "La anaconda verde o común es una especie de serpiente constrictora de la familia de las boas. Es endémica de los ríos del trópico de Sudamérica.";
    }
}


