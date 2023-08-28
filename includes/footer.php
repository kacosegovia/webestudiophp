    <footer class="footer">
        <?php
            define('name','Marcos Segovia ');            
            $userAgent = $_SERVER['HTTP_USER_AGENT'];
            echo "PHP ". PHP_VERSION."<br>";
            echo $userAgent."<br>";
            echo "Todos los derechos reservados ". "&copy; ". name." ". date('Y');
        ?>
    </footer>
</html>