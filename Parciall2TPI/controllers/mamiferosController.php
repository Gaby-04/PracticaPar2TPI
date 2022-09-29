<?php



class mamiferosControllers
{
    public function showMamiferos()
    {
        require_once "models/mamiferos.php";
        $mamiferos= new mamiferos();
        $showMamiferos = $mamiferos->showMamiferos();
        require_once "views/mamiferos.php";
    }
}