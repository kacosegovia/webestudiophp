<?php require_once '../includes/cabecera.php';?>
<div class="page-content">
    <div class="content">
        <a href="ejercicios.php" class="button">Volver atrás</a><hr/>
        <h2>Mostrar una tabla HTML con las tablas de multiplicar del 1 al 10.</h2><hr/>        
        <table border='1' class = "exercise6-table">
            <tr>
        <?php
                for($cabecera = 1; $cabecera <=10;$cabecera++){
                    echo "<td>Tabla del $cabecera</td>";
                }
            echo "</tr>";
            echo "<tr>";
                for($i = 1;$i <=10;$i++){
                    echo "<td>";
                        for($x = 1; $x <=10; $x++){
                            echo "$i x $x = ".($i*$x)."<br>";
                        }
                    echo "</td>";
                }
            echo "</table>"; //Fin de la tabla.
        ?>
    </div>
</div>
</body>
<?php require_once '../includes/footer.php';?>