<!DOCTYPE HTML>
<html lang=es>
	<head>
		<meta charset="UTF-8"> 
		<title>Udemy - Formulario</title>
	</head>
        <body>
            <h2><a href="index.php" title="inicio">Volver...</a></h2><br/>
            
            <h3>Ingresa tus datos</h3>
            <form method="POST" action="recibir.php" name="formulario">
                <p>
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" size="23" placeholder="Ingresa tu nombre...">
                </p>    
                <p>
		<label for="apellido">Apellido</label>
		<input type="text" name="apellido" size="20" placeholder="Ingresa tu apellido...">
                </p>    
                <p>
		<label for="mail">E-mail</label>
		<input type="text" name="mail" size="20" placeholder="Ingresa tu E-mail...">
                </p>
                <p><input type="submit" value="Enviar datos"/></p>
            </form>
        </body>