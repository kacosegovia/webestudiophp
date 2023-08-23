<?php require_once '../includes/cabecera.php';?>
<div class="page-content">
    <div class="content">
        <?php
            /* 
            * FUNCIONES:
            * Una función es un conjunto de instrucciones agrupadas bajo un nombre concreto
            * las cuales pueden invocarse llamando a la función cuantas veces sea necesario.
            * 
            * 
            * function nombreDeMiFuncion () {
            *    //INSTRUCCIONES
            *    //CONJUNTO DE INSTRUCCIONES
            * }
            */

            //Ejemplo 1
            function muestraNombres(){
                echo "Marcos <br>";
                echo "Andrés <br>";
                echo "Segovia <br>";
                echo "Díaz <br><hr/>";
            }
            //Llamar función 1
            muestraNombres();


            //Ejemplo 2 (parámetros)
            function tabla($n){
                echo "<h3>Tabla de multiplicar del número $n </h3>";
                for($i = 1;$i <= 12;$i++){
                    echo "$n x $i = ".($n*$i)."<br>";
                }
            }
            //Llamar función 2
            tabla(666);
            echo "<br><hr/>";

            //Ejemplo 3 (multiparametros)
            function calculadora($num1, $num2, $negrita = false) {
                $sumar = $num1 + $num2;
                $restar = $num1 - $num2;
                $multiplicar = $num1 * $num2;
                $dividir = $num1 / $num2;
                $formato = $negrita ? "<strong>%s</strong>" : "%s";
                $cadena = sprintf(                                              //Ejemplo abajo.
                            $formato,
                            "<p>Suma: $sumar<br>Resta: $restar<br>Multiplicación: $multiplicar<br>División: $dividir</p><hr/>"
                        );
                return $cadena;
            }
            echo calculadora(3, 43, true);
            echo calculadora(6666, 443);
            
            //Ejemplo 3.1 sprintf()
            $nombre = "Marcos";
            $edad = 38;
            $altura = 1.83;
            $cadena_formateada = sprintf("<br><h1>Hola, soy %s. Tengo %d años y mido %.2f metros.</h1><br><hr/>", $nombre, $edad, $altura);
            echo $cadena_formateada;


        ?>
</div>
</div>
</body>
<?php require_once '../includes/footer.php';?>