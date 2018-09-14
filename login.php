<?php

include_once('funciones.php');

if($_POST){
    $usuario = buscamePorEmail($_POST['email']);
    if($usuario !== null) {
        if(password_verify($_POST['password'], $usuario['password']) === true){
            login($usuario);
        }
    }
    if(loginController()) {
        header('Location: dogo.php?pagina=perfil');
        exit;
    }
}

?>
            <section class="banner">
                    <img src="img/bannerspring_login.jpg">
                </section>
            </header>
            <main>
                <section>
                    <form action="" method="post">
                        <fieldset class="login-form">
                            <label for="user">e-Mail:</label>
                            <br>
                            <input type="text" name="email" placeholder="Ingresá tu email">
                            <br>
                            <label for="password">Contraseña:</label>
                            <br>
                            <input type="password" name="password" placeholder="Ingresá tu contraseña">
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