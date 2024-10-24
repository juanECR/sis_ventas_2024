<?php
require_once ('../model/categoriaModel.php');
$tipo = $_REQUEST['tipo'];

//instancia la clase modelo del modelo registrarproducto
$objCategoria = new CategoriaModel();

if ($tipo == "listar") {
   $arr_respuesta = array('status'=> false, 'contenido'=>'');
   $arr_Categorias = $objCategoria->obtener_categorias();

   print_r($arr_Categorias);

}





?>