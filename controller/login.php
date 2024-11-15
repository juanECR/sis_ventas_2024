<?php
require_once("../model/usuarioModel.php");

$objPersona = new usuarioModel();

$tipo = $_GET['tipo'];

if ($tipo == "iniciar_sesion") {
    // print_r($_POST);
    $usuario = trim($_POST['usuario']);
    $password = trim($_POST['password']);
    $arrResponse = array('status' => false, 'msg' => '');

    $arrPersona = $objPersona->buscarPersonaporDni($usuario);
    //   print_r($arrPersona);
    if (empty($arrPersona)) {
        $arrResponse = array('status' => false, 'msg' => 'Error, Usuario no esta registrado en el sistema');
    } else {
        if (password_verify($password, $arrPersona->Clave)) {
            session_start();
            $_SESSION['secion_ventas_id'] = $arrPersona->Id;
            $_SESSION['sesion_venta_dni'] = $arrPersona->Nro_identidad;
            $_SESSION['sesion_venta_nombres'] = $arrPersona->RazonSocial;
            $arrResponse = array('status' => true, 'msg' => 'Ingresar al sistema');
        } else {
            $arrResponse = array('status' => false, 'msg' => 'Error, Contraseña incorrecta');
        }
    }
    echo json_encode(($arrResponse));
}


if ($tipo == "cerrar_sesion") {
    session_start();
    session_unset();
    session_destroy();
    $arrResponse = array('status' => true);
    echo json_encode($arrResponse);
}
die;
?>