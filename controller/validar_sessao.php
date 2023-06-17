<?php
session_start();
if(isset($_SESSION['NOME'])){
  $usuario = $_SESSION['NOME']; 
  $id_usuario = $_SESSION['ID_USUARIO'];
}
else{
  header('location:./index.html');
}
?>