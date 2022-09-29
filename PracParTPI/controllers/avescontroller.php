<?php

class AvesController
{
    public function showAves()
    {
        require_once "models/aves.php";
        $aves = new Aves();
        $showAves = $aves->showAves();
        require_once "views/aves.php";
    }
}