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
                    $opciones = ' <a href="nuevoProducto"><button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button><a>
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>';
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
            $arrProducto = $objProducto->insertarProducto($codigo,$nombre,$detalle,$precio,$stock,$idCategoria,$fechaVencimiento,$imagen,$idProveedor);
            if ($arrProducto->id > 0) {
                $arr_Respuesta = array('status'=> true,'mensaje'=>'Registro exitoso');

            } else {
                $arr_Respuesta = array('status'=> false, 'mensaje'=>'producto ya existe');
            }
            echo json_encode($arr_Respuesta);
      }

    } 
}
?>
