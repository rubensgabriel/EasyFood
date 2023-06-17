<?php

include('conexao.php');
include('../model/crud.php');

$email =    isset ($_POST['Email']) ? $_POST['Email'] : '';
$telefone = isset ($_POST['Telefone']) ? $_POST['Telefone']: '';
$nome =     isset ($_POST['Nome']) ? $_POST['Nome'] : '';
$endereco = isset ($_POST['Endereço']) ? $_POST['Endereço'] : '';
$senha =    isset ($_POST['Senha']) ? md5($_POST['Senha']) : '';

$sql = "INSERT INTO `usuario` ( `NOME`, `TELEFONE`, `ENDERECO`, `EMAIL`, `SENHA`) VALUES ('$nome', '$telefone', '$endereco', '$email', '$senha');";
$crud = new Crud();
$result = $crud->execute($sql);

if($result){
    $_SESSION['menssagem'] = 'Cliente adicionado com sucesso!!';
}else{
    $_SESSION['menssagem'] = 'Não é possível adicionar o cliente'; 
}

header('location: index.php');
