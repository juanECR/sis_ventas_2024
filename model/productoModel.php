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


    public function insertarProducto($icodigo, $inombre, $idetalle, $iprecio, $istock, $iidCategoria, $ifechaVencimiento, $iimagen, $iidProveedor) {
        $sql = $this->conexion->query("CALL RegistrarProducto('{$icodigo}','{$inombre}','{$idetalle}','{$iprecio}','{$istock}','{$iidCategoria}','{$ifechaVencimiento}','{$iimagen}','{$iidProveedor}')");
        $sql = $sql->fetch_object();
        return $sql;
    }

/*     public function actualizar_imagen($id,$imagen){
       $sql = $this->conexion->query("UPDATE producto SET imagen='{$imagen}' WHERE Id ='{$id}'");
       return 1;
    } */


        //LISTAR productos
        public function obtener_productos(){
            $arrRespuesta = array();
            $respuesta = $this->conexion->query("SELECT * FROM producto");
    
            while ($objeto = $respuesta->fetch_object()) {
                array_push($arrRespuesta,$objeto);
            }
            return $arrRespuesta;
        }

}
?>