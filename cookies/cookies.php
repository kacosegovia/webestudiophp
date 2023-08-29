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
                echo "<br><hr/><a href='paginaPruebas.php' class='button'>Iniciar sesión</a>";
            ?>
        </div>
    </div>
</div>
</body>
<?php require_once '../includes/footer.php';?>