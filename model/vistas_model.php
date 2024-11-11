<?php
class VistaModelo{
    protected static function obtener_vista($vistas){
           $palabrasPermitidas =['usuario','producto', 'inicio','perfil','proHombre','ProMujer','nosotros','carrito','DetalleProducto','infoPago',
           'nuevoProducto','nuevaCategoria','nuevoUsuario','registrarCompras'];
           if (in_array($vistas,$palabrasPermitidas)) {
             if (is_file("./views/".$vistas.".php")) {
                $contenido = "./views/".$vistas.".php"; 
             }else {
               $contenido = "404";
             }
           }elseif($vistas == "login" || $vistas =="index") {
            $contenido = "login";
           }else {
             $contenido = "404";
           }
           return $contenido;
    }
}
?>

