<?php 
    //iniciar sesiones.
    session_start();
    //Omisión de error explicito
    if(!isset($variableLocal)){
        $variableLocal = "Este texto se modificó porque <p>la variable no existe en esta sesión.</p>";
    }
    $sesionActiva = true;
    if(!isset($_SESSION['variableDeSesion'])){
        $_SESSION['variableDeSesion'] = "<pre>La sesión ya no existe. Vuelve <p>atrás para iniciarla otra vez.</p></pre>";
        $sesionActiva = false;
    }
?>
<?php require_once '../includes/cabecera.php';?>
<div class="page-content">
    <div class="content">        
        <a href="cookies.php" class="button">Volver atrás</a><hr/>
    <?php
        if($sesionActiva){
            echo "<h1 id='content-cookies'>Sesion activada</h1><hr/>";
        }else {
            echo "<h1 id='content-cookies'>Sesion caducada</h1><hr/>";
        }
        echo "<ul><li><p><strong><pre>".$variableLocal."</pre></strong></p></li></ul><br>";
        echo "<ul><li><h3><strong>".$_SESSION['variableDeSesion']."</strong></li></ul></h3>";
        if($sesionActiva){
            echo "<br><hr/><div id='content-cookies'><a href='logout.php' class='button' id='content-cookies'>Cerrar sesión</a></div>";
        }else {
            echo "<br><br>";
        }
    ?>
    </div>
</div>
</body>
<?php require_once '../includes/footer.php';?>