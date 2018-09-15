<?php

include_once('funciones.php');

$email = "";
$password = "";
$errores = [];

if($_POST){
    $errores = [];
    $email = $_POST['email'];
    $usuario = $_POST['email'];
    $errores = logValidate($_POST);
    if (count($errores) === 0){
        //  dd($errores);
        //  exit;
        login($usuario);
        if(loginController()) {
            header('Location: perfil.php');
            exit;
        }
        
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DOGGOS - Inicio de sesión</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/normalize.css" rel="stylesheet">
        <link href="css/master.css" rel="stylesheet">
        <link href="css/register.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Varela+Round" rel="stylesheet">
    </head>
    <body>
        <div class="flex-container">
            <header class="main-header">
                <img class="logo" src="img/logo2.png">
                <div class="navs">                        
                    <nav class="main-nav">
                        <a href="index.html">Inicio</a>
                        <a href="#">Productos</a>
                        <a href="frecuentes.html">FAQ</a>
                        <a href="#">Contacto</a>
                    </nav>
                    <div class="user">
                        <a href="login.php">Login</a>
                        <a href="registro.php">Regístrese</a>
                    </div>
                </div>
            </header>
            <main>
                <section>
                    <form action="" method="post">
                        <fieldset class="login-form">
                            <label for="user">e-Mail:</label>
                            <br>
                            <input type="text" name="email" value="<?= $email ?>" placeholder="Escribí tu e-Mail">
                            <br>
                            <?php if(isset($errores['email'])):?>
                                <div class="alert"><p><strong><?=$errores['email']?></strong></p></div>
                            <?php endif;?>
                            <br>
                            <label for="password">Contraseña:</label>
                            <br>
                            <input type="password" name="password" placeholder="Ingresá tu contraseña">
                            <br>
                            <?php if(isset($errores['password'])) :?>
                                <div class="alert"><p><strong><?= $errores['password'] ?></strong></p></div>
                            <?php endif; ?>
                        </fieldset>
                        <div align="center">
                            <br>
                            <button class="btn" type="submit">ENVIAR</button>
                            <button class="btn" type="reset">BORRAR</button>
                        </div>
                    </form>
                </section>
            </main>
            <footer>
                <nav class="footer-nav">
                    <a href="index.html">Inicio</a>
                    <a href="#">Productos</a>
                    <a href="#">Nosotros</a>
                    <a href="#">Contacto</a>
                    <a href="login.php">Login</a>
                    <a href="registro.php">Regístrese</a>
                </nav>
                <i>2018 Todos los Derechos reservados.</i>
            </footer>
        </div>
    </body>
</html>