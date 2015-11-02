<?php
require '../clases/AutoCarga.php';
$sesion = new Session();

$Arrayusuario = array(
     "fran" => "delgado",
     "esta" => "aprobado"
 );
 
 $nombre = Request::post("user");
 $pass = Request::post("password");
 

 if(isset($Arrayusuario[$nombre])&& $Arrayusuario[$nombre]==$pass){
     $usuario = new Usuario($nombre);
     $sesion->setUser($usuario);
     $sesion->sendRedirect("user.php");
 }else{
     $sesion->destroy();
     $sesion->sendRedirect("index.php");
 }
 
