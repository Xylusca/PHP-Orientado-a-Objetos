<?php
// Video Aula 03 Getters and Setters
// Site com Explicação muito boa.
// https://www.freecodecamp.org/portuguese/news/getters-e-setters-em-java-explicados/#:~:text=O%20m%C3%A9todo%20getter%20retorna%20o,e%20o%20coloca%20no%20atributo.&text=Getters%20e%20setters%20permitem%20o,definir%20o%20valor%20de%20fato.

class Login
{
    private $email;
    private $senha;

    // O método getter retorna o valor do atributo.
    // O método setter recebe um parâmetro e o coloca no atributo.
    public function getEmail()
    {
        return $this->email;
    }
    // Motivo de usar o jeito set e que pode se utilizar filtros na hora de trazer o valor e deixando mais seguro.
    public function setEmail($e)
    {
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;

        // $this->email = $e; // Jeito Sem Filtro 
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($s)
    {
        $this->senha = $s;
    }

    public function Logar()
    {
        if ($this->email == "teste@teste.com" and $this->senha == "123456") :
            echo "logado com sucesso!";
        else :
            echo "Dados invalidos";
        endif;
    }
}

$Logar = new Login();
$Logar->setEmail("teste()/@teste.com");
$Logar->setSenha("123456");
$Logar->Logar();
echo "<br>";
echo $Logar->getEmail();
