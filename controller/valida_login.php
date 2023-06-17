<?php
session_start();
require_once("../controller/conexao.php");
require_once("../model/crud.php");

$email = $_POST['email'];
$senha = md5($_POST['senha']);

$sql = "Select * from usuario where email = '$email' and senha = '$senha'";
$crud = new Crud();
$result = $crud->read($sql);

if($result !== false && $result->num_rows > 0)
{
    // $_SESSION['NOME'] = $row['nome'];
    // $_SESSION['ID_USUARIO'] = $valida_usuario_array['id_usuario'];
    // header("location:../home.html"); 
    echo "aqui 1";
}else{
    // header("location:../index.html"); 
    echo "aqui 2";
}

?>