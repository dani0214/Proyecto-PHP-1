<?php
require_once ("modelos/EliminarUsuario.php");
include("vistas/layout/layout.php");
if($_GET["id"]){
    $id=$_GET["id"];
}
if(!$_POST){
    include("vistas/Logout.php"); 
}else if(!strcmp($_POST["eleccion"],"no")){
    var_dump($_POST);
    header("Location:?controlador=MostrarTareas");
}else if(!strcmp($_POST["eleccion"],"si")){
    //var_dump($_POST);
    session_destroy();
    header("Location:?controlador=Login");
}
?>