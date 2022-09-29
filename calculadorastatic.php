<?php 
class Calculadora {
    public static $n1;
    public static $n2;

    public static function sumar(){
        echo self::$n1 + self::$n2;
    }

    public static function restar(){
        echo self::$n1 - self::$n2;
    }
}

class CalculadoraBasica extends Calculadora{

}
Calculadora::$n1 = 5;
Calculadora::$n2 = 20;
CalculadoraBasica::sumar();