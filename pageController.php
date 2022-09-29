<?php

include_once "page.php";

class PageController {
    public static function index() {
        include_once "pageView.php";
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