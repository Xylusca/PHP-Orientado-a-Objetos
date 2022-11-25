<?php
// Video Aula 05 Herança

/* Herença é um recurso que permite que classes compartilhem atributos e métodos, afim de 
reaproveitar codigo ou comportamentos generalizados */

class Veiculo
{
    public $modelo;
    public $cor;
    public $ano;

    public function Andar()
    {
        echo "Andou";
    }
    public function Para()
    {
        echo "Parou";
    }
}

class Carro extends Veiculo
{
    public function ligarLimpador(){
        echo "Limpador de parabrisa ligado";
    }
}

class Moto extends Veiculo
{
    public function darGrau(){
        echo "Dando grau";
    }
}

$moto = new Moto();
$moto->modelo = "Start 160";
$moto->cor = "Vermelha";
$moto->ano = 2023;
$moto->Andar();
echo "<br>";
$moto->darGrau();
echo "<br>";
var_dump($moto);
echo "<br>";

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Azul";
$carro->ano = 2018;
$carro->Para();
echo "<br>";
$carro->ligarLimpador();
echo "<br>";
var_dump($carro);
