<?php require_once '../includes/cabecera.php';?>
<h3><a href="/Udemy.yo/index.php" title="inicio">Inicio</a></h3><hr/>
<div class="page-content">
    <div class="content">
        <h2>Recoger dos números por la url(GET) y hacer todas las operaciones básicas de una calculadora entre ellos.</h2><hr/>
        <?php
            if(!empty(filter_input(INPUT_GET, 'numero1', FILTER_VALIDATE_INT)) && !empty(filter_input(INPUT_GET, 'numero2', FILTER_VALIDATE_INT))){
            $numero1 = filter_input(INPUT_GET, 'numero1', FILTER_VALIDATE_INT);
            $numero2 = filter_input(INPUT_GET, 'numero2', FILTER_VALIDATE_INT);
            $suma = $numero1 + $numero2;
            $resta = $numero1 - $numero2;
            $multiplicacion = $numero1 * $numero2;
            $division = $numero1 / $numero2;
            echo "<h3>La suma de ambos números es $suma</h3>";
            echo "<h3>La resta entre ambos números es $resta</h3>";
            echo "<h3>La división entre ambos números es $division</h3>";
            echo "<h3>La multiplicación de ambos números es $multiplicacion</h3>";
            }else {
                echo "<h1>Debes introducir 2 números</h1>";
            }
        ?>
    </div>
</div>
</body>
<?php require_once '../includes/footer.php';?>