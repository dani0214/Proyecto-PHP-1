<html>
<head>
    <link rel="stylesheet" type="text/css" href="vistas/css/formularios.css">
    <title>Registrar Usuario</title>
</head>
<body>
    <form action="" method="POST">
        <p>
            <label>
                Usuario :
                <input type="text" name="usuario" id="usuario" 
                value="<?php if($_POST) echo $_POST["usuario"];?>">
            </label>
            <?=VerError('usuario')?>
        </p>
        <p>
            <label>
                Contraseña :
                <input type="password" name="contraseña1" id="contraseña1">
            </label>
            <?=VerError('contraseña1')?>
        </p>
        <p>
            <label>
                Confirmar Contraseña :
                <input type="password" name="contraseña2" id="contraseña2">
            </label>
            <?=VerError('contraseña2')?>
        </p>
        <p> ¿Es administrador? :
            <label>SI<input type="radio" name="eleccion" id="eleccion" value="0"></label>
            <label>NO<input type="radio" name="eleccion" id="eleccion" value="1" checked></label>
            <br>
        </p>
        <input type="submit">
    </form>
</body>
</html>