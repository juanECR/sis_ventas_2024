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

     //LISTAR COMPRAS
     public function obtener_compras(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM compras");

        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta,$objeto);
        }
        return $arrRespuesta;
    }
    
}
?>