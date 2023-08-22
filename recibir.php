<?php require_once 'includes/cabecera.php';?>
<h3><a href="index.php" title="inicio">Inicio</a></h3><hr/>
<div class="page-content">
    <div class="content">
        <?php
            if(!empty(filter_input(INPUT_POST, 'nombre')) &&
                !empty(filter_input(INPUT_POST, 'apellido')) &&
                !empty(filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL))){
                echo '<p class="p-recibir-index">Nombre : <span class="p-recibir">'. $_POST['nombre'].'</span></p><br>';
                echo '<p class="p-recibir-index">Apellido : <span class="p-recibir">'. $_POST['apellido'].'</span></p><br>';
                echo '<p class="p-recibir-index">E-mail : <span class="p-recibir">'. $_POST['mail'].'</span></p><br></div></div>';
            }else {
                echo "<br><h2>Debes introducir tus datos y un correo válido</h2><br><br>";
            }
        ?>
    </div>
 </div>
 <?php require_once 'includes/footer.php';?>