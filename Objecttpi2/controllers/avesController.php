<?php



class AvesControllers
{
    public function showAves()
    {
        require_once "models/aves.php";
        $aves= new aves();
        $showAves = $imagen->showAves();
        require_once "views/aves.php";
    }
}