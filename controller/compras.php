<?php
require_once '../model/comprasModel.php';
$tipo = $_REQUEST['tipo'];
//instancia la clase modelo del modelo registrarproducto
$objCompra = new CompraModel();

if ($tipo == "registrar") {
  if ($_POST) {

    $idProducto = $_POST['idproducto'];
    $idtrabajador = $_POST['idtrabajador'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];

        if ($idProducto == "" || $idtrabajador == ""||$cantidad = ""|| $precio ==""){
            $arr_Respuesta = array('status'=> false, 'mensaje'=>'Error, campos vacios');
        }else{
            $arrCompra = $objCompra->registrarCompra($idProducto,$idtrabajador,$cantidad,$precio);
            if ($arrCompra->id > 0) {
                $arr_Respuesta = array('status'=> true,'mensaje'=>'Registro exitoso');
            } else {
                $arr_Respuesta = array('status'=> false, 'mensaje'=>'Error al registrar producto');
            }
            echo json_encode($arr_Respuesta);
      }
    } 
}



if ($tipo == "listar") {
    # code...
}
?>
