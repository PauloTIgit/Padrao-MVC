<?php


rota('/', function () {
    view('home');
});


rota('/produtos', function (){
    view('produtos');
});

