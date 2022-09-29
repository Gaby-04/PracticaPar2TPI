<?php

class HomeController
{
    public function showHome()
    {
        require_once "models/Home.php";
        $home = new Home();
        $showHome = $home->showHome();
        require_once "views/home.php";
    }
}