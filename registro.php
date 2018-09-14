<?php

include_once('funciones.php');

$nombre = "";
$apellido = "";
$genero = "";
$username = "";
$email = "";
$errores = [];

if($_POST) {
   // $errores = [];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $genero = $_POST['genero'];
    $errores = validate($_POST);
    //dd($errores);
    if (count($errores) === 0){
        $usuario = createUser($_POST);
        saveUser($usuario);
        $erroresAvatar = saveAvatar($usuario);
        $errores = array_merge($errores, $erroresAvatar);

        header('Location: login.php');
        exit;
        // if(count($errores) === 0){

        // dd($_POST);
        // exit;

        // }
    }
}

?>
            <main class="main-form">
                <section class="form">
                    <p align="center" class="p-form"><strong>¡Creá tu cuenta con nosotros!</strong></p>
                    <br>
                    <form class="datos" action="" method="POST" enctype="multipart/form-data">
                        <fieldset class="login-form">
                            <fieldset>
                                <label for="nombre">Nombre:</label>
                                <input type="text" name="nombre" value="<?= $nombre ?>" placeholder="Escribí tu nombre">
                                <br>
                                <label for="apellido">Apellido:</label>
                                <input type="text" name="apellido" value="<?= $apellido ?>" placeholder="Escribí tu apellido">
                                <br>
                                <br>
                                <h3><label for="genero" name="genero">Género</label></h3>
                                <input type="radio" name="genero">
                                <label for="genero" name="femenino">Femenino</label>
                                <br>
                                <input type="radio" name="genero">
                                <label for="genero" name="masculino">Masculino</label>
                                <br>
                                <input type="radio" name="genero">
                                <label for="genero" name="indefinido">Indefinido</label>
                                <br>
                                <input type="radio" name="genero">
                                <label for="genero" name="otro">Otro</label>
                                <br>
                                <br>
                                <label for="email">-Email:</label>
                                <input type="email" name="email" value="<?= $email ?>" placeholder="Escribí tu e-Mail">
                                <?php if(isset($errores['email'])):?>
                                <div class="alert"><p><strong><?=$errores['email']?></strong></p></div>
                                <?php endif;?>
                                <br>
                                <br>
                                <label for="username">Nombre de usuario:</label>
                                <br>
                                <input type="text" name="username" value="<?= $username ?>" placeholder="Elegí tu nombre de usuario">
                                <?php if(isset($errores['username'])) :?>
                                <div class="alert"><p><strong><?= $errores['username'] ?></strong></p></div>
                                <?php endif; ?>
                                <br>
                                <br>
                                <label for="avatar">Avatar: </label>
                                <br>
                                <input type="file" name="avatar">
                                <?php if(isset($errores['avatar'])) :?>
                                <div class="alert"><p><strong><?= $errores['avatar'] ?></strong></p></div>
                                <?php endif; ?>
                                <br>
                                <br>
                                <label for="password">Password:</label>
                                <br>
                                <input type="password" name="password" placeholder="Elegí tu contraseña">
                                <input type="password" name="cpassword" placeholder="Confirmá tu contraseña">
                                <?php if(isset($errores['password'])) :?>
                                <div class="alert"><p><strong><?= $errores['password'] ?></strong></p></div>
                                <?php endif; ?>
                            </fieldset>
                            <fieldset>
                                <h3><label for="animals">¿Qué animales te gustan?</label></h3>
                                <br>
                                <label for="animals" name="gatos">Gatos</label>
                                <input type="checkbox" name="gatos">
                                <label for="animals" name="perros">Perros</label>
                                <input type="checkbox" name="perros">
                                <label for="animals" name="aves">Aves</label>
                                <input type="checkbox" name="aves">
                                <label for="animals" name="reptiles">Reptiles</label>
                                <input type="checkbox" name="reptiles">
                                <label for="animals" name="peces">Peces</label>
                                <input type="checkbox" name="peces">
                            </fieldset>
                            <div align="center">
                                <br>
                                <label for="newsletter">¿Le gustaría subscribirse a nuestro correo semanal?</label>
                                <input type="checkbox" name="newsletter">
                                <br>
                                <label for="confirm">TÉRMINOS Y CONDICIONES</label>
                                <input type="checkbox" name="confirm">
                                <?php if(isset($errores['confirm'])) :?>
                                <div class="alert"><p><strong><?= $errores['confirm'] ?></strong></p></div>
                                <?php endif; ?>
                                <br>
                                <br>
                                <button class="btn" type="submit">ENVIAR</button>
                                <button class="btn" type="reset">BORRAR</button>
                            </div>
                        </fieldset>
                        <br>
                    </form>
                </section>
            </main>
        <footer>
            <nav class="footer-nav">
                <a href="index.html">Inicio</a>
                    <a href="#">Productos</a>
                    <a href="frecuentes.html">FAQ</a>
                    <a href="#">Contacto</a>
                    <a href="login.php">Login</a>
                    <a href="registro.php">Regístrese</a>
            </nav>
            <i>2018 Todos los Derechos reservados.</i>
        </footer>
        </div>
    </body>
</html>
