<?php
require_once '../model/productoModel.php';
require_once '../model/categoriaModel.php';
require_once '../model/usuarioModel.php';

$tipo = $_REQUEST['tipo'];

//instancia la clase modelo del modelo registrarproducto
$objProducto = new ProductoModel();
$objCategoria = new categoriaModel();
$objUsuario = new usuarioModel();


//LISTAR TODOS LOS PRODUCTOS  /COMPRAS/Productos
if ($tipo == "listar") {
    $arr_Respuesta = array('status'=> false, 'contenido'=>'');
    $arr_Producto = $objProducto->obtener_productos();

    if (!empty($arr_Producto)) {
        //recordemos que el array es para agregar las opciones de las categorias
        for ($i=0; $i < count($arr_Producto); $i++) { 
                    $idProducto      = $arr_Producto[$i]->Id;
                    $CodProdcuto    = $arr_Producto[$i]->Codigo;
                    $nombre          = $arr_Producto[$i]->Nombre;
                    $Precio         = $arr_Producto[$i]->Precio;
                    $Stock           = $arr_Producto[$i]->Stock;
                    $IdCategoria     = $arr_Producto[$i]->IdCategoria;
                    $r_categoria      = $objCategoria->obtener_categoria_id($IdCategoria);
                    $arr_Producto[$i]->categoria =$r_categoria;
                    $fechaVencimiento = $arr_Producto[$i]->FechaVencimiento;
                    $imagen            = $arr_Producto[$i]->imagen;
                    $idProveedor        = $arr_Producto[$i]->IdProveedor;
                    $res_proveedor      = $objUsuario->obtener_usuario_id($idProveedor);
                    $arr_Producto[$i]->proveedor = $res_proveedor;
                    $opciones = '<a href="'.BASE_URL.'editarProducto/'.$idProducto.'"><button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></a>
                    <button class="btn btn-danger btn-sm" onclick="eliminar_producto('.$idProducto.')"><i class="fas fa-trash-alt"></i></button>';
                    $arr_Producto[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Producto;
    }

    echo json_encode($arr_Respuesta);
}



//REGISTRAR PRODUCTOS
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
        $imagen = "imagen";
        $idProveedor = $_POST['idProveedor'];

        if ($codigo == "" || $nombre == ""||$detalle == ""|| $precio ==""||$stock == ""|| $idCategoria == ""|| $fechaVencimiento == "" ||$imagen == "" || $idProveedor ==""){
            $arr_Respuesta = array('status'=> false, 'mensaje'=>'Error, campos vacios');
        }else{
            //cargar archivos
            $archivo = $_FILES['imagen']['tmp_name'];
            $destino = '../assets/img_productos/';
            $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));
            $arrProducto = $objProducto->insertarProducto($codigo,$nombre,$detalle,$precio,$stock,$idCategoria,$fechaVencimiento,$imagen,$idProveedor,$tipoArchivo);

            if ($arrProducto->id_n > 0) {
                $arr_Respuesta = array('status'=> true,'mensaje'=>'Registro exitoso');

                $nombre = $arrProducto->id_n. '.' .$tipoArchivo;
                if (move_uploaded_file($archivo, $destino . '' . $nombre)) {
                } else {
                    $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro Exitoso, error al subir imagen');
                }

            } else {
                $arr_Respuesta = array('status'=> false, 'mensaje'=>'producto ya existe');
            }
            echo json_encode($arr_Respuesta);
      }

    }
}


if ($tipo == 'ver') {
    /* print_r($_POST); */
    $id_producto = $_POST['id_producto'];
    $arr_Respuesta = $objProducto->ver_producto($id_producto);
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

//REGISTRAR PRODUCTOS
if ($tipo == "Actulizar") {

    // print_r($_POST);
    // echo $_FILES['imagen']['name'];
 
   if ($_POST) {
         $id_producto = $_POST['id_producto'];
         $codigo = $_POST['codigo'];
         $nombre = $_POST['nombre'];
         $detalle = $_POST['detalle'];
         $precio = $_POST['precio'];
         $idCategoria = $_POST['idCategoria'];
         $fechaVencimiento = $_POST['fechaVencimiento'];
         $imagen = "imagen";
         $idProveedor = $_POST['idProveedor'];
 
         if ($codigo == "" || $nombre == ""||$detalle == ""|| $precio ==""|| $idCategoria == ""|| $fechaVencimiento == "" ||$imagen == "" || $idProveedor ==""){
             $arr_Respuesta = array('status'=> false, 'mensaje'=>'Error, campos vacios');
         }else{
             //cargar archivos
             $archivo = $_FILES['imagen']['tmp_name'];
             $destino = '../assets/img_productos/';
             $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));
             $arrProducto = $objProducto->actualizar_producto($id_producto,$codigo,$nombre,$detalle,$precio,$idCategoria,$fechaVencimiento,$imagen,$idProveedor,$tipoArchivo);
 
             if ($arrProducto->p_Id > 0) {
                 $arr_Respuesta = array('status'=> true,'mensaje'=>'Registro exitoso');
 
                 $nombre = $arrProducto->p_Id. '.' .$tipoArchivo;
                 if (move_uploaded_file($archivo, $destino . '' . $nombre)) {
                 } else {
                     $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro Exitoso, error al subir imagen');
                 }
 
             } else {
                 $arr_Respuesta = array('status'=> false, 'mensaje'=>'producto ya existe');
             }
             echo json_encode($arr_Respuesta);
       }
 
     }
 }
 

 if ($tipo == 'eliminar') {
    /* print_r($_POST); */
    $id_producto = $_POST['id_producto'];
    $arr_Respuesta = $objProducto->eliminar_producto($id_producto);
   if (empty($arr_Respuesta)) {
      $response = array('status' => false, 'mensaje'=> "error, no informacion");
   }else {
    $response = array('status' => true, 'mensaje'=> "Elimnado exitosamente");
   }
   echo json_encode($response);

}
?>
