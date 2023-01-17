<html>
    <head>
        <link rel="stylesheet" type="text/css" href="vistas/css/tabla.css">
        <link rel="stylesheet" type="text/css" href="vistas/css/imagenes.css">
        <link rel="stylesheet" type="text/css" href="vistas/css/enlaces.css">
        <title>Inicio</title>
    </head>
    <?php if($_GET["busqueda_avanzada"]==false):?>
    <span>
        <a href="?controlador=MostrarTareas&busqueda_avanzada=true"<?php if($_GET["busqueda_avanzada"]==true) echo "hidden";?>>Busqueda Avanzada</a>
    </span>
    <?php endif;?>
    </head>
    <body>
        <table border=1>
            <tr>
                <th>Nombre Tarea</th>
                <th>Persona Contacto</th>
                <th>TLF Contacto</th>
                <th>E-mail</th>
                <th>Poblacion</th>
                <th>Codigo Postal</th>
                <th>Provincia</th>
                <th>Estado</th>
                <th>Fecha Creacion</th>
                <th>Operario Encargado</th>
                <th>Fecha Realizacion</th>
                <th>Anotaciones Iniciales</th>
                <th>Anotaciones Posteriores</th>
                <th <?php if($_SESSION["admin"]) echo "style='display:none'";?> >Editar</th>
                <th <?php if($_SESSION["admin"]) echo "style='display:none'";?> >Borrar</th>
            </tr>
            <?php
                for($i=0;$i<count($tareas);$i++):?>
                <tr>
                    <td><?php echo $tareas[$i]["nombre_tarea"];?></td>
                    <td><?php echo $tareas[$i]["persona_contacto"];?></td>
                    <td><?php echo $tareas[$i]["tlf_contacto"];?></td>
                    <td><?php echo $tareas[$i]["email"];?></td>
                    <td><?php echo $tareas[$i]["poblacion"];?></td>
                    <td><?php echo $tareas[$i]["codigo_postal"];?></td>
                    <td><?php echo $tareas[$i]["provincia"];?></td>
                    <td>
                        <?php echo $tareas[$i]["estado"];?>
                        <a href="?controlador=ModificarTarea&id=<?php echo $tareas[$i]["id"];?>"> Modificar</a>
                    </td>
                    <td><?php echo $tareas[$i]["fecha_creacion"];?></td>
                    <td><?php echo $tareas[$i]["operario_encargado"];?></td>
                    <td><?php echo $tareas[$i]["fecha_realizacion"];?></td>
                    <td><?php echo $tareas[$i]["anotaciones_anterior"];?></td>
                    <td><?php echo $tareas[$i]["anotaciones_posteriores"];?></td>
                    <td id="img" <?php if($_SESSION["admin"]) echo "style='display:none'";?> >
                        <a href="?controlador=EditarTarea&id=<?php echo $tareas[$i]["id"];?>"> 
                            <img src="vistas/img/editar.png">
                        </a>
                    </td>
                    <td id="img" <?php if($_SESSION["admin"]) echo "style='display:none'";?> >
                    <a href="?controlador=EliminarTarea&id=<?php echo $tareas[$i]["id"];?>">
                            <img src="vistas/img/eliminar.png">
                        </a>
                    </td>
                </tr>
                <?php endfor; ?>
        </table>
        <?php ?>
    </body>
</html>