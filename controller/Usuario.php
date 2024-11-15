<?php
require_once '../model/usuarioModel.php';
$tipo = $_REQUEST['tipo'];
//instancia la clase modelo del modelo registrarproducto
$objUsuario = new usuarioModel();

if ($tipo == "registrar") {
   // print_r($_POST);
  if ($_POST) {
  $Nro_identidad=$_POST['Nro_identidad'];
	$RazonSocial=$_POST['razon_social'];
	$Telefono=$_POST['telefono'];
	$Correo=$_POST['correo'];
	$Departamento=$_POST['departamento'];
	$Provincia=$_POST['provincia'];
	$Distrito=$_POST['distrito'];
	$CodPostal=$_POST['cod_postal'];
	$Direccion=$_POST['direccion'];
	$Rol =$_POST['rol'];
	/* $Clave = password_hash($_POST['clave'],PASSWORD_DEFAULT); */
  $secure_password = password_hash($Nro_identidad,PASSWORD_DEFAULT);

        if ($Nro_identidad== "" ||$RazonSocial== "" || $Telefono	== ""|| $Correo	== ""|| $Departamento == ""||$Provincia== "" ||$Distrito== ""|| $CodPostal== ""|| $Direccion== ""||$Rol== "" || $secure_password== "" ) {
          $arr_Respuesta = array('status'=> false, 'mensaje'=>'Error, campos vacios');
        }else{
            $arrUsuario = $objUsuario->registrarUsuario($Nro_identidad,$RazonSocial,$Telefono,$Correo,$Departamento,$Provincia,$Distrito,$CodPostal, $Direccion,$Rol, $secure_password);
            if ($arrUsuario->id > 0) {
                $arr_Respuesta = array('status'=> true,'mensaje'=>'Registro exitoso');
            } else {
                $arr_Respuesta = array('status'=> false, 'mensaje'=>'Error al registrar Usuario');
            }
            echo json_encode($arr_Respuesta);
      }

    } 
}

if($tipo=="listarTrabajadores"){
  //respuesta
  $arr_Respuesta = array('status'=> false, 'contenido'=>'');
  $arr_Trabajador = $objUsuario->obtener_trabajadores();
if (!empty($arr_Trabajador)) {
  //recordemos que el array es para agregar las opciones de las categorias
  for ($i=0; $i < count($arr_Trabajador); $i++) { 
      $idProveedor = $arr_Trabajador[$i]->Id;
      $razon_social = $arr_Trabajador[$i]->RazonSocial;
      $opciones = '';
      $arr_Trabajador[$i]->options = $opciones;
  }
  $arr_Respuesta['status'] = true;
  $arr_Respuesta['contenido'] = $arr_Trabajador;
}

  echo json_encode($arr_Respuesta);
}

if($tipo=="listarProveedores"){
  //respuesta
  $arr_Respuesta = array('status'=> false, 'contenido'=>'');
  $arr_Proveedor = $objUsuario->obtener_proveedores();
if (!empty($arr_Proveedor)) {
  //recordemos que el array es para agregar las opciones de las categorias
  for ($i=0; $i < count($arr_Proveedor); $i++) { 
      $idProveedor = $arr_Proveedor[$i]->Id;
      $razon_social = $arr_Proveedor[$i]->RazonSocial;
      $opciones = '';
      $arr_Proveedor[$i]->options = $opciones;
  }
  $arr_Respuesta['status'] = true;
  $arr_Respuesta['contenido'] = $arr_Proveedor;
}

  echo json_encode($arr_Respuesta);
}
?>
