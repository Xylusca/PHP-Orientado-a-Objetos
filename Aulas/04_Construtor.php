<?php
// Video Aula 04 Construtor

class Login
{
    private $email;
    private $senha;
    private $nome;

    // O método construtor de uma classe sempre é executando quando um objeto da classe é instanciado.
    public function __construct($email, $senha, $nome)
    {
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }
    public function getNome(){
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($e)
    {
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;

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

$Logar = new Login("teste@teste.com", "123456", "Lucas Pereira");
$Logar->Logar();
echo "<br>";
echo $Logar->getNome();
