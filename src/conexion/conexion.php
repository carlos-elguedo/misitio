<?php

    $servidor = "localhost";
    $usuario = "root";
    $base_de_datos = "misitio";
    $contra = "";

    
    
    //$conexion = mysqli_connect ($servidor, $usuario, $contra) or die ("No se conecto al servidor: " . mysql_error());
    $conexion = new mysqli($servidor, $usuario, $contra, $base_de_datos);
    mysqli_select_db ($conexion, $base_de_datos) or die ("No se conecto a la base de datos: " . mysql_error());
    

?>