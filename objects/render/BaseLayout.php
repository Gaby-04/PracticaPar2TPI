<?php
class BaseLayout {

    public static function renderHead()
    {
        require_once "views/header.php";
    }

    public static function renderFoot()
    {
        require_once "views/footer.php";
    }

    public static function renderHome()
    {
        require_once "views/home.php";
    }

    public static function renderAbout()
    {
        require_once "views/about.php";
    }

    public static function renderContact()
    {
        require_once "views/contact.php";
    }

    public static function renderFoto()
    {
        require_once "views/foto.php";
    } 

    public static function renderCarrera()
    {
        require_once "views/carrera.php";
    }
    
}


