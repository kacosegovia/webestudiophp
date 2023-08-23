<?php require_once 'includes/cabecera.php';?>
<div class="page-content"><br><br>
    <div class="content">
        <?php
            if(!empty(filter_input(INPUT_POST, 'nombre')) &&
                !empty(filter_input(INPUT_POST, 'apellido')) &&
                !empty(filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL))){
                echo '<p class="p-recibir-index">Nombre : <span class="p-recibir">'. $_POST['nombre'].'</span></p><br>';
                echo '<p class="p-recibir-index">Apellido : <span class="p-recibir">'. $_POST['apellido'].'</span></p><br>';
                echo '<p class="p-recibir-index">E-mail : <span class="p-recibirtwo">'. $_POST['mail'].'</span></p><br>';
                echo '<a href="index.php" class="button">Volver al Inicio</a>';
            }else {
                echo "<br><h2>Debes introducir tus datos y un correo válido</h2><br><br>";
                echo '<a href="formulario.php" class="button">Volver atrás</a>';
            }
        ?>
    </div>
 </div>
 <?php require_once 'includes/footer.php';?>