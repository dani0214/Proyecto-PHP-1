<?php
include_once("ConexionBaseDatos.php");

function selectProvincias(){
    $conexion = conexion();
    $consulta = "SELECT provincias FROM provincias";
    $resultado = $conexion->query($consulta);
    $provincias = [];
    while ($fila = $resultado->fetch_assoc()) {
        $provincias[] = $fila;
    }
    return $provincias;  
}
function selectOperarios(){
    $conexion = conexion();
    $consulta = "SELECT user FROM usuarios";
    $resultado = $conexion->query($consulta);
    $operarios = [];
    while ($fila = $resultado->fetch_assoc()) {
        $operarios[] = $fila;
    }
    return $operarios;  
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
    if(isset($post["contacto"])){
        if(!validarTexto($post["contacto"],"contacto"))
            $hayError=true;
    }
    if(isset($post["telefono"])){
        if(!validarTelefono($post["telefono"]))
            $hayError=true;
    }
    if(isset($post["descripcion"])){
        if(!validarTexto($post["descripcion"],"descripcion"))
             $hayError=true;
    }
    if(isset($post["email"])){
        if(!validarEmail($post["email"]))
            $hayError=true;
        }
    if(isset($post["poblacion"])){
        if(!validarTexto($post["poblacion"],"poblacion"))
            $hayError=true;
    }
    if(isset($post["cod_postal"])){
        if(!validarCodPostal($post["cod_postal"]))
            $hayError=true;
    }
        if(!validarSelect($post["provincia"],"provincia"))
            $hayError=true;
        if(!validarSelect($post["operario"],"operario"))
            $hayError=true;
    if(isset($post["fecha_realizar"])){
        if(!validarFecha($post["fecha_realizar"]))
            $hayError=true;
    }
    if(isset($post["anotaciones"])){
    if(!validarTexto($post["anotaciones"],"anotaciones"))
        $hayError=true;
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

function validarTelefono($telefono){
    global $errores;
    if(empty($telefono)){
        $errores["telefono"]="El campo telefono no puede estar vacio";
        return false;
    }  else if(!preg_match("/0{0,2}([\+]?[\d]{1,3} ?)?([\(]([\d]{2,3})[)] ?)?[0-9][0-9 \-]{6,}( ?([xX]|([eE]xt[\.]?)) ?([\d]{1,5}))?/", $telefono)){
        $errores["telefono"]="Formato de telefono invalido";
        return false;
    } else 
        return true;
}

function validarEmail($email){
    global $errores;
    if(empty($email)){
        $errores["email"]="El campo email no puede estar vacio";
        return false;
    }  else if(!preg_match("/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/",$email)){
        $errores["email"]="El email introducido no es valida";
        return false;
    } else 
        return true;
}

function validarDireccion($direccion){
    global $errores;
    if(empty($direccion)){
        $errores["direccion"]="El campo direccion no puede estar vacio";
        return false;
    }  else if(!preg_match("/[a-zA-Z1-9À-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-Z1-9À-ÖØ-öø-ÿ]+\.?)*/"
        , $direccion)){
        $errores["direccion"]="La direccion introducida no es valida";
        return false;
    } else 
        return true;
}


function validarCodPostal($cod_postal){
    global $errores;
    if(empty($cod_postal)){
        $errores["cod_postal"]="El campo codigo postal no puede estar vacio";
        return false;
    }  else if(!preg_match("/^(?:0[1-9]|[1-4]\d|5[0-2])\d{3}$/",$cod_postal)){
        $errores["cod_postal"]="El formato introducido para el codigo postal no es valida";
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

function formatearFecha($post){
    list($dia, $mes, $año) = explode('/', $post);
    $fecha="$año-$mes-$dia";
    return $fecha;
}

function insertTarea($post){
    $fecha=formatearFecha($post['fecha_realizar']);
    $conexion = conexion();
    $consulta = "INSERT INTO 
        tareas (nombre_tarea, persona_contacto, tlf_contacto, email, poblacion, codigo_postal, 
        provincia, estado, operario_encargado, fecha_creacion, anotaciones_anterior, 
        fecha_realizacion, anotaciones_posteriores)
    VALUES( ".
        "'".$post["descripcion"]."',".
        "'".$post["contacto"]."',".
        "'".$post["telefono"]."',".
        "'". $post["email"]."',".
        "'".$post["poblacion"]."',".
        "'".$post["cod_postal"]."',".
        "'".$post["provincia"]."',".
        "'Pendiente',".
        "'".$post["operario"]."',".
        "'".date('Y-m-d')."',".
        "'".$post["anotaciones"]."',".
        "'$fecha',".
        "'')";
        if (mysqli_query($conexion, $consulta)) {
            //echo "Tarea creada correctamente";
       } else {
        echo "Error: <br> " . $consulta . "<br>" . mysqli_error($conexion);
   }
       
}