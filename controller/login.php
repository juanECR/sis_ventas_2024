<?php
require '../model/usuarioModel.php';

$objpersona = new usuarioModel();

$tipo = $_GET['tipo'];

if ($tipo == "iniciar_sesion") {
 /*  print_r($_POST); */
 $usuario = trim($_POST['usuario']);
 $password = trim($_POST['password']);

 $arrPersona = $objpersona->buscarPersonaporDni($usuario); 
 var_dump($arrPersona);
 
 $arrRespuesta = array('status'=> false, 'msg'=>'');

/* print_r($arrPersona); */
if (empty($arrPersona)) {
    $arrRespuesta = array('status'=> false, 'msg'=>'Error, Usuario no esta registrado en el sistema');
}else{
    if (password_verify($password, $arrPersona->Clave)) {
        session_start();
        $_SESSION['secion_ventas_id'] = $arrPersona->Id;
        $_SESSION['secion_ventas_dni'] = $arrPersona->Nro_identidad;
        $_SESSION['secion_ventas_nombres'] = $arrPersona->$RazonSocial;

       $arrRespuesta =array('status'=>true,'msg'=>'Ingresar al sistema');
    }else{
        $arrRespuesta = array('status'=> false,'msg'=>'Error, Contraseña incorrecta');
    
}
echo json_encode($arrRespuesta);
}
}


if ($tipo == "cerrar_sesion") {
    session_start();
    session_unset();
    session_destroy();
    $arrRespuesta =  array('status'=> true);
    echo json_encode($arrRespuesta);
}

die;

?>