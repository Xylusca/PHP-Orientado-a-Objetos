<?php
// 13 - Namespaces

/* Para não ter confiltos de classe utilizamos os Namespaces para definir qual classe da 
pasta que deseja ser ultilizado. */

require 'classes/produto.php';
require 'models/produto.php';

use models\Produto as productModel; // 'Use' para indentificar qual pasta qual arquivo ira ultilizar 
use classes\Produto as productClass; // O 'as' para dar um nome para namespace.

$produto = new productModel();
$produto->mostrarDetalhes();

echo '<br>';

$produto2 = new productClass();
$produto2->mostrarDetalhes();
