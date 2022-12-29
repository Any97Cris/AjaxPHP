<?php

$db_name = 'estoque';
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host,$db_user,$db_password);

if(!$pdo){
    echo("Erro ao tentar se comunicar com o banco de dados");
}