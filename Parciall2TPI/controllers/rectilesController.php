<?php

class RectilesController
{
    public function showRectiles()
    {
        require_once "models/rectiles.php";
        $rectiles = new Rectiles();
        $showRectiles = $rectiles->showRectiles();
        require_once "views/rectiles.php";
    }
}