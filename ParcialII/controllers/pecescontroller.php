<?php

class PecesController
{
    public function showPeces()
    {
        require_once "models/peces.php";
        $peces = new Peces();
        $showPeces = $peces->showPeces();
        require_once "views/peces.php";
    }
}