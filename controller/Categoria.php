<?php
require_once('../model/categoriaModel.php');

$tipo = $_REQUEST['tipo'];
//instanciar la categoria model
$objCategoria = new categoriaModel();

if($tipo=="listar"){
    //respuesta
    $arr_Respuesta = array('status'=> false, 'contenido'=>'');
    $arr_Categorias = $objCategoria->obtener_categorias();
if (!empty($arr_Categorias)) {
    //recordemos que el array es para agregar las opciones de las categorias
    for ($i=0; $i < count($arr_Categorias); $i++) { 
        $id_categoria = $arr_Categorias[$i]->Id;
        $categoria = $arr_Categorias[$i]->Nombre;
        $opciones = '<a href="" class="btn btn-success"><i class="fa fa-pencil"></i></a>';
        $arr_Categorias[$i]->options = $opciones;
    }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arr_Categorias;
}

    echo json_encode($arr_Respuesta);
}

if ($tipo == "registrar") {
    if ($_POST) {
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];

        if ( $nombre == ""||$detalle = ""){
            $arr_Respuesta = array('status'=> false, 'mensaje'=>'Error, campos vacios');
        }else{
            $arrCategoria = $objCategoria->registrarCategoria($nombre,$detalle);
            if ($arrCategoria->id > 0) {
                $arr_Respuesta = array('status'=> true,'mensaje'=>'Registro exitoso');
            } else {
                $arr_Respuesta = array('status'=> false, 'mensaje'=>'Error al registrar categoria');
            }
            echo json_encode($arr_Respuesta);
      }

    } 
}
?>