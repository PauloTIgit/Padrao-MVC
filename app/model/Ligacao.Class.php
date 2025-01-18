<?php

abstract class Ligacao {


    
   private $server = 'mysql:host=localhost;dbname=suporte';
   private $user = 'root';
   private $pass = '';

    // private $server = 'mysql:host=srv793.hstgr.io;dbname=u771187825_box';
    // private $user = 'u771187825_dev';
    // private $pass = 'Rg]d6jP@0';
    
    protected function conecta(){
        try{
            $conn = new PDO($this->server, $this->user, $this->pass);
            $conn->exec("set names utf8");
            return $conn;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

}