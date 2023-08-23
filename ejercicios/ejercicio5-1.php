<?php require_once '../includes/cabecera.php';?>
<div class="page-content">
    <div class="content">
        <a href="ejercicio5.php" class="button">Volver atrás</a><hr/>
        <h2>Hacer un script que nos muestre todos los números que hay entre 2 números recibidos por GET</h2><hr/>
        <?php
            if(!empty(filter_input(INPUT_GET, 'numero1', FILTER_VALIDATE_INT)) && !empty(filter_input(INPUT_GET, 'numero2', FILTER_VALIDATE_INT))){
                $numero1 = filter_input(INPUT_GET, 'numero1', FILTER_VALIDATE_INT);
                $numero2 = filter_input(INPUT_GET, 'numero2', FILTER_VALIDATE_INT);
                if($numero1 < $numero2){
                    for($i = $numero1;$i <= $numero2;$i++){
                        echo "<h3>$i</h3>";
                    }
                }else {
                    echo "<h3>El primer número debe ser menor que el segundo</h3>";
                }
            }else {
                echo "<h1>Debes introducir 2 números</h1>";
            }
        ?>
    </div>
</div>
</body>
<?php require_once '../includes/footer.php';?>