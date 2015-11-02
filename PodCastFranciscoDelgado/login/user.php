<?php
require '../clases/AutoCarga.php';
$sesion = new Session();

/*if(!$sesion->isLogged()){
    $sesion->sendRedirect("index.php");
    exit();
} no sirve pa na creo*/
$user = $sesion->getUser();

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../estilos.css">
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <div id="logeando">
            <form action="../subir/index.php" method="post" enctype="multipart/form-data">
                <button name="subir">Subir Canción</button>
            </form>
            
            <form action="../mostrar/index.php" method="post" enctype="multipart/form-data">
                <button name="mostrar">Lista de canciones por categoría</button>
            </form>
        </div>
    </body>
</html>
