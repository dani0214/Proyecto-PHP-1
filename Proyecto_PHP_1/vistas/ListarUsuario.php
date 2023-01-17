<html>
    <head>
        <link rel="stylesheet" type="text/css" href="vistas/css/tabla.css">
        <link rel="stylesheet" type="text/css" href="vistas/css/enlaces.css">
        <link rel="stylesheet" type="text/css" href="vistas/css/imagenes.css">
        <title>Ver Lista Usuarios</title>
    </head>
    <body>
        <table border=1>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Administrador</th>
                <th>Eliminar Usuario</th>
            </tr>
            <?php
                for($i=0;$i<count($usuarios);$i++):?>
                <tr>
                    <td><?php echo $usuarios[$i]["id"];?></td>
                    <td><?php echo $usuarios[$i]["user"];?></td>
                    <td><?php echo $usuarios[$i]["passw"];?></td>
                    <td><?php if(!$usuarios[$i]["admin"]) echo "SI"; else echo "NO"; ?></td>
                    <td id="img">
                        <a href="?controlador=EliminarUsuario&id=<?php echo $usuarios[$i]["id"];?>">
                        <img src="vistas/img/eliminar.png">
                        </a>
                    </td>
                </tr>
                <?php endfor; ?>
        </table>
        <?php ?>
    </body>
</html>