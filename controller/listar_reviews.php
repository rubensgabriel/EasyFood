<?php
require_once('C:\xampp2\htdocs\Trabalho doida\EasyFood\model\crud.php');
$sql = "SELECT r.DESCRICAO,r.IMAGEM,u.NOME FROM reviews r INNER JOIN usuario u ON u.CODUSUARIO = r.CODUSUARIO;";
$crud = new Crud();
$result = $crud->read($sql);
?>