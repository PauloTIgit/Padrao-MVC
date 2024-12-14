<?php



rota('/', function () {
    view('home');
});

rota('/about', function (){
    view('about');
});

rota('/contact', function (){
    view('contact');
});

rota('/login', function () {
    view('login');
});

rota('/register', function () {
    view('register');
});



rota('/send-mail', function (){
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        controller('Email');
        $nome = trim(strip_tags(filter_input(INPUT_POST, 'name', FILTER_DEFAULT)));
        $email = trim(strip_tags(filter_input(INPUT_POST, 'email', FILTER_DEFAULT)));
        $celular = trim(strip_tags(filter_input(INPUT_POST, 'phone', FILTER_DEFAULT)));
        $assunto = trim(strip_tags(filter_input(INPUT_POST, 'subject', FILTER_DEFAULT)));
        $headerEmail = trim(strip_tags(filter_input(INPUT_POST, 'message', FILTER_DEFAULT)));
        $message = creatMessage($nome, $email, $celular, $assunto, $headerEmail);
    }
});

