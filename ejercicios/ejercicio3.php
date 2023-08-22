<?php require_once '../includes/cabecera.php';?>
<h3><a href="/Udemy.yo/index.php" title="inicio">Inicio</a></h3><hr/>
<div class="page-content">
    <div class="content">
        <h2>Escribir un programa que imprima por pantalla los cuadrados de los 40 primeros números naturales</h2>
        <p>PD. Utiliza bucle WHILE</p><hr/>
        <?php
            $i=0;
            while($i < 40){
                $cuadrado = $i*$i;
                echo "<h3>El cuadrado del número $i es $cuadrado</br>";
                $i++;
            }
        ?>
    </div>
</div>
</body>
<?php require_once '../includes/footer.php';?>
