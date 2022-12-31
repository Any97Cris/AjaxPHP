<?php

require_once 'database/database.php';
require_once 'dao/ProdutoDAO.php';

$produtoDAO = new ProdutoDAU($pdo);

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$preco = filter_input(INPUT_POST, 'preco');
$quantidade = filter_input(INPUT_POST, 'quantidade');

if($nome){
    $produto = new ProdutoDAU();
    $produto->setId($id);
    $produto->setNome($nome);
    $produto->setPreco($preco);
    $produto->setQuantidade($quantidade);

    $produtoDAO->update($produto);
}


?>