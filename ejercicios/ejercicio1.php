<?php require_once '../includes/cabecera.php';?>
<div class="page-content">
    <div class="content">
        <a href="ejercicios.php" class="button">Volver atrás</a><hr/>
        <h2>Crear 2 variables 'pais' y 'continente' y mostrar su valor por pantalla.</h2>
        <h2>Poner en un comentario qué tipo de dato contiene cada uno</h2>
        <?php
            $pais="Argentina"; //dato tipo string
            $continente="América del sur"; //dato tipo string
            echo "<hr/><h1>$pais - $continente</h1>";
        ?>
    </div>
</div>
</body>
<?php require_once '../includes/footer.php';?>