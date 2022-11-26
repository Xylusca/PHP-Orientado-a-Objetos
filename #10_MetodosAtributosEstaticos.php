<?php
// 10 - Métodos e Atributos Estáticos

/* Quando trabalhar com metodo static não precisar extanciar a classe. Exmplo de como extanciar classe " $pessoa = new Pessoa(); ",
Mas se os outros metodos não for estático vc precisar extanciar a classe. */

// This não funcionar com métodos estáticos no lugar do this utilizar o self ou parent. 

?> <h2>Exmplo tudo Estáticos.</h2> <?php
class Login{

    public static $user; 

    public static function verificaLogin(){
        echo "O usuário ".self::$user." está logado!";
    }
}

Login::$user = "admin";
Login::verificaLogin();

?> <hr> <h2>Exmplo com Static e Public.</h2> <?php
class usaurio{

    public static $user; 

    public static function verificaLogin(){
        echo "O usuário ".self::$user." está logado!";
    }

    public function sairSistema() {
        echo "O usuário deslogou.";
    }
}

$usuario = new usaurio();
$usuario->sairSistema();
