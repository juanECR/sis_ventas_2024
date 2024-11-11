<?php 

require_once "../librerias/conexion.php"; 

class CompraModel{
    private $conexion;
    function __construct()
    {
        $this->conexion = new conexion();
        $this-> conexion = $this->conexion->connect();
    }
    public function registrarCompra($idproducto,$idtrabajador,$cantidad,$precio){
        $sql = $this->conexion->query("CALL RegistrarCompra('{$idproducto}','{$idtrabajador}','{$cantidad}','{$precio}')");
        $sql = $sql->fetch_object();
        return $sql;
     }
    
}
?>