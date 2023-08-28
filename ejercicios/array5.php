<?php require_once '../includes/cabecera.php';?>
<div class="page-content">
    <div class="content">
        <a href="ejercicios.php" class="button">Volver atrás</a><hr/>
        <h2>Crear un array con el contenido de la siguiente tabla</h2><br>
        <pre><table class="custom-table">
            <tr>
                <th> Acción</th>
                <th> Aventura</th>
                <th> Deportes</th>
            </tr>
            <tr>
                <td>GTA 5</td>
                <td>Assassins</td>
                <td>FIFA 23</td>
            </tr>
            <tr>
                <td>COD</td>
                <td>CRASH</td>
                <td>PES 23</td>
            </tr>
            <tr>
                <td>PUGB</td>
                <td>Prince of Persia</td>
                <td>Moto GP 23</td>
            </tr>
        </table></pre><br>
        <h3>Cada fila deberá ir en un fichero separado (usar include).</h3><hr/>
        <?php
            $tabla = array(
                "ACCION" => array("GTA 5","COD","PUGB"),
                "AVENTURA" => array("Assassins","CRASH","Prince of Persia"),
                "DEPORTES" => array("FIFA 23","PES 23","Moto GP 23")
            );
            $categorias = array_keys($tabla);
            /*echo "<pre>";
            print_r($tabla);
            echo "</pre>";*/
        ?>
        <table border ="2" class ="custom-table">
            <tr>
                <?php foreach ($categorias as $cabecera){
                    echo "<th>".$cabecera."</th>";
                    }
                ?>
            </tr>
            <tr>
                <?php require_once 'includes/array5file1.php'; ?>
            </tr>
            <tr>
                <?php require_once 'includes/array5file2.php'; ?>
            </tr>
            <tr>
                <?php require_once 'includes/array5file3.php'; ?>
            </tr>
        </table>       
    </div>
</div>
</body>
<?php require_once '../includes/footer.php'; ?>