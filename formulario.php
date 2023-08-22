<?php require_once 'includes/cabecera.php';?>
<h3><a href="index.php" title="inicio">Inicio</a></h3><hr/>
<div class="page-content">
    <div class="content">
        <h1>Ingresa tus datos</h1><br>
        <form method="POST" action="recibir.php" name="formulario">
            <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" size="20" placeholder="Ingresa tu nombre..." class="input-label">
            </p>    
            <p>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" size="20" placeholder="Ingresa tu apellido..."class="input-label">
            </p>    
            <p>
            <label class="email-with-margin" for="mail">E-mail</label>
            <input type="text" name="mail" size="20" placeholder="Ingresa tu E-mail..." class="input-label">
            </p><br>
            <p><input type="submit" value="Enviar datos" class="centered-button"/></p><br>
        </form>
    </div>
</div>
</body>
<?php require_once 'includes/footer.php'; ?>