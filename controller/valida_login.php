<?php
session_start();
require_once("../controller/conexao.php");
require_once("../model/crud.php");

$email = $_POST['email'];
$senha = md5($_POST['senha']);

$sql = "Select * from usuario where email = '$email' and senha = '$senha'";
$crud = new Crud();
$result = $crud->read($sql);


if(!empty($result))
{
    // $_SESSION['NOME'] = $row['nome'];
    // $_SESSION['ID_USUARIO'] = $valida_usuario_array['id_usuario'];
     header("location:../home.html"); 
}else{
     header("location:../index.html"); 

}

?>