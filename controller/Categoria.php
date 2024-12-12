<?php
require_once('../model/categoriaModel.php');

$tipo = $_REQUEST['tipo'];
//instanciar la categoria model
$objCategoria = new categoriaModel();


//listar categorias
if($tipo=="listar"){
    //respuesta
    $arr_Respuesta = array('status'=> false, 'contenido'=>'');
    $arr_Categorias = $objCategoria->obtener_categorias();
if (!empty($arr_Categorias)) {
    //recordemos que el array es para agregar las opciones de las categorias
    for ($i=0; $i < count($arr_Categorias); $i++) { 
        $id_categoria = $arr_Categorias[$i]->Id;
        $categoria = $arr_Categorias[$i]->Nombre;
        $detalle = $arr_Categorias[$i]->Detalle;
        $opciones = '<a href="editarCategoria/'.$id_categoria.'" class="btn btn-success"><i class="fa fa-pencil"></i></a>
        <a href="" class="btn btn-danger" onclick="eliminarCategoria('.$id_categoria.')" ><i class="fa fa-trash"></i></a>';
        $arr_Categorias[$i]->options = $opciones;
    }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arr_Categorias;
}

    echo json_encode($arr_Respuesta);
}


//                registrar categorias
if ($tipo == "registrar") {
    if ($_POST) {
        $nombre=$_POST['nombre'];
        $detalle=$_POST['detalle'];

        if ($nombre == ""||$detalle == ""){
            $arr_Respuesta = array('status'=> false,'mensaje'=>'Error, campos vacios');
        }else{
            $arrCategoria = $objCategoria->registrarCategoria($nombre,$detalle);
            if ($arrCategoria->id >= 1) {
                $arr_Respuesta = array('status'=>true,'mensaje'=>'Registro exitoso');
            } else {
                $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar categoria');
            }
            echo json_encode($arr_Respuesta);
      }

    } 
}

if ($tipo == "Actualizar") {
    if ($_POST) {
        $id_categoria = $_POST['id_categoria'];
        $nombre=$_POST['nombre'];
        $detalle=$_POST['detalle'];

        if ($nombre == ""||$detalle == ""){
            $arr_Respuesta = array('status'=> false,'mensaje'=>'Error, campos vacios');
        }else{
            $arrCategoria = $objCategoria->ActualizarCategoria($id_categoria,$nombre,$detalle);
            if ($arrCategoria->p_Id >= 1) {
                $arr_Respuesta = array('status'=>true,'mensaje'=>'Registro exitoso');
            } else {
                $arr_Respuesta = array('status'=>false, 'mensaje'=>'Error al registrar categoria');
            }
            echo json_encode($arr_Respuesta);
      }

    } 
}

if ($tipo == "ver") {

    $id_categoria = $_POST['id_categoria'];
    $arr_Respuesta = $objCategoria->obtener_categoria_id($id_categoria);

   if (empty($arr_Respuesta)) {
      $response = array('status' => false, 'mensaje'=> "error, no informacio");
   }else {
    $response = array('status' => true, 'mensaje'=> "datos encontrados", 'contenido'=> $arr_Respuesta);
   }
   echo json_encode($response);

}
?>