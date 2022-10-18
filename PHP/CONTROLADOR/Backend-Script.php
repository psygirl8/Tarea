<?php

    require_once "../MODELO/ModeloUsuario.php";
    $obj = new ModeloPerson();
    $mostrar=$obj->getPerson_ALL();

    $myJSON = json_encode($mostrar);

    echo $myJSON;

?>
