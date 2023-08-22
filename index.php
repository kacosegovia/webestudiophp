<?php require_once 'includes/cabecera.php';
    // Constantes en PHP y su declaracion.
    echo '<h3><a href="formulario.php" title="formulario">Regístrate</a></h3>';
    // Variables de PHP y cómo declararlas.
    $consola1 = 'Super Nintendo (SNES)';
    $consola2 = 'Nintendo 64 (N64)';
    $verdadero = true;
?>
<div class="page-content">
    <div class="content-wrapper">
        <div class="content">
            <?php
                // Metodo para imprimir en pantalla usando comillas dobles.
                echo "<h2>Listado de Juegos</h2><br>
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
                $fecha_anterior = date('d/m/Y', strtotime('-2 day', $fecha_actual)); // Resta un día y formatea
                echo '<p>Lista actualizada al '.$fecha_anterior.'</p><br><br>';
            ?>
        </div>   
        <div class="content">
            <?php
                // Operadores aritmeticos
                $num1=12;
                $num2=17;
                echo '<div><h2>Operaciones Aritméticas</h2><br><br>';
                echo 'Primer número: '.$num1.'<br>';
                echo 'Segundo número: '.$num2.'<br><br>';
                echo 'Suma: '.($num1+$num2).'<br>';
                echo 'Resta: '.($num1-$num2).'<br>';
                echo 'Multiplicación: '.($num1*$num2).'<br>';
                echo 'División: '.($num1/$num2).'<br>';
                echo 'Sobrante o resto: '.($num1%$num2).'<br></div><hr/>';
                echo '<h3><a href="funciones/funciones.php" title="funciones PHP">Funciones</a></h3>';
            ?>
        </div>
        <div class="content">
            <?php
                // Metodo para imprimir en pantalla usando comillas dobles.
                echo '<h2>Ejercicios resueltos</h2><br>
                    <ul><li><a href="ejercicios/ejercicio1.php" title="Primer Ejercicio">Ejercicio 1 (variables)</a></li>
                    <li><a href="ejercicios/ejercicio2.php" title="Segundo Ejercicio">Ejercicio 2 (bucle FOR e IF)</a></li>
                    <li><a href="ejercicios/ejercicio3.php" title="Tercer Ejercicio">Ejercicio 3 (bucle WHILE)</a></li>
                    <li><a href="ejercicios/ejercicio4.php" title="Cuarto Ejercicio">Ejercicio 4 (parámetros GET)</a></li>
                    <li><a href="ejercicios/ejercicio5.php" title="Quinto Ejercicio">Ejercicio 5 (parámetros GET 2)</a></li>
                    <li><a href="ejercicios/ejercicio6.php" title="Sexto Ejercicio">Ejercicio 6 (tabla HTML)</a></li>
                    <li><a href="ejercicios/ejercicio7.php" title="Séptimo Ejercicio">Ejercicio 7 (parámetros GET 3)</a></li></ul>';
            ?>
        </div>
    </div>
</div>
</body>
<?php require_once 'includes/footer.php'; ?>
