<?php require_once '../includes/cabecera.php';?>
<h3><a href="/Udemy.yo/index.php" title="inicio">Inicio</a></h3><hr/>
<div class="page-content">
    <div class="content">
        <h2>Hacer un script que nos muestre todos los números IMPARES que hay entre 2 números recibidos por GET</h2><hr/>
        <?php
            if(!empty(filter_input(INPUT_GET, 'numero1', FILTER_VALIDATE_INT)) && !empty(filter_input(INPUT_GET, 'numero2', FILTER_VALIDATE_INT))){
                $numero1 = filter_input(INPUT_GET, 'numero1', FILTER_VALIDATE_INT);
                $numero2 = filter_input(INPUT_GET, 'numero2', FILTER_VALIDATE_INT);
                if($numero1 < $numero2){
                    for($i = $numero1;$i <= $numero2;$i++){
                        if($i%2!=0){
                            echo "<h3>$i</h3>";
                        }
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