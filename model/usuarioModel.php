<?php 

require_once "../librerias/conexion.php"; 

class usuarioModel{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this-> conexion = $this->conexion->connect();
    }

    public function registrarUsuario($Nro_identidad, $RazonSocial, $Telefono, $Correo, $Departamento, $Provincia, $Distrito, $CodPostal, $Direccion,$Rol,$Clave){
        $sql = $this->conexion->query("CALL RegistrarUsuario('{$Nro_identidad}','{$RazonSocial}','{$Telefono}','{$Correo}','{$Departamento}','{$Provincia}','{$Distrito}','{$CodPostal}','{$Direccion}','{$Rol}','{$Clave}')");
        $sql = $sql->fetch_object();
        return $sql;
     }
     //listar personas
     public function obtener_usuario_id($id){
        $sql = $this->conexion->query("SELECT * FROM usuario WHERE Id ='{$id}'");
        $sqle = $sql->fetch_object();
        return $sqle;
    }

     //listar proveedores
     public function obtener_proveedores(){
        $arrRespuestaa = array();
        $respuestaa = $this->conexion->query("SELECT * FROM usuario WHERE Rol = 'proveedor'");
        while ($objeto = $respuestaa->fetch_object()) {
            array_push($arrRespuestaa,$objeto);
        }
        return $arrRespuestaa;
    }

    //listar trabajaadores
    public function obtener_trabajadores(){
        $arrRespuesta1 = array();
        $respuesta1 = $this->conexion->query("SELECT * FROM usuario WHERE Rol = 'trabajador'");

        while ($objeto1 = $respuesta1->fetch_object()) {
            array_push($arrRespuesta1,$objeto1);
        }
        return $arrRespuesta1;
    }

    //validar usuarios login
    public function buscarPersonaporDni($dni){
        $sql = $this->conexion->query("SELECT * FROM usuario WHERE Nro_identidad ='{$dni}'");
        $sql = $sql->fetch_object();
        return $sql;
    }
    
}
?>
