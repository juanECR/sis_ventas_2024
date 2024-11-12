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
	$Clave =$_POST['clave'];
  

        if ($Nro_identidad== "" ||$RazonSocial== "" || $Telefono	== ""|| $Correo	== ""|| $Departamento == ""||$Provincia== "" ||$Distrito== ""|| $CodPostal== ""|| $Direccion== ""||$Rol== "" || $Clave== "" ) {
          $arr_Respuesta = array('status'=> false, 'mensaje'=>'Error, campos vacios');
        }else{
            $arrUsuario = $objUsuario->registrarUsuario($Nro_identidad,$RazonSocial,$Telefono,$Correo,$Departamento,$Provincia,$Distrito,$CodPostal, $Direccion,$Rol, $Clave);
            if ($arrUsuario->id > 0) {
                $arr_Respuesta = array('status'=> true,'mensaje'=>'Registro exitoso');
            } else {
                $arr_Respuesta = array('status'=> false, 'mensaje'=>'Error al registrar Usuario');
            }
            echo json_encode($arr_Respuesta);
      }

    } 
}
?>
