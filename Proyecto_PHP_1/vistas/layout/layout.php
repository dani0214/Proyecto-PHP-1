<link rel="stylesheet" type="text/css" href="vistas/css/layout.css">
    <div id="menu">
        <span id="elemento_menu">
            <a href="?controlador=MostrarTareas">Inicio</a>
        </span>
        <span id="elemento_menu">
            <a href="?controlador=EditarUsuario&id=<?php echo $cliente; ?>">Editar Usuario</a>
        </span>
        <?php if(!$_SESSION["admin"]):?>
            <span id="elemento_menu">
            <a href="?controlador=AñadirUsuario">Añadir Usuario</a>
            </span>
            <span id="elemento_menu">
            <a href="?controlador=ListarUsuario">Ver Usuarios</a>
            </span>
            <span id="elemento_menu">
            <a href="?controlador=FormTareas">Crear Nueva Tarea</a>
            </span>
        <?php endif;?>
        <span id="elemento_menu">
            <a href="?controlador=Logout">Cerrar Sesion</a>
        </span>
        </div>
