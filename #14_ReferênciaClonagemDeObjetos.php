<?php
// 14 - Referência e Clonagem de Objetos


class Pessoa{
    public $nome;
}

// Aqui esta fazendo uma referencia a de $pessoa2 com $pessoa.
$pessoa = new Pessoa();
$pessoa->nome = "Pessoa 1";

$pessoa2 = $pessoa;
$pessoa2->nome = "Pessoa 2";

echo $pessoa->nome."<br>";
echo $pessoa->nome."<hr>";

// Aqui esta fazendo uma clone a de $pessoa3 com $pessoa4.
$pessoa3 = new pessoa();
$pessoa3->nome = "Pessoa 3";

$pessoa4 = clone $pessoa3;
$pessoa4->nome = "Pessoa 4";

echo $pessoa3->nome."<br>";
echo $pessoa4->nome."<hr>";