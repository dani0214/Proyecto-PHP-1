<html>
        <link rel="stylesheet" type="text/css" href="vistas/css/formularios.css">
<head>
<title>Actualizar estado Tarea</title>
</head>
<body>
    <form action="" method="POST">
        <p>
                Estado :
                <label>
                    <input type="radio" name="estado" id="estado" value="Pendiente"
                        <?php 
                            if(!strcmp($_POST["estado"],"Pendiente")){
                                echo"checked";
                            }else if(!strcmp("Pendiente",$tarea[0]["estado"]))
                                echo"checked";
                        ?>>Pendiente
                </label>
                <label>
                    <input type="radio" name="estado" id="estado" value="Realizada"
                        <?php 
                            if(!strcmp($_POST["estado"],"Realizada")){
                                echo"checked";
                            }else if(!strcmp("Realizada",$tarea[0]["estado"]))
                                echo"checked";
                        ?>>Realizada
                </label>
                <label>
                    <input type="radio" name="estado" id="estado" value="Cancelada"
                        <?php 
                            if(!strcmp($_POST["estado"],"Cancelada")){
                                echo"checked";
                            }else if(!strcmp("Cancelada",$tarea[0]["estado"]))
                                echo"checked";
                        ?>>Cancelada
                </label>
            <?=VerError('estado')?>
        </p>
        <p>
            <label>
                Fecha de realizacion :
                <input type="text" name="fecha_realizar" id="fecha_realizar" placeholder="dd/mm/aaaa" 
                value="<?php 
                            if($_POST) echo $_POST["fecha_realizar"];
                            else echo $fecha;
                        ?>">
            </label>
            <?=VerError('fecha_realizar')?>
        </p>
        <p>
            <label>
                Anotaciones de la tarea :
                <textarea name="anotaciones" id="anotaciones"><?php if($_POST) echo $_POST["anotaciones"];?></textarea>
            </label>
        </p>
        <?=VerError('anotaciones')?>
        <input type="submit" name="" id="">
    </form>
</body>
</html>