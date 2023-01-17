<?php
// Requerimos del fichero donde se encuentran los metodos que necesitara 
// este controlador para la validacion y obtencion de datos en caso de necesitarlos
require_once ("modelos/MostrarTareas.php");
error_reporting(E_ALL ^ E_NOTICE);
// Incluimos la cabecera donde tenemos el menu de la app donde podremos seleccionar tareas que realizar
include("vistas/layout/layout.php");
// Comprobamos la variable que nos indica la pagina en la que nos encontramos
// En caso de no existir indica que nos encontramos en la primera pagina
if(!$_GET["page"])
    $_GET["page"]=1;
// Comprobamos si el usuario quiere realizar una busqueda avanzada de las tareas
// En caso afirmativo mostramos la vista de la busqueda
if($_GET["busqueda_avanzada"]==true){
    include("vistas/BusquedaAvanzada.php");
}
$datosBesqueda=$_POST;
// Comprobamos si ha realizado una busqueda, en caso de que asi sea las tareas a mostrar seran las buscadas
if(!empty($datosBesqueda)){
    $tareas=busquedaAvanzada($datosBesqueda["campo_busqueda"],$datosBesqueda['criterio_busqueda'],
    $datosBesqueda['valor_busqueda'],($_GET["page"]-1)*10,10);
    $numTareas=countTareasAvanzadas($datosBesqueda);
} else {
// Si no, solo mostramos todas las tareas que se encuentran en la base de datos
    $tareas=getTareas(($_GET["page"]-1)*10,10);
    $numTareas=countTareas();
}
// Incluimos las vista correspondiente y llamamos al paginador para que nos muestre los elementos de 10 en 10
    include("vistas/MostrarTareas.php");
    include("modelos/Paginador.php");
    $obj = new AutoPagination($numTareas["num"], $_GET['page']);
    echo $obj->_paginateDetails();
?>