<?php
//FUNCIONA CON MP3!!
$MAX_SIZE = 50000000000;
$tamano2 = $_FILES["archivo"]['size'];
$tipo2 = $_FILES["archivo"]['type'];
$archivo2 = $_FILES["archivo"]['name'];
if ($_FILES['archivo']['size'] <= $MAX_SIZE) {
    if ($_FILES['archivo']['name'] != NULL) {
        $destino2 = "../musica/" . $archivo2;
        if ($_FILES['archivo']['type'] == "audio/mpeg" or $_FILES['archivo']['type'] == "audio/mp3") {
            move_uploaded_file($_FILES['archivo']['tmp_name'], $destino2);
            echo "<span><br>El audio <b>" . $archivo2 . "</b> se ha subido correctamente</span> </br>";
            require '../clases/AutoCarga.php';
            $session = new Session();
            $canciones = $session->get("canciones");
            if ($canciones != null) {
                foreach ($canciones as $key => $value) {
                    echo "<p>$value</p>";
                    echo "<p><a href='../control/phpadd.php?cancion=music1'>Music2</a></p>";
                }
            }
        } else {
            echo "Error al subir el archivo " . $archivo2 . "<br><b>" . " El archivo no es un audio" . "</b>";
            $contador = null;
        }
    }
} else {
    echo "Error al subir el archivo " . $archivo2 . "<br><b>" . " El archivo es demasiado pesado" . "</b>";
    $contador = null;
}
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
            <form action="subirmusica.php" method="post" enctype="multipart/form-data">
                <input type="file" name="archivo" multiple/>
                <input type="submit" />
                <select name="categoria">
                <option>Pop</option>
                <option>Rock</option>
                <option>Rap</option>
                <option>Heavy</option>
                <option>Otros</option>
                </select>
             
            </form>
          
        </div>
    </body>
</html>
