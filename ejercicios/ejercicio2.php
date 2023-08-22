<?php require_once '../includes/cabecera.php';?>
<h3><a href="/Udemy.yo/index.php" title="inicio">Inicio</a></h3><hr/>
<div class="page-content">
    <div class="content">
        <h2>Escribir un Script en PHP que nos muestre por pantalla todos los numeros pares que hay de 1 al 100.</h2><hr/>
        <?php
            for($i = 1; $i <=100;$i++){ 
                if($i%2==0){ // Dividimos $i entre 2, si sobra 0, se muestra.
                echo "<h3>".$i."</h3><br/>"; //Imprime $i cada vez q cumpla condición del if.
                }
            }
        ?>
    </div>
</div>
</body>
<?php require_once '../includes/footer.php';?>
