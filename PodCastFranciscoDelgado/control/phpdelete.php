<?php

session_start();
if(isset($_SESSION['canciones'])){
    unset($_SESSION['canciones']);
}
exit();
header("Location:../subir/subirmusica.php");