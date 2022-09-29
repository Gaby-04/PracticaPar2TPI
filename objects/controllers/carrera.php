<?php

class fotoCarrera
{
    public function showcarrera()
    {
        require_once "models/carrera.php";
        $carrera = new carrera();
        $showcarrera = $carrera->showcarrera();
        require_once "views/carrera.php";
    }
}