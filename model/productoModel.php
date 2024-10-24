<?php
require_once "../librerias/conexion.php";

class ProductoModel{

    private $conexion;
    function __construct()
    {
        // this = esta
        $this->conexion = new conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function registrarProducto($codigo,$nombre,$detalle,$precio,$stock,$idCategoria,$fechaVencimiento,$imagen,$idProveedor){
       $sql = $this->conexion->query("CALL RegistrarProducto('{$codigo}','{$nombre}','{$detalle}','{$precio}','{$stock}','{$idCategoria}','{$fechaVencimiento}','{$imagen}','{$idProveedor}')");
       $sql = $sql->fetch_assoc();
       return $sql;
    }
}
?>