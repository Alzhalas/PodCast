<?php

require '../clases/AutoCarga.php';
$session = new Session();
$cancion = Request::get("cancion");
$canciones = $session->get("canciones"); 

if($canciones!=null)
{
    $canciones[]= $cancion;
    $session->set("canciones", $canciones);
}else{
    
    $canciones = array();
}




header("Location:../subir/subirmusica.php");
exit();