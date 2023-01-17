<html>
    <head>
        <link rel="stylesheet" type="text/css" href="vistas/css/tabla.css">
        <link rel="stylesheet" type="text/css" href="vistas/css/enlaces.css">
        <link rel="stylesheet" type="text/css" href="vistas/css/confirmacion.css">
        <title>Eliminar Tarea</title>
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
            </tr>
            <?php
                for($i=0;$i<count($tarea);$i++):?>
                <tr>
                    <td><?php echo $tarea[$i]["nombre_tarea"];?></td>
                    <td><?php echo $tarea[$i]["persona_contacto"];?></td>
                    <td><?php echo $tarea[$i]["tlf_contacto"];?></td>
                    <td><?php echo $tarea[$i]["email"];?></td>
                    <td><?php echo $tarea[$i]["poblacion"];?></td>
                    <td><?php echo $tarea[$i]["codigo_postal"];?></td>
                    <td><?php echo $tarea[$i]["provincia"];?></td>
                    <td><?php echo $tarea[$i]["estado"];?></td>
                    <td><?php echo $tarea[$i]["fecha_creacion"];?></td>
                    <td><?php echo $tarea[$i]["operario_encargado"];?></td>
                    <td><?php echo $tarea[$i]["fecha_realizacion"];?></td>
                    <td><?php echo $tarea[$i]["anotaciones_anterior"];?></td>
                    <td><?php echo $tarea[$i]["anotaciones_posteriores"];?></td>
                </tr>
                <?php endfor; ?>
        </table>
        <form action=""method="POST">
            <p>¿Desea eliminar esta tarea?
                <label>SI<input type="radio" name="eleccion" id="eleccion" value="si"></label>
                <label>NO<input type="radio" name="eleccion" id="eleccion" value="no"></label>
                <br>
                <input type="submit" value="Confirmar">
            </p>
        </form>
    </body>
</html>