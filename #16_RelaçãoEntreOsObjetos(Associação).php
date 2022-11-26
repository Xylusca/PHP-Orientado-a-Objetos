<?php
// 16 - Relação entre os objetos (Associação)
// Associação, acontece quando um objeto "utiliza" outro, porém, sem que eles dependam um do outro.

class Pedido {
    public $numero;
    public $cliente;
}

class Cliente{
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Lucas Pereira";
$cliente->endereco = "Rua: Teste N°123";

$pedido = new Pedido();
$pedido->numero = "321";
$pedido->cliente = $cliente;

$dados = Array(
    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,
    'endereco_cliente' => $pedido->cliente->endereco
);

var_dump($dados);