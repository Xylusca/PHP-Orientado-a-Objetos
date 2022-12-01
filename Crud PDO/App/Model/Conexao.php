<?php

class Conexao
{
    private static $instance;

    public static function getConn(){
        if(!isset(self::$instance)):
            self::$instance = new PDO('mysql:host=localhost;dbname=C;charset=utf8', 'root','');
        else:
            return self::$instance;
        endif;
    }
}
