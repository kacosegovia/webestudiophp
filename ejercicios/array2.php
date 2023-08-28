<?php require_once '../includes/cabecera.php';?>
<div class="page-content">
    <div class="content">
        <a href="ejercicios.php" class="button">Volver atrás</a><hr/>
        <h2>Crear un script en PHP que añada valores a un array que no supere 
            su longitud de 120 elementos y luego mostrarlo.</h2>
        <div class="content">
            <?php
                $contenido = array();
                for ($i=0;$i<120;$i++){
                    array_push($contenido,"Elemento ".$i);
                }
                //Función mostrar el array
                function mostrarArray($contenido){
                    $resultado="";
                    foreach ($contenido as $elemento){
                        $resultado.=$elemento."<br>";
                    }
                    return $resultado;
                }
                echo "<h3>".mostrarArray($contenido)."</h3>";
            ?>
        </div>
    </div>
</div>
</body>
<?php require_once '../includes/footer.php';?>