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
    
}
?>
