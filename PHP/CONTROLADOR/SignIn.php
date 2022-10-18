<?php

    require_once "../MODELO/ModeloUsuario.php";


    $correo = strtoupper($_POST['Correo']); 
    $contraseña = $_POST['Contraseña'];


    /***** */

        $obj = new ModeloPerson();

        if (($obj->getPerson($correo, $contraseña))==TRUE) {
            //echo $mostrar['Correo'];
            header("Location: ./../../HTML/PaginaDeInicio.html");
        }else {
            header("Location: ./../../HTML/PaginaDeRegistro.html");
        }
    

        echo "<br><center><h1>".$correo."</h1></center>";


    /***** */

?>