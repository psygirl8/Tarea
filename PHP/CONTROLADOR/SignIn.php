<?php

    require_once "../MODELO/ModeloUsuario.php";


    $correo = strtoupper($_POST['Correo']); 
    $contraseña = $_POST['Contraseña'];


    /***** */

        $obj = new ModeloPerson();
        $mostrar=$obj->getPersona($correo, $contraseña);

        if ($mostrar['Correo']==$correo && $mostrar['Contraseña']==$contraseña) {
            //echo $mostrar['Correo'];
            header("Location: ./../HTML/PaginaDeInicio.html");
        }
    

        echo "<br><center><h1>".$correo."</h1></center>";


    /***** */

?>