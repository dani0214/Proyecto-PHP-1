<html>
    <head>
        <link rel="stylesheet" type="text/css" href="vistas/css/tabla.css">
        <link rel="stylesheet" type="text/css" href="vistas/css/enlaces.css">
        <link rel="stylesheet" type="text/css" href="vistas/css/confirmacion.css">
        <title>Eliminar Usuario</title>
    </head>
    <body>
        <table border=1>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Administrador</th>
            </tr>
            <?php
                for($i=0;$i<count($usuario);$i++):?>
                <tr>
                    <td><?php echo $usuario[$i]["id"];?></td>
                    <td><?php echo $usuario[$i]["user"];?></td>
                    <td><?php echo $usuario[$i]["passw"];?></td>
                    <td><?php if(!$usuario[$i]["admin"]) echo "SI"; else echo "NO"; ?></td>
                </tr>
                <?php endfor; ?>
        </table>
        <form action=""method="POST">
            <p>¿Desea eliminar a este usuario?
                <label>SI<input type="radio" name="eleccion" id="eleccion" value="si"></label>
                <label>NO<input type="radio" name="eleccion" id="eleccion" value="no"></label>
                <br>
                <input type="submit" value="Confirmar">
            </p>
        </form>
    </body>
</html>