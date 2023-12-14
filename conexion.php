<?php
    $bdhost="localhost";
    $bdusuario="root";
    $bdpass="";
    $bdnombre="integrador_cac";

    $conexion = mysqli_connect($bdhost,$bdusuario,$bdpass,$bdnombre);
        // Verifica la conexión
    if(mysqli_connect_errno()){
        //die("Conexión a la base de datos falló: " . $this->conexion->connect_error);
        echo "<br>Error al conectar a la base de datos ".mysqli_connect_errno();
    }
    else{
            //echo "<br>Conexion establecida<br>";
    } 



?>