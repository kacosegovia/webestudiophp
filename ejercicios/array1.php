<?php require_once '../includes/cabecera.php';?>
<div class="page-content">
    <div class="content">
        <a href="ejercicios.php" class="button">Volver atrás</a><hr/>
        <h2>Crear un script en PHP que tenga un array con 8 números enteros y que haga lo siguiente: </h2>
        <h3><ul><li>Recorrerlo y mostrarlo</li>
            <li>Ordenarlo y mostrarlo</li>
            <li>Mostrar su longitud</li>
            <li>Buscar algún elemento.</li></ul></h3>
        <div class="content-wrapper">
            <div class="content">
                <?php
                    //Función mostrar el array
                    function mostrarArray($numeros){
                        $resultado="";
                        foreach ($numeros as $numero){
                            $resultado.=$numero."<br>";
                        }
                        return $resultado;
                    }
                    //Crear el array
                    $numeros = array(5,12,27,69,8,25,33,39);
                    //Recorrerlo y mostrarlo
                    echo "<h3>Recorrerlo y mostrarlo</h3><hr/>";
                    echo "<h3>".mostrarArray($numeros)."</h3>";
                ?>
            </div>
            <div class="content">
                <?php
                    //Ordenarlo y mostrarlo
                    echo "<h3>Ordenarlo y mostrarlo</h3><hr/>";
                    sort($numeros);
                    echo "<h3>".mostrarArray($numeros)."</h3>";
                ?>
            </div>
            <div class="content">
                <?php
                    //Mostrar su longitud
                    echo "<h3>Longitud</h3><hr/>";
                    echo "<h4>El array contiene ".count($numeros)." elementos</h4>";
                ?>
            </div>
            <div class="content">
                <?php
                    //Buscar un objeto
                    echo "<h3>Búsqueda de un objeto</h3><hr/>";
                    $buscar = 69;
                    if(array_search($buscar, $numeros)){
                        echo "<h4><p>El número buscado (".$buscar.")</p><br><p>SÍ se encuentra en este array</p></h4>";
                    }else {
                        echo "<h4><p>El número buscado (".$buscar.")</p><br><p>NO está en este array</p></h4>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>
</body>
<?php require_once '../includes/footer.php';?>