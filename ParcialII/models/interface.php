<?php

require_once "clasepadre.php";

interface Inaves{
    public static function correr();
    public static function volar();
    public static function cantan();
}

interface Inrectiles{
    public static function arrastrarse();
    public static function venenoso();
    public static function cazar();
}

interface Inmamiferos{
    public static function relacionSocial();
    public static function dominan();
    public static function subsistir();
    
}

interface Inpeces{
    public static function sobrevivir();
    public static function depredador();
    public static function Comunicacinadan();
}


