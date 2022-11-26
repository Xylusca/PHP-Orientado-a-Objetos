<?php
// 12 - Interfaces

/* As classes que implementadas as interfaces são obrigada a criar os mesmos metodos. Na
interface os metodos so precisar ser public declarar nome do método e passar alguns parametros 
caso necessarios. */

interface Crud{
    public function create();
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud{
    public function create(){
        // Logica para criar uma noticia
    }
    public function read(){
        // Logica para ler uma noticia
    }
    public function update(){
        // Logica para atualizar um noticia
    }
    public function delete(){
        // Logica para deleter uma noticia
    }
}