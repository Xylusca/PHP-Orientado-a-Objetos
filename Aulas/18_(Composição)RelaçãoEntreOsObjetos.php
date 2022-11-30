<?php 
//  #18 - Relação entre os objetos (Composição)

/** Na Composição, uma classe cria a instância de outra classe dentro de si própria, sendo assim,
 * quando ela for destruída, a outra classe também será. */

 class Pessoa {
    public function atribuiNome($nome) {
        return "O nome da pessoa é ". $nome;
    }
 }

 class Exibir{
    public $pessoa;
    public $nome;

    function __construct($nome)
    {
        $this->pessoa = new Pessoa(); // Lembrado por ser Composicao extanciar fica dentro
        $this->nome = $nome;
    }
    
    public function exibirNome(){
        echo $this->pessoa->atribuiNome($this->nome);
    }
 }

 $exibe = new Exibir("Lucas");
 $exibe->exibirNome();