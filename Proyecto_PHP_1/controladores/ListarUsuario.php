<?php
// Requerimos del fichero donde se encuentran los metodos que necesitara 
// este controlador para la validacion y obtencion de datos en caso de necesitarlos
require_once ("modelos/ListarUsuario.php");
error_reporting(E_ALL ^ E_NOTICE);
// Incluimos la cabecera donde tenemos el menu de la app donde podremos seleccionar tareas que realizar
include("vistas/layout/layout.php");
// Al ser una tarea que solo puede realizar un administrador 
// Comprobamos que el usuario lo sea antes de hacer nada
if(!$_SESSION["admin"]){
// Comprobamos la variable que nos indica la pagina en la que nos encontramos
// En caso de no existir indica que nos encontramos en la primera pagina
    if(!$_GET["page"])
    $_GET["page"]=1;
// Obtenemos de la base de datos y de la url la informacion necesaria para la muestra correcta de la pagina
    $usuarios=getUsuarios(($_GET["page"]-1)*10,10);
    $numUsuarios=countUsuarios();
// Incluimos las vista correspondiente y llamamos al paginador para que nos muestre los elementos de 10 en 10
    include("vistas/ListarUsuario.php");
    include("modelos/Paginador.php");
    $obj = new AutoPagination($numUsuarios["num"], $_GET['page']);
    echo $obj->_paginateDetails();
} // En caso negativo mostramos una pagina donde le informamos que no puede acceder al contenido 
else
    include("vistas/AccesoProhibido.php");
?>