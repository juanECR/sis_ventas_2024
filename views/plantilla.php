<?php
require_once "./config/config.php";
require_once "./controller/vistas_control.php";

$mostrar = new VistasControlador();
$vistas = $mostrar->ObtenerVistaControlador();

if ($vistas == "login" || $vistas == "404") {
    require_once "./views/".$vistas.".php";
} else {
    include "include/header.php";
    include $vistas;
    include "include/footer.php";
}
?>