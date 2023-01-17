<?php
// Requerimos del fichero donde se encuentran los metodos que necesitara 
// este controlador para la validacion y obtencion de datos en caso de necesitarlos
require_once ("modelos/Login.php");
error_reporting(E_ALL ^ E_NOTICE);
$hayError=false;
$errores=[];
//Comprobamos que no ha mandado nada, por lo que mostramos la vista correspondiente
if(!$_POST){
    include("vistas/Login.php");
} else {
// Una vez mandado un POST comprobamos los datos y los validamos en caso de haber error
// Volvemos a mostrar la vista pero con los errores cometidos para que el usuario los corrija
    validarUsuario($_POST["usuario"],$_POST["contraseña"]);
    if($hayError){
        include("vistas/Login.php");
    } else {
// Creamos la sesion donde guardamos la informacion del usuario ya identificado para su uso en la app        
// Si no hay error pasamos la direccion al controlador frontal para que la procese
        $_SESSION=checkAdmin($_POST["usuario"]);
        header("Location:?controlador=MostrarTareas");
    }
}
?>