<?php

class Route 
{
    public function __construct() {
        include './app/controller/Route.Controller.php';
        include './app/controller/Component.Controller.php';
        include './app/route/web.php';
    }
}