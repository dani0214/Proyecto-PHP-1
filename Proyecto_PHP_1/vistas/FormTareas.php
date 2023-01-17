<html>
<head>
    <link rel="stylesheet" type="text/css" href="vistas/css/formularios.css">
    <title>Añadir Tarea</title>
</head>
<body>
    <form action="" method="POST">
        <p>
            <label>
                Persona Contacto :
                <input type="text" name="contacto" id="contacto" 
                value="<?php if($_POST) echo $_POST["contacto"];?>">
            </label>
            <?=VerError('contacto')?>
        </p>
        <p>
            <label>
                Numero Telefono :
                <input type="text" name="telefono" id="telefono" 
                value="<?php if($_POST) echo $_POST["telefono"];?>">
            </label>
            <?=VerError('telefono')?>
        </p>
        <p>
            <label>
                Descripcion :
                <input name="descripcion" id="descripcion" 
                value="<?php if($_POST) echo $_POST["descripcion"];?>">
            </label>
            <?=VerError('descripcion')?>
        </p>
        <p>
            <label>
                Correo Electronico :
                <input type="text" name="email" id="email" 
                value="<?php if($_POST) echo $_POST["email"];?>">
            </label>
            <?=VerError('email')?>
        </p>
        <p>
            <label>
                Poblacion :
                <input type="text" name="poblacion" id="poblacion" 
                value="<?php if($_POST) echo $_POST["poblacion"];?>">
            </label>
            <?=VerError('poblacion')?>
        </p>
        <p>
            <label>
                Codigo Postal :
                <input type="text" name="cod_postal" id="cod_postal" 
                value="<?php if($_POST) echo $_POST["cod_postal"];?>">
            </label>
            <?=VerError('cod_postal')?>
        </p>
        <p>
            <label>
                Provincia :
                <select type="text" name="provincia" id="provincia">
                    <option selected disabled>Seleccione la provincia</option>
                    <?php  
                        foreach($provincias as $prov):?>
                            <option name="provincia" value="<?=$prov["provincias"]?>"
                            <?php
                                if(!strcmp($_POST["provincia"],$prov["provincias"])){
                                    echo"selected";
                                }
                            ?>
                            >
                            <?=$prov["provincias"]?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </label>
            <?=VerError('provincia')?>
        </p>
        <p>
            <label>
                Operario encargado :
                <select name="operario" id="operario">
                    <option selected disabled>Seleccione al operario</option>
                    <?php  
                        foreach($operarios as $op):?>
                            <option name="operario" value="<?=$op["user"]?>"
                            <?php
                                if(!strcmp($_POST["operario"],$op["user"])){
                                    echo"selected";
                                }
                            ?>
                            >
                            <?=$op["user"]?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </label>
            <?=VerError('operario')?>
        </p>
        <p>
            <label>
                Fecha de realizacion :
                <input type="text" name="fecha_realizar" id="fecha_realizar" placeholder="dd/mm/aaaa" 
                value="<?php if($_POST) echo $_POST["fecha_realizar"];?>">
            </label>
            <?=VerError('fecha_realizar')?>
        </p>
        <p>
            <label>
                Anotaciones de la tarea :
                <textarea name="anotaciones" id="anotaciones"><?php if($_POST) echo $_POST["anotaciones"];?></textarea>
            </label>
            <?=VerError('anotaciones')?>
        </p>
        <input type="submit" name="" id="">
    </form>
</body>
</html>