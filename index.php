<!DOCTYPE HTML>
<html lang="es">    
    <head>
        <meta charset="utf-8">
            <!-- se utiliza para definir la codificación de caracteres del documento HTML. En este caso, el atributo
            charset se establece en "utf-8", que es una codificación de caracteres universalmente reconocida y compatible
            con una amplia gama de caracteres y símbolos utilizados en varios idiomas y sistemas de escritura.-->
        <title>UDEMY - Aprendiendo PHP</title>
            <!--se utiliza para definir el título de la página web. El texto que se coloca dentro de esta etiqueta
            aparecerá en la barra de título del navegador y también se mostrará en los resultados de búsqueda
            cuando la página web se encuentre en los motores de búsqueda.-->
        <meta content="Aprendiendo PHP" name="description">
            <!--Esta etiqueta define la descripción de la página para los motores de búsqueda y otros servicios que pueden
            usar esta información. La descripción proporcionada, en este caso "Aprendiendo PHP", se mostrará en los
            resultados de búsqueda o en vistas previas cuando alguien comparta el enlace a la página en redes sociales,
            por ejemplo.-->
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
            <!--Esta etiqueta indica al navegador cómo debe interpretar la página y establecer el modo de compatibilidad.
            En este caso, se establece el modo de compatibilidad en "IE=edge" y "chrome=1". Esto significa que se solicita
            al navegador que utilice la versión más reciente de Internet Explorer disponible y, si es posible, el motor de
            renderizado de Chrome en lugar del motor de IE. Esto ayuda a asegurar que la página se muestre de manera más
            consistente en diferentes navegadores y versiones.-->
        <meta content="width=device-width, initial-scale=1" name="viewport">
            <!--Esta etiqueta controla cómo se ajusta y escala la página en diferentes dispositivos y tamaños de pantalla.
            En este caso, se establece el ancho inicial del viewport para que coincida con el ancho del dispositivo
            ("width=device-width") y se establece el nivel inicial de zoom en 1 ("initial-scale=1").
            Esto asegura que la página se adapte correctamente a dispositivos móviles y se visualice adecuadamente en
            diferentes resoluciones de pantalla.-->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
            <!--La biblioteca de Bootstrap proporciona una serie de estilos CSS predefinidos y componentes visuales
            que pueden aplicarse a una página web para mejorar su apariencia y diseño. La hoja de estilos "bootstrap.min.css"
            contiene toda la información de estilo necesaria para aplicar los estilos de Bootstrap en la página.-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
            <!--Google Fonts es un servicio gratuito proporcionado por Google que ofrece una amplia variedad de fuentes
            tipográficas para su uso en sitios web. En este enlace, se está solicitando la fuente "Open Sans" en varias
            variantes y conjuntos de caracteres.-->
        <style>
            body {
                font-family: 'Open Sans', 'Helvetica', sans-serif;
                color: #000;
                padding: 0;
                margin: 0;
                line-height: 1.4;
            }
            h1, h2, h3, h4, h5, h6, p {
                padding: 0;
                margin: 0;
                color:#333333;
            }
            h1 {
                font-size: 30px;
                font-weight: 700!important;
            }
            h2 {
                font-size: 24px;
                font-weight: 600;
            }
            h3 {
                font-size: 20px;
                font-weight: 500;
                margin-bottom: 10px;
            }
            .navbar {
                position: relative;
                min-height: 40px;
                margin-bottom: 15px;
                border: 2px solid transparent;
                border-radius: 1px !important;
                background-color: #434343;
                padding: 4px;
                font-size: 18px;
            }
            #navbar-label {
                color: #888;
                margin-left: 13px;
            }
            @media (min-width: 768px) {
                .content {
                    flex: 1;
                    padding: 10px;
                    border: 1px solid #ccc;
                    margin: 5px;
                    border-radius: 9px;
                }
                .page-content {
                    display: flex;
                    flex-direction: column;
                    align-items: stretch;
                    min-height: 100vh;
                    padding-bottom: 10px;
                }
                .content-wrapper {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: space-between;
                }
            }
            @media (max-width: 767px) {
                .content {
                    padding: 10px;
                    border: 1px solid #ccc;
                    margin: 5px;
                    border-radius: 9px;
                }
                .page-content {
                    display: flex;
                    flex-direction: column;
                    align-items: stretch;
                    min-height: 100vh;
                    padding-bottom: 10px;
                }
                .content-wrapper {
                    display: flex;
                    flex-direction: column;
                    align-items: stretch;
                }
            }
            .footer {
                font-size: 12px;
                color: gray !important;
                margin-bottom: auto;
                margin-top: auto;
                padding: 10px;
                background-color: #f4f4f4;
            }
            ul li a {
                font-weight: 600;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar">
            <img class="php-img" src="img/php.png" width="50"></a><label id="navbar-label">Aprendiendo PHP</label>
        </nav>
            <?php
                // Constantes en PHP y su declaracion.
                define('name','Marcos Segovia');
                define('web','kacosegovia.com');
                echo '<h1>'.name.' - '.web.'<hr/>';
                echo '<h3><a href="formulario.php" title="formulario">Ingresa tus datos</a></h3>';
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
                        echo '<p>Lista actualizada al '.date('d/m/Y').'</p><br/><br/>';
                    ?>
                </div>   
                <div class="content">
                    <?php
                        // Operadores aritmeticos
                        $num1=12;
                        $num2=17;
                        echo '<div><h2>Operaciones Aritméticas</h2><br><br>';
                        echo 'Primer número: '.$num1.'<br/>';
                        echo 'Segundo número: '.$num2.'<br/><br/>';
                        echo 'Suma: '.($num1+$num2).'<br/>';
                        echo 'Resta: '.($num1-$num2).'<br/>';
                        echo 'Multiplicación: '.($num1*$num2).'<br/>';
                        echo 'División: '.($num1/$num2).'<br/>';
                        echo 'Sobrante o resto: '.($num1%$num2).'<br/></div>';
                    ?>
                </div>
                <div class="content">
                    <?php
                        // Metodo para imprimir en pantalla usando comillas dobles.
                        echo '<h2>Ejercicios</h2><br>
                        <ul><li><a href="ejercicio1.php" title="Primer Ejercicio">Ejercicio 1</a></li>
                        <li><a href="ejercicio2.php" title="Segundo Ejercicio">Ejercicio 2</a></li>
                        <li><a href="ejercicio3.php" title="Tercer Ejercicio">Ejercicio 3</a></li></ul>';
                    ?>
                </div>
            </div>
        </div>
    </body>
    <footer class="footer">
         <?php            
            // Funcion que imprime datos de variables.
            var_dump($num1);            
            // Constantes predefinidas de PHP.
            echo PHP_OS.' - PHP '.PHP_VERSION.' - '.__LINE__.' - '.__FILE__;
        ?>
    </footer>    
</html>
