<?php
// Requerimos del fichero donde se encuentran los metodos que necesitara 
// este controlador para la validacion y obtencion de datos en caso de necesitarlos
require_once ("modelos/EditarUsuario.php");
error_reporting(E_ALL ^ E_NOTICE);
// Incluimos la cabecera donde tenemos el menu de la app donde podremos seleccionar tareas que realizar
include("vistas/layout/layout.php");
$hayError=false;
$errores=[];
// Obtenemos de la base de datos y de la url la informacion necesaria para la muestra correcta de la pagina
    if($_GET["id"]){
        $id=$_GET["id"];
    }
    $user=getUsuario($id);
//Comprobamos que no ha mandado nada, por lo que mostramos la vista correspondiente
    if(!$_POST){
        include("vistas/EditarUsuario.php");
    } else {
        validarFormulario($_POST,$id);
// Una vez mandado un POST comprobamos los datos y los validamos en caso de haber error
// Volvemos a mostrar la vista pero con los errores cometidos para que el usuario los corrija
        if($hayError){
            include("vistas/EditarUsuario.php");
            var_dump($_POST);
        } else {
// Si no hay error pasamos la direccion al controlador frontal para que la procese y 
// Efectuamos la edicion del usuario en la base de datos
            updateUsuario($_POST,$id);
            header("Location:?controlador=MostrarTareas");
        }

    }
?>