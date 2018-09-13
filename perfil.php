<?php

include_once('funciones.php');

if (loginController() == true) {

    if($_SESSION)
    {
        $usuario = buscamePorEmail($_SESSION['email']);
        $username = $usuario['username'];
        $nombre = $usuario['nombre'];
        $genero = $usuario['genero'];
        $id = $usuario['id'];

        if(isset(glob("img/perfil$id.*")[0]))
        {
            $archivo = glob("img/perfil$id.*")[0];
        } else {
            $archivo = null;
        }
    }

} else {
    header ('Location: login.php');
}


?>

            <main>
                <section >
                    <fieldset class="login-form">

                    NADA
                    
                </section>
            </main>
            <footer>
                <nav class="footer-nav">
                    <a href="index.html">Inicio</a>
                    <a href="#">Productos</a>
                    <a href="#">Nosotros</a>
                    <a href="#">Contacto</a>
                    <a href="login.php">Login</a>
                    <a href="logout.php">Logout</a>
                </nav>
                <i>2018 Todos los Derechos reservados.</i>
            </footer>
        </div>
    </body>
</html>