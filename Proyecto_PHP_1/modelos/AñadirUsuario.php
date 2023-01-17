<?php
include_once("ConexionBaseDatos.php");

function VerError($campo) {
    global $errores;
    if (isset($errores[$campo])) {
        echo '<span style="color:red">'.$errores[$campo].'</span>';
    }
}

function validarFormulario($post){
    global $errores;
    global $hayError;
    $hayError=false;
    if(isset($post["usuario"])){
        if(!validarTexto($post["usuario"],"usuario"))
            $hayError=true;
    }
    if(isset($post["contraseña1"])){
        if(!validarContraseña($post["contraseña1"],$post["contraseña2"]))
            $hayError=true;
    }
}

function validarTexto($texto,$campo){
global $errores;
if(empty($texto)){
    $errores[$campo]="El campo $campo no puede estar vacio";
    return false;
}  else if(!preg_match("/[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?)*/",$texto)){
    $errores[$campo]="La informacion introdcida debe ser una cadena de texto";
    return false;
} else if(!comprobarUsuario($texto)){
    $errores[$campo]="El usuario introducido ya existe";
    return false;
} else  
    return true;
}

function comprobarUsuario($usuario){
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


function insertUsuario($post){
    $conexion = conexion();
    $consulta = "INSERT INTO 
        usuarios (user, passw,admin)
    VALUES( ".
        "'".$post["usuario"]."',".
        "'".$post["contraseña1"]."',".
        "'".$post["eleccion"]."')";
        if (mysqli_query($conexion, $consulta)) {
            //echo "Tarea creada correctamente";
       } else {
        echo "Error: <br> " . $consulta . "<br>" . mysqli_error($conexion);
   }
       
}