<?php 
// #15 Tratamento de Exceções

/** Exeção e uma ocorrência anormal que afecta o funcinamento da aplicação 
 *  Exception é a classe base para todas Exceptions
 *  Message, code, file, line  */

class NewsLatter {

    public function cadastrarEmail($email) {

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception("Este email é inválido", 121); // Exceção 
        else:
            echo "Email cadastrado com sucesso!";
        endif;
    }
}

$newslatter = new NewsLatter();

try{ // tratamento da exeção try catch
    $newslatter->cadastrarEmail("contato@");
}catch(Exception $e) {
    echo "Mensagem: ".$e->getMessage()."<br>";
    echo "Código: ".$e->getCode()."<br>";
    echo "Linha: ".$e->getLine()."<br>";
    echo "Arquivo: ".$e->getFile()."<br>";
}