<?php

$conecta = mysqli_connect("localhost","root","","conexao");
if(mysqli_connect_errno()){
    die("Conexão falhou: " . mysqli_connect_errno());
}

if(isset($_POST['nome'])){
    $nome = utf8_decode($_POST['nome']);
    $email = utf8_decode($_POST['email']);
    $phone = utf8_decode($_POST['phone']);
    $city = utf8_decode($_POST['city']);

    $inserir = "INSERT INTO crud(id,nome,email,phone,city) VALUES(default,'$nome','$email','$phone','$city')";

    $retorno = array();
    $operacao_insercao = mysqli_query($conecta,$inserir);
    if($operacao_insercao){
        $retorno["sucesso"] = true;
        $retorno["mensagem"] = "Dados cadastrados com sucesso!";
    }else{
        $retorno["sucesso"] = false;
        $retorno["mensagem"] = "Falha ao cadastrar os dados!";
    }

    echo json_encode($retorno);
}

?>