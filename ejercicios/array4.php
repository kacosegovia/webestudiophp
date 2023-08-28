<?php require_once '../includes/cabecera.php';?>
<div class="page-content">
    <div class="content">
        <a href="ejercicios.php" class="button">Volver atrás</a><hr/>
        <h2>Crear un script en PHP que tenga 4 variables, una tipo array, tipo string, tipo int
            y otra tipo booleana. luego imprime mensaje indicando el tipo de variable.</h2><br><hr/>
        <?php
            $varUno = array("hola mundo","estoy aquí");
            $varDos = "soy un texto";
            $varTres = 2;
            $varCuatro = true;
            echo "<ul><li>";
            if(is_array($varUno)){
                echo "<h3>La primera variable es un Array <em>(".count($varUno)." elementos)</em></h3><br>";
            }
            echo "</li><li>";
            if(is_string($varDos)){
                echo "<h3>La segunda variable es un String <em>(".$varDos.")</em></h3><br>";
            }
            echo "</li><li>";
            if(is_int($varTres)){
                echo "<h3>La tercera variable es un Entero <em>(".$varTres.")</em></h3><br>";
            }
            echo "</li><li>";
            if(is_bool($varCuatro)){
                echo "<h3>La cuarta variable es un Boolean <em>(".$varCuatro.")</em></h3>";
            }
            echo "</li></ul>";
        ?>
    </div>
</div>
</body>
<?php require_once '../includes/footer.php';?>