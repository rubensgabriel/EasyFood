<?php
require_once('C:\xampp\htdocs\EasyFood\model\crud.php');
$data = getdate();
$data1  = date('Y-m-d',$data[0]);

// $sql = "SELECT * FROM `promocao` WHERE DTHRINSERT = '$data1'";
$sql = "SELECT * FROM `promocao`";
$crud = new Crud();
$resultp = $crud->read($sql);
?>