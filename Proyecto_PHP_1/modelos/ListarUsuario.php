<?php
include_once("ConexionBaseDatos.php");

function countUsuarios(){
    $conexion = conexion();
    $consulta = "SELECT COUNT(*) as num FROM usuarios";
    $resultado = $conexion->query($consulta);
    $numero;
    while ($fila = $resultado->fetch_assoc()) {
        $numero = $fila;
    }
    return $numero;  
}

function getUsuarios($lista,$resultados){
    $conexion = conexion();
    $consulta = "SELECT * FROM usuarios LIMIT $lista,$resultados";
    $resultado = $conexion->query($consulta);
    $tareas = [];
    while ($fila = $resultado->fetch_assoc()) {
        $tareas[] = $fila;
    }
    return $tareas;  
}