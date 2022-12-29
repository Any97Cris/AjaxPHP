<?php

require_once 'database/database.php';
require_once 'dao/ProdutoDAO.php';

$produtoDAO = new ProdutoDAU($pdo);

$nome = filter_input(INPUT_POST, 'nome');
$preco = filter_input(INPUT_POST, 'preco');
$quantidade = filter_input(INPUT_POST, 'quantidade');

if($nome && $preco && $quantidade){
    $novoProduto = new Produto();
    $novoProduto->setNome($nome);
    $novoProduto->setPreco($preco);
    $novoProduto->setQuantidade($quantidade);

    $produtoDAO->add($novoProduto);
}

?>