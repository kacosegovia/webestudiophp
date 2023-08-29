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
                // Operadores aritmeticos
                $num1=12;
                $num2=17;
                echo '<div><h1>Operaciones Aritméticas</h1><br><br>';
                echo 'Primer número: '.$num1.'<br>';
                echo 'Segundo número: '.$num2.'<br><br>';
                echo 'Suma: '.($num1+$num2).'<br>';
                echo 'Resta: '.($num1-$num2).'<br>';
                echo 'Multiplicación: '.($num1*$num2).'<br>';
                echo 'División: '.($num1/$num2).'<br>';
                echo 'Sobrante o resto: '.($num1%$num2).'<br></div>';
            ?>
        </div>
    </div>
</div>
</body>
<?php require_once 'includes/footer.php'; ?>
