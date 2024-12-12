<?php 

require_once "../librerias/conexion.php"; 

class categoriaModel{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this-> conexion = $this->conexion->connect();
    }
    public function obtener_categorias(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM categoria");

        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta,$objeto);
        }
        return $arrRespuesta;
    }
    //obtener categoiria id / Productos.php
    public function obtener_categoria_id($id){
        $sql = $this->conexion->query("SELECT * FROM categoria WHERE Id ='{$id}'");
        $sql1 = $sql->fetch_object();
        return $sql1;
    }

    public function registrarCategoria($nombre,$detalle){
        $sql = $this->conexion->query("CALL RegistrarCategoria('{$nombre}','{$detalle}')");
        $sql = $sql->fetch_object();
        return $sql;
     }

     
     public function ActualizarCategoria($id,$nombre,$detalle){
        $sqlin = $this->conexion->query("CALL ActualizarCategoria('{$id}','{$nombre}','{$detalle}')");
        $sqlas = $sqlin->fetch_object();
        return $sqlas;
     }
}
?>
