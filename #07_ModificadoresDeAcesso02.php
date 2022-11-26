<?php
//  07 - Classes, Atributos e Métodos

/* Public - fara com que não haja ocutação nenhuma, toda propriedade ou método com public serão
acessisveis por todos que quiserem acessá-los. */

/* Protected - visibilidade protected faz com que todos os herdeiros vejam as propriedades ou 
métodos protegidos como se fossem públicos */

/* Private - ao contrário do public, esse medificador faz com que qualquer método ou prioridade 
seja visível somente pela classe que a declarou */

class Veiculo
{
    public $ano;
    public $modelo;
    public $cor;

    protected function Andar()
    {
        echo "Andou";
    }
    public function Para()
    {
        echo "Parou";
    }
    public function MostrarAcao() {
        $this->Andar();
    }
}

class Carro extends Veiculo
{
   
}

class Moto extends Veiculo
{
}

//Public
$carro = new Veiculo();
$carro->Para();
echo '<br>';


//Protectede
$carro = new Veiculo();
$carro->MostrarAcao();

//Private
// So ira mostrar se tiver no top da class

