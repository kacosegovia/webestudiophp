<!DOCTYPE HTML>
<html lang="es">    
    <head>
        <meta charset="utf-8">
            <!-- se utiliza para definir la codificación de caracteres del documento HTML. En este caso, el atributo
            charset se establece en "utf-8", que es una codificación de caracteres universalmente reconocida y compatible
            con una amplia gama de caracteres y símbolos utilizados en varios idiomas y sistemas de escritura.-->
        <title>Tercer Ejercicio</title>
            <!--se utiliza para definir el título de la página web. El texto que se coloca dentro de esta etiqueta
            aparecerá en la barra de título del navegador y también se mostrará en los resultados de búsqueda
            cuando la página web se encuentre en los motores de búsqueda.-->
        <meta content="Aprendiendo PHP, ejercicio 3" name="description">
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
                margin-left: 5px;
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
            h2 a {
                margin: 10px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar">
            <img class="php-img" src="../img/php.png" width="50"></a><label id="navbar-label">Aprendiendo PHP</label>
        </nav>
        <h2><a href="../index.php" title="inicio">Volver...</a></h2><br/>
        <p>Escribir un programa que imprima por pantalla los cuadrados de los 40 primeros números naturales</p>
        <p>PD. Utiliza bucle WHILE</p></br>
        <?php
            
        ?>
    </body>
</html>
