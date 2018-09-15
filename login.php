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
                    <!-- <img src="img/bannerspring_login.jpg"> -->
                </section>
            </header>
            <main>
                <section>
                <div align="center">
                    <form action="" method="post">
                        <fieldset class="login-form">
                            <label for="user">Correo Electrónico</label>
                            <br>
                            <input class="form-input" type="text" name="email" placeholder="Correo Electrónico">
                            
                            <label for="password">Contraseña</label>
                            <br>
                            <input class="form-input" type="password" name="password" placeholder="Contraseña">
                        </fieldset>
                        <div align="center" class="login-buttons">  
                            <br>
                            <button class="btn" type="submit">ENVIAR</button>
                            <button class="btn" type="reset">BORRAR</button>
                        </div>
                    </form>
                </div>  
                </section>
            </main>
            <footer>
            <nav class="footer-nav">
                <a href="?pagina=main">Inicio</a>
                    <a href="?pagina=catalogo">Productos</a>
                    <a href="?pagina=servicios">Servicios</a>
                    <a href="?pagina=contacto">Contacto</a>
                    <a href="?pagina=frecuentes">Preguntas Frecuentes</a>
            </nav>
            <i>2018 Todos los Derechos reservados.</i>
        </footer>
            
        </div>
    </body>
</html>