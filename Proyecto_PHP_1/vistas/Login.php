<html>
<h1><img src="vistas/img/login.png"></h1>
<style>
    img{
        height:180px;
        width:150px;
    }
</style>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="vistas/css/formularios.css">
<link rel="stylesheet" type="text/css" href="vistas/css/login.css">
    <div id="pag_login">
        <form action="" method="POST">
            <div id="ventana_login">
                <p>
                    <label> 
                        Usuario: <input type="text" name="usuario" id="usuario">
                        <?=VerError('usuario')?>
                    </label>
                </p>
                <p>
                    <label> 
                        Contraseña: <input type="password" name="contraseña" id="contraseña">
                        <?=VerError('contraseña')?>
                    </label>
                </p>
                <p><input type="submit" ></p>
            </div>
        </form>
    </div>
</html>