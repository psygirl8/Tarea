<?php 

require_once "ModeloBD.php";


class ModeloPerson extends ModeloBD
{
    public function setPerson($correo, $contraseña, $nombre, $date)
    
    {
            $sql = "INSERT INTO registro (Correo, Contraseña, Nombre, Nacimiento) 
            VALUES ('$correo', '$contraseña', '$nombre', '$date')";
            $this->sentencia_upload($sql);
    }

    public function getPerson($correo,$contraseña){
        $sql="SELECT * from registro where (Correo, Contraseña) = ('$correo','$contraseña')";
        return $this->sentencia_show($sql);
    
    }
    
    public function getPerson_ALL(){
        $sql="SELECT * from registro";
        return $this->get_ALL($sql);
    }
}

?>