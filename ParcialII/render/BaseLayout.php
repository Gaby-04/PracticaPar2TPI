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
  

public static function renderRectiles()
    {
       
    require_once "views/rectiles.php";   
        
   }

    public static function renderMamiferos()
    {
        require_once "views/mamiferos.php";
    }
    
    public static function renderAves()
    {
        require_once "views/aves.php";
    }
    public static function renderPeces()
    {
        require_once "views/peces.php";
    }

}