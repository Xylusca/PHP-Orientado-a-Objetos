<?php
// 19 - Métodos Mágicos

// O método  Clone e Construct foi mostrado em outra arquivo no caso #04 - Construct e #14 - Clone.
# Clone - O método clone envolve copiar todo o conteúdo do objeto de forma profunda (deep). Ou seja, copia também os objetos referenciados dentro desse objeto. 
# Construct - Para definir um construtor para uma classe, basta criar uma função chamada de __construct
# Invoke - O método invoke é chamado quando um script tenta chamar um objeto como uma função.
# Tostring - O método toString é chamado quando tentamos exibir um objeto (converter um objeto em string).
# Get - O método get é acionado quando tentamos acessar uma propriedade {php}private{/php} ou {php}protected{/php}. Veja:
# Set -  O método mágico set, é invocado quando tentamos alterar uma propriedade com visibilidade {php}protected{/php} ou {php}private{/php}.

class Pessoa {
    private $dados = array();

    public function __set($nome, $valor)
    {
        $this->dados[$nome] = $valor;
    }

    public function __get($nome) {
        return $this->dados[$nome];
    }

    public function __toString()
    {
        return "Tentei imprimir o objeto";
    }

    public function __invoke()
    {
        return "Objeto como função";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Lucas";
$pessoa->idade = 22;
$pessoa->sexo = "M";
echo $pessoa->nome."<br>";
echo $pessoa->idade."<br>";
echo $pessoa->sexo."<br>";

echo $pessoa. "<br>";
echo $pessoa();