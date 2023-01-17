<?php
// Requerimos del fichero donde se encuentran los metodos que necesitara 
// este controlador para la validacion y obtencion de datos en caso de necesitarlos
require_once ("modelos/EliminarUsuario.php");
// Incluimos la cabecera donde tenemos el menu de la app donde podremos seleccionar tareas que realizar
include("vistas/layout/layout.php");
// Al ser una tarea que solo puede realizar un administrador 
// Comprobamos que el usuario lo sea antes de hacer nada
if(!$_SESSION["admin"]){
// Obtenemos de la base de datos y de la url la informacion necesaria para la muestra correcta de la pagina
    if($_GET["id"]){
        $id=$_GET["id"];
    }
    $usuario=getUsuario($id);
//Comprobamos que no ha mandado nada, por lo que mostramos la vista correspondiente
    if(!$_POST){
        include("vistas/EliminarUsuario.php"); 
// Una vez mandado un POST comprobamos la eleccion del usuario
// Si selecciona NO le devolveremos al inicio de la pagina
    }else if(!strcmp($_POST["eleccion"],"no")){
        var_dump($_POST);
        header("Location:?controlador=ListarUsuario");
// Si selecciona SI ejecutaremos la orden sql de eliminar al usuario seleccionado
    }else if(!strcmp($_POST["eleccion"],"si")){
        eliminarUsuario($id);
        header("Location:?controlador=ListarUsuario");
    }
} else
    include("vistas/AccesoProhibido.php");
?>