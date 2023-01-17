<?php
include_once("ConexionBaseDatos.php");

function getUsuario($id){
    $conexion = conexion();
    $consulta = "SELECT * FROM usuarios WHERE id=$id";
    $resultado = $conexion->query($consulta);
    $tareas = [];
    while ($fila = $resultado->fetch_assoc()) {
        $tareas[] = $fila;
    }
    return $tareas;  
}

function eliminarUsuario($id){
    $conexion = conexion();
    $consulta = "DELETE FROM usuarios WHERE id='$id'";
        if (mysqli_query($conexion, $consulta)) {
            echo "Usuario eliminado correctamente";
       } else {
        echo "Error: <br> " . $consulta . "<br>" . mysqli_error($conexion);
   }
       
}