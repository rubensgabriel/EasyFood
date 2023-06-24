<?php
require_once('C:\xampp\htdocs\EasyFood\model\crud.php');
$sql = "SELECT * FROM cardapio;";
$crud = new Crud();
$resulcard = $crud->read($sql);
?>