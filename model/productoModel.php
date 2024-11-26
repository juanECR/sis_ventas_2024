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
    //obtener producto id
    public function Obtener_Producto_Id($id) {
        $sqli = $this->conexion->query("SELECT * FROM producto WHERE Id = '{$id}'");
        $sql1 = $sqli->fetch_object();
        return $sql1;
    }
    //registrar producto
    public function insertarProducto($icodigo, $inombre, $idetalle, $iprecio, $istock, $iidCategoria, $ifechaVencimiento, $iimagen, $iidProveedor,$tipo_archivo) {
        $sql = $this->conexion->query("CALL RegistrarProducto('{$icodigo}','{$inombre}','{$idetalle}','{$iprecio}','{$istock}','{$iidCategoria}','{$ifechaVencimiento}','{$iimagen}','{$iidProveedor}','{$tipo_archivo}')");
        $sql = $sql->fetch_object();
        return $sql;
    }

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