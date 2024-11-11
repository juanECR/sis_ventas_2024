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

 /*    public function registrarProducto($codigo,$nombre,$detalle,$precio,$stock,$idCategoria,$fechaVencimiento,$imagen,$idProveedor){
       $sql = $this->conexion->query("CALL RegistrarProducto('{$codigo}','{$nombre}','{$detalle}','{$precio}','{$stock}','{$idCategoria}','{$fechaVencimiento}','{$imagen}','{$idProveedor}')");
       $sql = $sql->fetch_object();
       return $sql;
    } */
    public function registrarProducto($codigo, $nombre, $detalle, $precio, $stock, $idCategoria, $fechaVencimiento, $imagen, $idProveedor) {
        // Verificar el valor de idProveedor
        if (empty($idProveedor)) {
            throw new Exception("El proveedor con ID está vacío.");
        }
        
        // Verificar si el idProveedor existe en la tabla usuario
        $query = $this->conexion->query("SELECT COUNT(*) AS count FROM usuario WHERE Id = '{$idProveedor}'");
        $result = $query->fetch_object();
    
        // Si el idProveedor no existe en la tabla usuario, lanzar un error
        if ($result->count == 0) {
            throw new Exception("El proveedor con ID {$idProveedor} no existe.");
        }
    
        // Si el proveedor existe, proceder con la inserción del producto
        $sql = $this->conexion->query("CALL RegistrarProducto('{$codigo}','{$nombre}','{$detalle}','{$precio}','{$stock}','{$idCategoria}','{$fechaVencimiento}','{$imagen}','{$idProveedor}')");
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