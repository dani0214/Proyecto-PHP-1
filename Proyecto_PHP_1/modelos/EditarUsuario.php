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

function VerError($campo) {
    global $errores;
    if (isset($errores[$campo])) {
        echo '<span style="color:red">'.$errores[$campo].'</span>';
    }
}

function validarFormulario($post,$id){
    global $errores;
    global $hayError;
    $hayError=false;
    if(isset($post["usuario"])){
        if(!validarTexto($post["usuario"],$id,"usuario"))
            $hayError=true;
    }
    if(isset($post["contraseña1"])){
        if(!validarContraseña($post["contraseña1"],$post["contraseña2"]))
            $hayError=true;
    }
}

function validarTexto($texto,$id,$campo){
global $errores;
if(empty($texto)){
    $errores[$campo]="El campo $campo no puede estar vacio";
    return false;
}  else if(!preg_match("/[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?)*/",$texto)){
    $errores[$campo]="La informacion introdcida debe ser una cadena de texto";
    return false;
} else if(comprobarUsuario1($texto,$id)){
    if(!comprobarUsuario2($texto)){
        $errores[$campo]="El usuario introducido ya existe";
        return false;
    }
} else  
    return true;
}

function comprobarUsuario1($usuario,$id){
    $conexion = conexion();
    $consulta="SELECT * FROM usuarios WHERE user='$usuario'";
    $resultado = $conexion->query($consulta);
    $usuario = [];
    while ($fila = $resultado->fetch_assoc()) {
        $usuario[] = $fila;
    }
    if($id==$usuario["id"]){
        return true;
    }else return false;
}

function comprobarUsuario2($usuario){
    $conexion = conexion();
    $sel="SELECT * FROM usuarios WHERE user='$usuario'";
    $ejecutar=mysqli_query($conexion,$sel);
    $chequear_user=mysqli_num_rows($ejecutar);
    if($chequear_user==0){
        return true;
        exit();
    } else {
        return false;
        exit();
    }
}

function validarContraseña($contraseña1,$contraseña2){
    global $errores;
    if(empty($contraseña1)){
        $errores["contraseña1"]="El campo contraseña no puede estar vacio";
        return false;
    }  else if($contraseña1!=$contraseña2){
        $errores["contraseña2"]="Las contraseñas no coinciden";
        return false;
    } else 
        return true;
}


function updateUsuario($post,$id){
    $conexion = conexion();
    $consulta = "UPDATE usuarios SET 
    user='".$post["usuario"]."',
    passw='".$post["contraseña1"]."'
    WHERE id='$id'";
        if (mysqli_query($conexion, $consulta)) {
            echo "Tarea actualizada correctamente";
       } else {
        echo "Error: <br> " . $consulta . "<br>" . mysqli_error($conexion);
   }
       
}
