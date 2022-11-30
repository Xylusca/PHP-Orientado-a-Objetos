<?php 
// 08 - Abstração
/* Classes e Metodos abstratos são quando a classe pai tem um método nomeado, mas precisa  de suas
classe filha para preencher as tarefas.
Não pode extanciar uma class abstract abaixo tera um exmplo.
Ex: $banco = new Banco(); */

abstract class Banco {
    protected $Saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($s){
        $this->saldo = $s;
    }
    public function getSaldo(){
        return $this->saldo;
    }

    abstract protected function Sacar($s);
    abstract protected function Depositar($d);
}
class Itau extends Banco{
    public function Sacar($s){
        // $this->saldo =  $this->saldo - $s;
        $this->saldo -= $s;
        echo "<hr> Sacou: ".$s;
    }
    public function Depositar($d){
        // $this->saldo =  $this->saldo + $d;
        $this->saldo += $d;
        echo "<hr> Depositou: ".$d;
    }
}

$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr> Saldo: ".$itau->getSaldo();
$itau->sacar(300);
echo "<hr> Saldo: ".$itau->getSaldo();
$itau->Depositar(800);
echo "<hr> Saldo: ".$itau->getSaldo();