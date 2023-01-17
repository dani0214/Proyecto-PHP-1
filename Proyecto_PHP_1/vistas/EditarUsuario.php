<html>
<head>
    <link rel="stylesheet" type="text/css" href="vistas/css/formularios.css">
    <title>Editar Usuario</title>
</head>
<body>
    <form action="" method="POST">
        <p>
            <label>
                Nuevo Usuario :
                <input type="text" name="usuario" id="usuario" 
                value="<?php 
                            if($_POST) echo $_POST["usuario"];
                            else echo $user[0]["user"];
                        ?>">
            </label>
            <?=VerError('usuario')?>
        </p>
        <p>
            <label>
                Nueva Contraseña :
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
        <input type="submit">
    </form>
</body>
</html>