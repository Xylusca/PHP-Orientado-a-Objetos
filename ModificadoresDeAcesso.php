<?php
/* Public - fara com que não haja ocutação nenhuma, toda propriedade ou método com public serão
acessisveis por todos que quiserem acessá-los. */

/* Protected - visibilidade protected faz com que todos os herdeiros vejam as propriedades ou 
métodos protegidos como se fossem públicos */

/* Private - ao contrário do public, esse medificador faz com que qualquer método ou prioridade 
seja visível somente pela classe que a declarou */

class Veiculo
{
    private $ano;
    protected $modelo;
    public $cor;

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
    //Protected 
    public function setModelo($m)
    {
        $this->modelo = $m;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    //Private
    public function setAno($a)
    {
        $this->ano = $a;
    }
    public function getAno()
    {
        return $this->ano;
    }
}

class Moto extends Veiculo
{
}

//Public
$carro = new Carro();
$carro->cor = "Azul";
echo $carro->cor;
echo "<br>";

//Protectede
$carro->setModelo("Gol");
echo $carro->getModelo();
echo '<br>';
var_dump($carro);
echo '<br>';

//Private
// Mas ele criou um novo atributo cor
$carro->setAno(2022);
echo $carro->getAno();
echo '<br>';
var_dump($carro);
