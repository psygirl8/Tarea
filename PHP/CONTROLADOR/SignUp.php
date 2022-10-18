<?php

    require_once "../MODELO/ModeloUsuario.php";


    $correo = strtoupper($_POST['Correo']);
    $contraseña = $_POST['Contraseña'];
    $nombre = $_POST['Nombre'];
    $date = $_POST['Nacimiento'];



    /***** */

    
        if (!empty($correo) && !empty($contraseña) && !empty($nombre) && !empty($date)) {
        $obj = new ModeloPerson();
        $obj->setPerson($correo, $contraseña, $nombre, $date);
        header("Location: ./../index.html");
        } 

        echo "<center><h1>".$date."</h1></center>";
        echo $sql;

    /***** */
?>