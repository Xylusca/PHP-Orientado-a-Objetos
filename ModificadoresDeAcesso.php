<?php
/* Public - fara com que não haja ocutação nenhuma, toda propriedade ou método com public serão
acessisveis por todos que quiserem acessá-los. */

/* Protected - visibilidade protected faz com que todos os herdeiros vejam as propriedades ou 
métodos protegidos como se fossem públicos */

/* Private - ao contrário do public, esse medificador faz com que qualquer método ou prioridade 
seja visível somente pela classe que a declarou */

class Veiculo
{
    public $ano;
    protected $modelo;
    protected $cor;

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
}

class Moto extends Veiculo
{
    //Protected 
    public function setCor($c)
    {
        $this->cor = $c;
    }
    public function getCor()
    {
        return $this->cor;
    }
}

//Public
$carro = new Carro();
$carro->ano = 2022;
echo $carro->ano;
echo "<br>";

//Protectede
$carro->setModelo("Gol");
echo $carro->getModelo();
echo '<br>';
var_dump($carro);

//Private
// Mas ele criou um novo atributo cor
$carro->setCors("Vermelho");
echo $carro->setCors();
echo '<br>';
var_dump($carro);
