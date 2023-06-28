<?php
session_start();

require_once("conexao.php");
require_once('C:\xampp\htdocs\EasyFood\model\crud.php');

$email = $_POST['email'];
$senha = md5($_POST['senha']);

$sql = "Select * from usuario where email = '$email' and senha = '$senha'";
$crud = new Crud();
$result = $crud->read($sql);


if(!empty($result)){
 foreach($result as $key => $row){
 $_SESSION['NOME'] = $row['NOME'];
 $_SESSION['ID_USUARIO'] = $row['CODUSUARIO'];
 header("location:../home.php"); 
 }   
}else{
 $_SESSION['menssagem'] = array('menssagem'=>'E-mail ou senha incorretos.', 'cor' =>'red');
 header("location:../index.php"); 
}

?>