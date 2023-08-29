<?php 
    //iniciar sesiones.
    session_start();
?>
<?php require_once '../includes/cabecera.php';?>
<div class="page-content">
    <h1 id = "h1-cookies">Sesiones y cookies</h1>
    <div class ="content-wrapper">
        <div class="content" id = "content-cookies">
            <h1>Sesiones</h1><hr/>
            <?php            
                //variable local
                $variableLocal = "Hola, yo soy un texto local";            
                //variable de sesion (superglobal)
                $_SESSION['variableDeSesion'] = "Yo seré una sesión activa";            
                //Llamar variables
                echo "<h3><ul><li>".$variableLocal."</li></ul><br></h3>";
                echo "<h3><ul><li><strong>".$_SESSION['variableDeSesion']."</strong></li></ul></h3>";
                echo "<br><hr/><a href='paginaPruebas.php' class='button'>Probar sesión</a>";
            ?>
        </div>
        <div class="content" id="content-cookies">
            <h1>Cookies</h1><hr/>
            <?php
                echo "<br><h2>Cookie básica</h2><br>";
                if(isset($_COOKIE["cookieBasica"])) {
                    echo "<ul><li><h3>".$_COOKIE['cookieBasica']."</h3></li></ul><br>";
                }else {
                    echo "<h3>No existen cookies para mostrar</h3><br>";
                }                
                echo "<br><h2>Cookie con expiración</h2><br>";
                if(isset($_COOKIE['cookieExpira'])) {
                    echo "<ul><li><h3>".$_COOKIE['cookieExpira']."</h3></li></ul><hr/>";
                }else {
                    echo "<h3>No existen cookies para mostrar</h3><hr/>";
                }
            ?>
            <div id='content-cookies'>
                <a href='crearCookies.php' class='button' id='content-cookies'>Crear cookies</a>
                <a href='borrarCookies.php' class='button' id='content-cookies'>Borrar cookies</a>
            </div>
        </div>
    </div>
</div>
</body>
<?php require_once '../includes/footer.php';?>