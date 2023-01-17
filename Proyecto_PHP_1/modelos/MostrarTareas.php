<?php
include_once("ConexionBaseDatos.php");

function countTareas(){
    $conexion = conexion();
    $consulta = "SELECT COUNT(*) as num FROM tareas";
    $resultado = $conexion->query($consulta);
    $numero;
    while ($fila = $resultado->fetch_assoc()) {
        $numero = $fila;
    }
    return $numero;  
}

function countTareasAvanzadas($post){
    $conexion = conexion();
    $consulta = "SELECT COUNT(*) as num FROM tareas WHERE ".$post["campo_busqueda"].$post["criterio_busqueda"].
    "'".$post["valor_busqueda"]."'";
    $resultado = $conexion->query($consulta);
    $numero;
    while ($fila = $resultado->fetch_assoc()) {
        $numero = $fila;
    }
    return $numero;  
}

function getTareas($lista,$resultados){
    $conexion = conexion();
    $consulta = "SELECT * FROM tareas LIMIT $lista,$resultados";
    $resultado = $conexion->query($consulta);
    $tareas = [];
    while ($fila = $resultado->fetch_assoc()) {
        $tareas[] = $fila;
    }
    return $tareas;  
}

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

function busquedaAvanzada($campo,$criterio,$valor,$lista,$resultados){
    $conexion = conexion();
    $consulta = "SELECT * FROM tareas WHERE $campo$criterio'$valor'LIMIT $lista,$resultados";
    $resultado = $conexion->query($consulta);
    $tareas = [];
    while ($fila = $resultado->fetch_assoc()) {
        $tareas[] = $fila;
    }
    return $tareas;  
}
