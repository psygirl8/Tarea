<?php 

require_once "ModeloBD.php";


class ModeloPerson extends ModeloBD
{
    public function setPerson($correo, $contraseña, $nombre, $date)
    
    {
            $sql = "INSERT INTO USUARIOS (Correo, Contraseña, Nombre, Nacimiento) 
            VALUES ('$correo', '$contraseña', '$nombre', '$date')";
            $this->sentencia_subir($sql);
    }

    public function getPerson($correo,$contraseña){
        $sql="SELECT * from USUARIOS where (Correo, Contraseña) = ('$correo','$contraseña')";
        return $this->sentencia_mostrar($sql);
    
    }
    
    public function getPerson_ALL(){
        $sql="SELECT * from USUARIOS";
        return $this->get_ALL($sql);
    }
}

?>