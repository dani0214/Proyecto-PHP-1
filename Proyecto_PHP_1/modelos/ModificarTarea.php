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

function formatearFecha($post){
    list($dia, $mes, $año) = explode('/', $post);
    $fecha="$año-$mes-$dia";
    return $fecha;
}

function desformatearFecha($post){
    list($año, $mes, $dia) = explode('-', $post);
    $fecha="$dia/$mes/$año";
    return $fecha;
}

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
    if(isset($post["fecha_realizar"])){
        if(!validarFecha($post["fecha_realizar"]))
            $hayError=true;
    }
    if(isset($post["estado"])){
        if(!validarSelect($post["estado"],"estado"))
            $hayError=true;
    }
    if(isset($post["anotaciones"])){
        if(!validarTexto($post["anotaciones"],"anotaciones"))
            $hayError=true;
        }
}

function updateEstado($post,$id){
    $fecha=formatearFecha($post['fecha_realizar']);
    $conexion = conexion();
    $consulta = "UPDATE tareas SET 
    estado='".$post["estado"]."',
    fecha_realizacion='$fecha',
    anotaciones_posteriores='".$post["anotaciones"]."' WHERE id='$id'";
        if (mysqli_query($conexion, $consulta)) {
            echo "Tarea actualizada correctamente";
       } else {
        echo "Error: <br> " . $consulta . "<br>" . mysqli_error($conexion);
   }
       
}

function validarTexto($texto,$campo){
global $errores;
if(empty($texto)){
    $errores[$campo]="El campo $campo no puede estar vacio";
    return false;
}  else if(!preg_match("/[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?)*/",$texto)){
    $errores[$campo]="La informacion introdcida no es valida";
    return false;
} else 
    return true;
}

function validarSelect($select,$campo){
    global $errores;
    if(empty($select)){
        $errores[$campo]="Debes seleccionar un campo";
        return false;
    } else 
        return true;
}

function validarFecha($fecha){
    global $errores;
    if(empty($fecha)){
        $errores["fecha_realizar"]="El campo fecha no puede estar vacio";
        return false;
    }  else if(!preg_match("/^(([1-9]{1})|([0]{1}[1-9]{1})|([1-3]{1}[0-1]{1})|([1-2]{1}[0-9]{1}))([-]|[\/])(([1-9]{1})|([0-0]{1}[1-9]{1})|([1-1]{1}[0-2]{1}))([-]|[\/])([0-9]{4})$/",$fecha)){
        $errores["fecha_realizar"]="El formato para fecha introducido no es valida";
        return false;
    } else 
        return true;
}
?>