<?php

    include ("conexion.php");
    $conexion = conexion();

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $nie = $_POST['nie'];

    $sql = "INSERT INTO alumnos (nombres, apellidos, nie) VALUES ('$nombres', '$apellidos', '$nie')";

    $consulta = mysqli_query($conexion, $sql);

    if ($consulta){
        Header("Location: alumnos.php");
    }

?>