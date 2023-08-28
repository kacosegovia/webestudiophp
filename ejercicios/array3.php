<?php require_once '../includes/cabecera.php';?>
<div class="page-content">
    <div class="content">
        <a href="ejercicios.php" class="button">Volver atrás</a><hr/>
        <h2>Crear un script en PHP que compruebe si una variable está vacía y si lo está,
            llenarla con texto en minúsculas y mostrarlo en negrita y mayúsculas.</h2>
        <div class="content">
            <?php
            $texto = "";
            if(empty($texto)){
                $texto = "hola, yo soy la cadena de texto en minúsculas";
                $textof = "<h2><strong>".strtoupper($texto)."</strong></h2>";
                echo $textof;
            }else {
                echo "La variable no estaba vacía";
            }
            ?>
        </div>
    </div>
</div>
</body>
<?php require_once '../includes/footer.php';?>