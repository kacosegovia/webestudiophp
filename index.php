<?php 
    //iniciar sesiones.
    session_start();
    //Terminar sesión
    session_destroy();
?>
<?php require_once 'includes/cabecera.php';
    // Variables de PHP y cómo declararlas.
    $consola1 = 'Super Nintendo (SNES)';
    $consola2 = 'Nintendo 64 (N64)';
    $verdadero = true;
?>
<div class="page-content">
    <h1 id="content-cookies">Aprendiendo PHP con Udemy!</h1><br>
    <div class="content-wrapper">
        <div class="content">
            <?php
                // Metodo para imprimir en pantalla usando comillas dobles.
                echo "<h1>Listado de Juegos</h1><br>
                    <h3>$consola1</h3>
                    <ul><li>Super Mario All Stars + Super Mario World</li>
                    <li>Donkey Kong Country</li>
                    <li>The Legend of Zelda - A link to the past</li></ul><br>";
                    // Metodo para imprimir en pantalla usando concatenación.
                echo '<h3>'.$consola2.'</h3>
                    <ul><li>Super Mario 64</li>
                    <li>The Legend of Zelda - Ocarina of Time</li>
                    <li>Mario Kart 64</li></ul><br>';
                $fecha_actual = strtotime(date('d-m-Y')); // Obtiene la fecha actual en formato numérico
                $fecha_anterior = date('d/m/Y', strtotime('-1 day', $fecha_actual)); // Resta un día y formatea
                echo '<p>Lista actualizada al '.$fecha_anterior.'</p><br><br>';
            ?>
        </div>   
        <div class="content">
            <?php
                echo '<div><h1>Operaciones Aritméticas</h1><br><br>';
            ?>
            <div>
                <div id='content-cookies'>
                    <form method="post" action="">
                        <p><label class="email-with-margin" for="numero1">Primer número</label>
                        <input type="number" name="numero1" size="1" id="input-label"> 
                        <p><label for="numero2">Segundo número</label>
                        <input type="number" name="numero2" size="1" id="input-label" style="margin-left: 4px;"></p>
                        <p><br><br>
                        <div>
                            <input class="button" type="submit" value="Calcular">
                            <a href='borrar.php' class='button' id='content-cookies'>Borrar</a>
                        </div>
                    </form>
                    <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
                                $numero1 = $_POST['numero1'];
                                $numero2 = $_POST['numero2'];
                                function calculadora($num1, $num2) {
                                    $result = "<hr/><h1>Números ingresados: $num1 y $num2</h1><br>";
                                    if ($num2 != 0) {
                                        $suma = ($num1 + $num2);
                                        $resta = ($num1 - $num2);
                                        $multiplicacion = ($num1 * $num2);
                                        $division = ($num1 / $num2);
                                        $sobrante = ($num1 % $num2);
                                        $result .= "La suma de ambos números es: $suma<br>"
                                                . "La resta de ambos números es: $resta<br>"
                                                . "Su Multiplicación es: $multiplicacion<br>"
                                                . "El producto entre ambos es: $division<br>"
                                                . "y lo que sobra de esa división: $sobrante<br>";
                                    } else {
                                        $result .= "No se puede dividir por cero.";
                                    }
                                    return $result;
                                }
                                echo calculadora($numero1, $numero2);
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php require_once 'includes/footer.php'; ?>
