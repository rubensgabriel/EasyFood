<?php
require_once('C:\xampp\htdocs\EasyFood\model\crud.php');
if(isset($_GET['codcategoria']))
{
 $categoria = $_GET['codcategoria'];
 $sql = "SELECT * FROM cardapio WHERE CATEGORIA = $categoria";
 $crud = new Crud();
 $resulcard = $crud->read($sql);
}else{
 $sql = "SELECT * FROM cardapio;";
 $crud = new Crud();
 $resulcard = $crud->read($sql);

}

?>