<?php
    header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require './autoload.Class.php';


    $email = filter_input(INPUT_POST, 'user_email', FILTER_SANITIZE_EMAIL);
    $password = password_hash(filter_input(INPUT_POST, 'user_password', FILTER_DEFAULT), PASSWORD_DEFAULT);
    
    $passwordDB = 0;

    
    if($passwordDB != 0){
        $verify = true;

        if ($verify) {
            $_SESSION['login'] = 1;
            $result = [
                'status' => 'success',
                'sucesso'  => false,
                'title'=> 'Sucesso',
                'message' => 'Sucesso no Login',
                'data' => []
            ];
        }else{
            $result = [
                'status' => 'erro',
                'sucesso'  => false,
                'title'=> 'Erro',
                'message' => 'Senha invalida',
                'data' => [
                    $verify
                ]
            ];
        }

    }else{
        $result = [
            'status' => 'erro',
            'sucesso'  => false,
            'title'=> 'Erro',
            'message' => 'Email não cadastrado',
            'data' => [
                'email' => $email,
                'pass'  => $password   
            ]
        ];
    }

    
}else{
    $result = [
        'status' => 'erro',
        'sucesso'  => false,
        'title'=> 'Erro',
        'message' => 'Erro no requerimento, metodo esperado = POST',
    ];    
}

print_r(json_encode($result));