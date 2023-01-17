<?php
include_once("ConexionBaseDatos.php");

function getTarea($id){
    $conexion = conexion();
    $consulta = "SELECT * FROM tareas WHERE id=$id";
    $resultado = $conexion->query($consulta);
    $tareas = [];
    while ($fila = $resultado->fetch_assoc()) {
        $tareas[] = $fila;
    }
    return $tareas;  
}

function eliminarTarea($id){
    $conexion = conexion();
    $consulta = "DELETE FROM tareas WHERE id='$id'";
        if (mysqli_query($conexion, $consulta)) {
            echo "Tarea eliminada correctamente";
       } else {
        echo "Error: <br> " . $consulta . "<br>" . mysqli_error($conexion);
   }
       
}