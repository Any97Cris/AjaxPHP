<?php
require_once 'model/Produto.php';

class ProdutoDAU implements produtoDAO{

    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }

    public function add(Produto $pro){
        $sql = $this->pdo->prepare("INSERT INTO produto(id, nome, preco, quantidade) VALUES (default,:nome,:preco,:quantidade)");
        $sql->bindValue(':nome', $pro->getNome());
        $sql->bindValue('preco', $pro->getPreco());
        $sql->bindValue('quantidade', $pro->getQuantidade());
        $sql->execute();

        $pro->setId($this->pdo->lastInsertId());
        return $pro;
    }

}
?>