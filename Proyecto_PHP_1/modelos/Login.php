<?php

include_once("ConexionBaseDatos.php");

function checkUsuario($usuario){
    $conexion = conexion();
    $sel="SELECT * FROM usuarios WHERE user='$usuario'";
    $ejecutar=mysqli_query($conexion,$sel);
    $chequear_user=mysqli_num_rows($ejecutar);
    if($chequear_user==0){
        return false;
        exit();
    } else {
        return true;
        exit();
    }
}

    function checkAdmin($usuario){
        $conexion = conexion();
        $consulta="SELECT * FROM usuarios WHERE user='$usuario'";
        $resultado = $conexion->query($consulta);
        $user;
        while ($fila = $resultado->fetch_assoc()) {
            $user = $fila;
        }
        return $user; 
    }

    function loginUsuario($usuario,$passw){
        $conexion = conexion();
        $sel2="SELECT * FROM usuarios WHERE user='$usuario' AND passw='$passw'";
        $ejecutar2=mysqli_query($conexion,$sel2);
        $chequear_passw=mysqli_num_rows($ejecutar2);
        if($chequear_passw==0){
            return false;
            exit();
        } else {
            return true;
            exit();
        }
    }

    function VerError($campo) {
        global $errores;
        if (isset($errores[$campo])) {
            echo '<span style="color:red">'.$errores[$campo].'</span>';
        }
    }
    
        function validarUsuario($usuario,$passw){
            global $errores;
            global $hayError;
            $hayError=false;
            if(!checkUsuario($usuario)){
                $errores["usuario"]="El usuario introducido no existe, pruebe de nuevo";
                $hayError=true;
            }
            if(!loginUsuario($usuario,$passw)){
                $errores["contraseña"]="La contraseña introducida no coincide, pruebe de nuevo";
                $hayError=true;
            }
        }

?>