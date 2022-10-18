<?php

    require_once "../MODELO/ModeloUsuario.php";
    $obj = new ModeloPersona();
    $mostrar=$obj->getPerson_ALL();

    $myJSON = json_encode($mostrar);

    echo $myJSON;

?>
