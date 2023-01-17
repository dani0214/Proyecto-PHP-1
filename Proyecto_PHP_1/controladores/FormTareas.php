<?php
// Requerimos del fichero donde se encuentran los metodos que necesitara 
// este controlador para la validacion y obtencion de datos en caso de necesitarlos
require_once ("modelos/FormTarea.php");
error_reporting(E_ALL ^ E_NOTICE);
// Incluimos la cabecera donde tenemos el menu de la app donde podremos seleccionar tareas que realizar
include("vistas/layout/layout.php");
// Al ser una tarea que solo puede realizar un administrador 
// Comprobamos que el usuario lo sea antes de hacer nada
if(!$_SESSION["admin"]){
$hayError=false;
$errores=[];
// Obtenemos de la base de datos y de la url la informacion necesaria para la muestra correcta de la pagina
$provincias=selectProvincias();
$operarios=selectOperarios();
//Comprobamos que no ha mandado nada, por lo que mostramos la vista correspondiente
    if(!$_POST){
        include("vistas/FormTareas.php");
    } else {
// Una vez mandado un POST comprobamos los datos y los validamos en caso de haber error
// Volvemos a mostrar la vista pero con los errores cometidos para que el usuario los corrija
        validarFormulario($_POST);
        if($hayError){
            include("vistas/FormTareas.php");
        } else {
// Si no hay error pasamos la direccion al controlador frontal para que la procese y 
// Efectuamos la insercion de la tarea en la base de datos
            insertTarea($_POST);
            header("Location:?controlador=MostrarTareas");
        }
    }
} // En caso negativo mostramos una pagina donde le informamos que no puede acceder al contenido
 else
    include("vistas/AccesoProhibido.php");
?>