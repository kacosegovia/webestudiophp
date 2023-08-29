<?php
    //Borrar una Cookie ¿?
    setcookie("cookieBasica", "", time()-100);
    setcookie("cookieExpira","",time()-100);
    header('Location:cookies.php');
?>

