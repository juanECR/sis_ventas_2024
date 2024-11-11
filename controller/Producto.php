<?php
require_once '../model/productoModel.php';
$tipo = $_REQUEST['tipo'];
//instancia la clase modelo del modelo registrarproducto
$objProducto = new ProductoModel();

if ($tipo == "registrar") {

   // print_r($_POST);
   // echo $_FILES['imagen']['name'];

  if ($_POST) {
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $idCategoria = $_POST['idCategoria'];
        $fechaVencimiento = $_POST['fechaVencimiento'];
        $imagen = 'imagen';
        $idProveedor = (int)$_POST['idProveedor'];

        if ($codigo == "" || $nombre == ""||$detalle = ""|| $precio ==""||$stock == ""|| $idCategoria == ""|| $fechaVencimiento = "" ||$imagen = "" || $idProveedor = ""){
            $arr_Respuesta = array('status'=> false, 'mensaje'=>'Error, campos vacios');
        }else{
            $arrProducto = $objProducto->registrarProducto($codigo,$nombre,$detalle,$precio,$stock,$idCategoria,$fechaVencimiento,$imagen,$idProveedor);
            if ($arrProducto->Id > 0) {
                $arr_Respuesta = array('status'=> true,'mensaje'=>'Registro exitoso');
                //cargar archivos 
  /*                  $archivo = $_FILES['imagen']['tmp_name'];
                   $destino = './assets/img_productos/';
                   $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"],PATHINFO_EXTENSION));
                   $nombre = $arrProducto->id.".".$tipoArchivo;
                   if (move_uploaded_file($archivo,$destino.$nombre)) {
                     $arr_imagen = $objProducto->actualizar_imagen($id,$nombre);
                   }else {
                    $arr_respuesta = array('status'=>true,'mensaje'=>'registro exitoso, error al subir imagen');
                   } */

            } else {
                $arr_Respuesta = array('status'=> false, 'mensaje'=>'Error al registrar producto');
            }
            echo json_encode($arr_Respuesta);
      }

    } 
} 



if ($tipo == "listar") {

    $arr_Respuesta = array('status'=> false, 'contenido'=>'');
    $arr_Producto = $objProducto->obtener_productos();
if (!empty($arr_Producto)) {
    //recordemos que el array es para agregar las opciones de las categorias
    for ($i=0; $i < count($arr_Producto); $i++) { 
        $idProducto = $arr_Producto[$i]->Id;
        $nombre = $arr_Producto[$i]->Nombre;
        $opciones = '';
        $arr_Producto[$i]->options = $opciones;
    }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arr_Producto;
}

    echo json_encode($arr_Respuesta);
}
?>
