<?php
require_once('C:\xampp\htdocs\EasyFood\model\crud.php');
$codcompra = $_GET['codcompra'];
$sql = "DELETE FROM compra WHERE codcompra=$codcompra";
$crud = new Crud();
$resulcard = $crud->execute($sql);
?>