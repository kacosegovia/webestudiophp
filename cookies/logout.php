<?php 
    //iniciar sesiones.
    session_start();
?>
<?php require_once '../includes/cabecera.php';?>
<div class="page-content">
    <div class="content">        
        <a href="paginaPruebas.php" class="button">Volver a la sesión</a><hr/>
        <h1>Sesion Cerrada</h1><hr/>
        <?php
            //Terminar sesión
            session_destroy();
            echo "<h3><p>Sesión terminada con éxito!<p>Prueba regresando atrás</p></p></h3><br>";
        ?>
    </div>
</div>
</body>
<?php require_once '../includes/footer.php';?>