<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);
//La carpeta donde buscaremos los controladores
define ('CONTROLLERS_FOLDER', "controladores/");

//Si no se indica un controlador, este es el controlador que se usará
define ('DEFAULT_CONTROLLER', "Login");

// Comprobamos que el usuario ha iniciado sesion para entrar en la app
if (isset($_SESSION['id'])){
   $cliente = $_SESSION['id'];
   if ( !empty ( $_GET[ 'controlador' ] ) )
   $controller = $_GET [ 'controlador' ];
//Formamos el nombre del fichero que contiene nuestro controlador
$controller = CONTROLLERS_FOLDER . $controller . '.php';
//Si la variable $controller es un fichero lo requerimos
   if ( is_file ( $controller ) ){
      require_once ($controller);
   } else
      throw new Exception ('El controlador no existe - 404 not found');
} // Al no haber iniciado sesion lo obligamos a entrar en el controlador por defecto
else {
   $controller=DEFAULT_CONTROLLER;
   $controller = CONTROLLERS_FOLDER . $controller . '.php';
   if ( is_file ( $controller ) ){
      require_once ($controller);
   } else
      throw new Exception ('El controlador no existe - 404 not found');
}

