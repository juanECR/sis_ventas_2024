<?php
require_once '../model/comprasModel.php';
require_once '../model/productoModel.php';
require_once '../model/usuarioModel.php';

$tipo = $_REQUEST['tipo'];
//instancia la clase modelo del modelo registrarproducto
$objCompra = new CompraModel();
$objProducto = new ProductoModel();
$objUsuario = new usuarioModel();

//LISTAR COMPRAS
if ($tipo == "listar") {
    $arr_Respuesta = array('status'=> false, 'contenido'=>'');
    $arr_Compra = $objCompra->obtener_compras();

    if (!empty($arr_Compra)) {
        //recordemos que el array es para agregar las opciones de las categorias
        for ($i=0; $i < count($arr_Compra); $i++) { 
                    $idCompra      = $arr_Compra[$i]->Id;
                    $idProducto      = $arr_Compra[$i]->IdProducto;
                    $r_producto      = $objProducto->Obtener_Producto_Id($idProducto);
                    $arr_Compra[$i]->producto =$r_producto;
                    $idtrabajador = $arr_Compra[$i]->IdTrabajador;
                    $r_trabajador      = $objUsuario->obtener_usuario_id($idtrabajador);
                    $arr_Compra[$i]->usuario = $r_trabajador;
                    $cantidad = $arr_Compra[$i]->Cantidad;
                    $precio = $arr_Compra[$i]->Precio;
                    $f_compra = $arr_Compra[$i]->FechaCompra;
                    $opciones = ' <a href="editarCompra/'.$idCompra.'"><button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button><a>
                    <button class="btn btn-danger btn-sm"onclick="eliminarCompra('.$idCompra.')" ><i class="fas fa-trash-alt"></i></button>';
                    $arr_Compra[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Compra;
    }

    echo json_encode($arr_Respuesta);
}

if ($tipo == "ver") {
    $id_compra = $_POST['id_compra'];
    $arr_Respuesta = $objCompra->obtener_compraId($id_compra);
 /*    $res_proveedor      = $objUsuario->obtener_usuario_id($arr_Respuesta->IdProveedor);
    $arr_Respuesta->IdProveedor = $res_proveedor->RazonSocial ; */
   /*  print_r($arr_Respuesta); */
   if (empty($arr_Respuesta)) {
      $response = array('status' => false, 'mensaje'=> "error, no informacio");
   }else {
    $response = array('status' => true, 'mensaje'=> "datos encontrados", 'contenido'=> $arr_Respuesta);
   }
   echo json_encode($response);
}



if ($tipo == "registrar") {
  if ($_POST) {

    $idProducto = $_POST['idproducto'];
    $idtrabajador = $_POST['idtrabajador'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];

        if ($idProducto == "" || $idtrabajador == ""||$cantidad == ""|| $precio ==""){
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

if ($tipo == "Actualizar") {
    if ($_POST) {
      $idCompra = $_POST['id_compra'];
      $idProducto = $_POST['idproducto'];
      $idtrabajador = $_POST['idtrabajador'];
      $cantidad = $_POST['cantidad'];
      $precio = $_POST['precio'];
  
          if ($idProducto == "" || $idtrabajador == ""||$cantidad == ""|| $precio ==""){
              $arr_Respuesta = array('status'=> false, 'mensaje'=>'Error, campos vacios');
          }else{
              $arrCompra = $objCompra->ActualizarCompra($idCompra,$idProducto,$idtrabajador,$cantidad,$precio);
              if ($arrCompra->id > 0) {
                  $arr_Respuesta = array('status'=> true,'mensaje'=>'Registro exitoso');
              } else {
                  $arr_Respuesta = array('status'=> false, 'mensaje'=>'Error al registrar producto');
              }
              echo json_encode($arr_Respuesta);
        }
      } 
  }
?>
