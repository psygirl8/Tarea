<?php

class ModeloBD
{

  public function connect(){
    $server = 'localhost:3306';
    $usuario = 'root';
    $contraseña = '';
    

    $basededatos = 'USUARIOS';
    $BD = new mysqli($server, $usuario, $contraseña, $basededatos);
    if($BD->connect_error){
      die("BD falló" . $BD->connect_error);
    }
    return $BD;
  }

  public function sentencia_show(string $sql){
    $BD=$this->connect();
    $result=mysqli_query($BD,$sql);
    $mostrar=mysqli_fetch_array($result);
    return $mostrar;
  }
  public function sentencia_upload(string $sql){
    $BD=$this->connect();
    $result=mysqli_query($BD,$sql);
    $stmt = $BD->query($sql);
    return $stmt;
  }

  public function get_ALL(string $sql){
    $BD=$this->connect();
    $exec=mysqli_query($BD, $sql);
    if(mysqli_num_rows($exec)>0){
      $row= mysqli_fetch_all($exec);
      return $row;  
          
    }else{
      return $row=[];
    }
  }

}



?>