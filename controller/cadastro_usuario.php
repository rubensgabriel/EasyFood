<?php

include('conexao.php');
include('../model/crud.php');

$email =    ($_POST['Email']);
$telefone = ($_POST['Telefone']);
$nome =     ($_POST['Nome']);
$endereco = ($_POST['Endereço']);
$senha =    md5($_POST['Senha']);

$sql = "INSERT INTO `usuario` ( `NOME`, `TELEFONE`, `ENDERECO`, `EMAIL`, `SENHA`) VALUES ('$nome', '$telefone', '$endereco', '$email', '$senha');";
$crud = new Crud();
$result = $crud->execute($sql);

if($result){
    $_SESSION['menssagem'] = 'Cliente adicionado com sucesso!!';
}else{
    $_SESSION['menssagem'] = 'Não é possível adicionar o cliente'; 
}

header('location:../index.php');
