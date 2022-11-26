<?php
// 09 - Constantes, Self e Parent


class Pessoa {
    const nome = "Lucas"; //Atributo

    public function exibirNome(){ //referenciar 
        echo self::nome; // self pegar valor do top da 
    }
}
class Lucas extends Pessoa{
    const nome = "Pereira";

    public function exibirNome()
    {
        echo self::nome . "<hr>"; // self pegar o primeiro valor dentro do escopo.
        echo parent::nome; // parent pegar valor pai.
    }
}

$lucas = new Lucas(); // Extanciar
$lucas->exibirNome();