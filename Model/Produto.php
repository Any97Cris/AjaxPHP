<?php

class produto
{
    private $id;
    private $nome;
    private $preco;
    private $quantidade;

    public function getId()
    {
        return $this->id;
    }

    public function setId($idd){
        $this->id = trim($idd);
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($n){
        $this->nome = ucwords(trim($n));
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setPreco($p){
        $this->preco = $p;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setQuantidade($q){
        $this->quantidade = $q;
    }
}

interface produtoDAO{
    public function add(Produto $pro);
    public function findAll();
    public function findById($id);
    //public function update(Produto $pro);
}

?>