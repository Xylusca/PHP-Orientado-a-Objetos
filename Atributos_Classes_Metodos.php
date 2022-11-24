<?php
//  01 - Classes, Atributos e Métodos

// Criando CLASSE Pessoa. 
// Por boas praticas sempre deixar a primeira letra da class maiúscula. 
class Pessoa { 
    // pessoas tem Características, então esses seriam os atributos dela no caso aqui seria nome idade
    public $nome;
    public $idade;

    // As pessoas realizar ações no contexto isso seria o METODOS
    public function Falar() {
        // $this pra pegar os atributos de cima se não por $this da erro. 
        echo $this->nome . " de " . $this->idade . " acabou de falar";
    }
}

// Agora criamos o rodrigo como objeto
$lucas = new Pessoa();
$lucas->nome = "Lucas Pereira da Cruz";
$lucas->idade = 22;
// var_dump pra mostrar as carcteristicas do class
var_dump($lucas);
echo "<br>";
echo $lucas->nome; // Exemplo de como chamar objeto e um atributo especifico.
echo "<br>";
$lucas->Falar(); // chamar uma função do objeto
