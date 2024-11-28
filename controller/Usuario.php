<?php
require_once '../model/usuarioModel.php';
$tipo = $_REQUEST['tipo'];
//instancia la clase modelo del modelo registrarproducto
$objUsuario = new usuarioModel();

//LISTAR TODOS LOS USUARIOS
if ($tipo == "listar") {
  $arr_Respuesta = array('status'=> false, 'contenido'=>'');
  $arr_Usuario = $objUsuario->obtener_usuarios();

  if (!empty($arr_Usuario)) {
      //recordemos que el array es para agregar las opciones de las categorias
      for ($i=0; $i < count($arr_Usuario); $i++) { 
                  $Id              = $arr_Usuario[$i]->Id;
                  $Nro_identidad    = $arr_Usuario[$i]->Nro_identidad;
                  $RazonSocial          = $arr_Usuario[$i]->RazonSocial;
                  $Telefono         = $arr_Usuario[$i]->Telefono;
                  $Correo           = $arr_Usuario[$i]->Correo;
                  $Departamento     = $arr_Usuario[$i]->Departamento;
                  $Provincia        = $arr_Usuario[$i]->Provincia;
                  $Distrito            = $arr_Usuario[$i]->Distrito;
                  $CodPostal        = $arr_Usuario[$i]->CodPostal;
                  $Direccion            = $arr_Usuario[$i]->Direccion;
                  $Rol               = $arr_Usuario[$i]->Rol;
                  $Clave               = $arr_Usuario[$i]->Clave;
                  $Estado            = $arr_Usuario[$i]->Estado; 
                  $Estado == 1 ? $arr_Usuario[$i]->Estado = '<p class="btn btn-success">activo</p>':$arr_Usuario[$i]->Estado = '<p class="btn btn-danger">inactivo</p>';   // validacion usuario  
                  $FechaRegistro        = $arr_Usuario[$i]->FechaRegistro;
                  $opciones = ' <a href="nuevoUsuario"><button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button><a>
                  <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>';
                  $arr_Usuario[$i]->options = $opciones;
      }
      $arr_Respuesta['status'] = true;
      $arr_Respuesta['contenido'] = $arr_Usuario;
  }

  echo json_encode($arr_Respuesta);
}



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
    $Id              = $arr_Proveedor[$i]->Id;
    $Nro_identidad    = $arr_Proveedor[$i]->Nro_identidad;
    $RazonSocial          = $arr_Proveedor[$i]->RazonSocial;
    $Telefono         = $arr_Proveedor[$i]->Telefono;
    $Correo           = $arr_Proveedor[$i]->Correo;
    $Departamento     = $arr_Proveedor[$i]->Departamento;
    $Provincia        = $arr_Proveedor[$i]->Provincia;
    $Distrito            = $arr_Proveedor[$i]->Distrito;
    $CodPostal        = $arr_Proveedor[$i]->CodPostal;
    $Direccion            = $arr_Proveedor[$i]->Direccion;
    $Rol               = $arr_Proveedor[$i]->Rol;
    $Clave               = $arr_Proveedor[$i]->Clave;
    $Estado            = $arr_Proveedor[$i]->Estado; 
    $Estado == 1 ? $arr_Proveedor[$i]->Estado = '<p class="btn btn-success">activo</p>':$arr_Proveedor[$i]->Estado = '<p class="btn btn-danger">inactivo</p>';   // validacion usuario  
    $FechaRegistro        = $arr_Proveedor[$i]->FechaRegistro;
    $opciones = ' <a href="nuevoUsuario"><button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button><a>
    <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>';
    $arr_Proveedor[$i]->options = $opciones;
  }
  $arr_Respuesta['status'] = true;
  $arr_Respuesta['contenido'] = $arr_Proveedor;
}

  echo json_encode($arr_Respuesta);
}
?>
