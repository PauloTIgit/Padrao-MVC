<?php

function view($view)
{
    if(file_exists("./view/$view.php")){
        component('header');
        include "./view/$view.php";
        component('footer');
    }
    exit();
}

function controller($controller)
{
    if(file_exists("./app/controller/$controller.Controller.php")){
        include "./app/controller/$controller.Controller.php";
    }
    exit();
}


function rota($rota, $f)
{
    if( substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['REQUEST_URI'], '/')) == $rota)
    {
        $f();
        exit();
    }
}