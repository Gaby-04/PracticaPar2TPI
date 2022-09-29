<?php

class AvesControllers
{
    public function showAves()
    {
        require_once "models/aves.php";
        $aves= new aves();
        $showAves = $aves->showAves();
        require_once "views/aves.php";
    }
}

include_once "aves.php";

class PageController {
    public static function index() {
        include_once "views/aves.php";
    }
    public static function users() {
        $users = page::showUsers();
        
    }
}

if(isset($_GET['page']) == 'index'){
    pageController::index();
}

if(isset($_GET['page']) == 'users'){
    pageController::users();
}