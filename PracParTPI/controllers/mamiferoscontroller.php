<?php

class MamiferosController
{
    public function showMamiferos()
    {
        require_once "models/mamiferos.php";
        $mamiferos = new Mamiferos();
        $showMamiferos = $mamiferos->showMamiferos();
        require_once "views/mamiferos.php";
    }
}