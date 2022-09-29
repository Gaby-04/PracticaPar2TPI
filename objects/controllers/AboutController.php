<?php

class AboutController
{
    public function showAbout()
    {
        require_once "models/About.php";
        $about = new About();
        $showAbout = $about->showAbout();
        require_once "views/about.php";
    }
}