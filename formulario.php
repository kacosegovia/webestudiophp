<?php require_once 'includes/cabecera.php';?>
<div class="page-content"><br>
    <div class="content" id="content-cookies">
        <h1>Ingresa tus datos</h1>
        <form method="POST" action="recibir.php" name="formulario" id="content-cookies" enctype="multipart/form-data">
            <div class="content" id="content-cookies"><p><label for="username">Usuario :</label>
            <input type="text" name="username" size="20" placeholder="Ingresa tu nombre..." class="input-label" autofocus="autofocus"/></p>    
            <br><p><label for="mail">Correo  :</label>
            <input type="text" name="mail" size="20" placeholder="Ingresa tu E-mail..." class="input-label"/></p>
            <br><p><label for="password">Password :</label>
                <input type="password" name="password" size="20" placeholder="Ingresa tu clave..."class="input-label"/></p></div><br>
            <p><input type="submit" value="Enviar datos" class="button"/></p><br>
        </form>
    </div>
</div>
</body>
<?php require_once 'includes/footer.php'; ?><input type=""