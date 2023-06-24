<?php
require_once('C:\xampp2\htdocs\Trabalho doida\EasyFood\model\crud.php');
$sql = "SELECT * FROM cardapio;";
$crud = new Crud();
$resulcard = $crud->read($sql);
?>