<?php
session_start();
include('conexao.php');
include('C:\xampp2\htdocs\Trabalho doida\EasyFood/model/crud.php');

$email =    ($_POST['Email']);
$telefone = ($_POST['Telefone']);
$nome =     ($_POST['Nome']);
$endereco = ($_POST['Endereço']);
$senha =    md5($_POST['Senha']);

$sql = "INSERT INTO `usuario` ( `NOME`, `TELEFONE`, `ENDERECO`, `EMAIL`, `SENHA`) VALUES ('$nome', '$telefone', '$endereco', '$email', '$senha');";
$crud = new Crud();
$result = $crud->execute($sql);

if($result){
    $_SESSION['menssagem'] = array('menssagem'=>'Cliente adicionado com sucesso!!', 'cor' =>'green');
}else{
    $_SESSION['menssagem'] = array('menssagem'=>'Não é possível adicionar o cliente', 'cor' =>'red');
}

header('location:../index.php');
