<?php require_once '../includes/cabecera.php';?>
<div class="page-content">
    <div class="content">
        <a href="ejercicios.php" class="button">Volver atrás</a><hr/>
        <h2>Hacer un script que nos muestre todos los números que hay entre 2 números recibidos por GET</h2><hr/>
        <h3>Ingresa 2 números, el segundo número debe ser mayor</h3><br>
            <form method="GET" action="ejercicio5-1.php" name="numeros">
                <p><label class="email-with-margin" for="numero1">Primer número</label>
		<input type="number" name="numero1" size="2" class="input-label"></p>    
                <p><label for="numero2">Segundo número</label>
		<input type="number" name="numero2" size="2" class="input-label"></p><br>
                <p><input class ="button" type="submit" value="Enviar"/></p>
            </form>
    </div>
</div>
</body>
<?php require_once '../includes/footer.php';?>