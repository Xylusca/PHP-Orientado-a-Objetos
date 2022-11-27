<?php 
// #17 - Relação entre os objetos (Agregação)


class Produtos{
    public $nome;
    public $valor;

    function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho {
    public $produtos;

    public function adiciona(Produtos $produto) {
        $this->produtos[] = $produto;
    }
    public function exibe() {
        foreach ($this->produtos as $produto) {
            echo $produto->nome. '<br>';
            echo $produto->valor. '<hr>';
        }
    }
}

$produto1 = new Produtos("Notebook", "R$ 3500,00");
$produto2 = new Produtos("Mouse", "R$ 50,00");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);
$carrinho->adiciona($produto1);

$carrinho->exibe();