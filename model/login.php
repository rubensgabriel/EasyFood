<?php
require_once("../controller/conexao.php");
require_once("../model/crud.php");
$crud = new Crud();
$sql = "Select * from usuario";
$result = $crud->read($sql);
print_r($result);


?>