<?php 
    //Cookie básica
    setcookie("cookieBasica","Yo soy una cookie básica");
    //Cookie con expiracion (1 año)
    setcookie("cookieExpira", "Yo soy una cookie con expiración", time()+(60*60*24*365));
    
    header('Location:cookies.php');
?>