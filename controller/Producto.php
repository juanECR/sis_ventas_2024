<?php
require_once ('../model/productoModel.php');
$tipo = $_REQUEST['tipo'];
//instancia la clase modelo del modelo registrarproducto
$objProducto = new ProductoModel();

if ($tipo == "registrar") {

   // print_r($_POST);
    if ($_POST) {
        $codigo = $_POST('codigo');
        $nombre = $_POST('nombre');
        $detalle = $_POST('detalle');
        $precio = $_POST('precio');
        $stock = $_POST('stock');
        $idCategoria = $_POST('idCategoria');
        $fechaVencimiento = $_POST('fechaVencimiento');
        $imagen = $_POST('imagen');
        $idProveedor = $_POST('idProveedor');
        if ($codigo == "" || $nombre == ""||$detalle = ""|| $precio ==""||$stock == ""|| $idCategoria == ""|| $fechaVencimiento = "" ||$imagen = "" || $idProveedor = ""){
            $arr_respuesta = array('status'=>false,'mensaje'=>'error,campos vacios');
        }else{
            $arrProducto = $objProducto->registrarProducto($codigo,$nombre,$detalle,$precio,$stock,$idCategoria,$fechaVencimiento,$imagen,$idProveedor);
        }

    }
}

?>