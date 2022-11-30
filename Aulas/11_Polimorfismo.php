<?php
// 11 - Polimorfismo
/* Polimorfismo e rescrever ou herdar a hernca do pai  */

class Animal {
    public function Andar(){
        echo "O animal andou";
    }
    public function Correr(){
        echo "O animal correu";
    }
}

class Cavalo extends Animal{
    public function Andar()
    {
        $this->Correr();
    }
}

$animal = new Cavalo();
$animal->Andar();
