<?php

class fotoController
{
    public function showfoto()
    {
        require_once "models/foto.php";
        $foto = new foto();
        $showfoto = $foto->showfoto();
        require_once "views/foto.php";
    }
}