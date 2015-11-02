<?php
require '../clases/AutoCarga.php';
$session = new Session();
$MAX_SIZE = 50000000000;
$tamano2 = $_FILES["archivo"]['size'];
$tipo2 = $_FILES["archivo"]['type'];
$archivo = $_FILES["archivo"]['name'];
if ($_FILES['archivo']['size'] <= $MAX_SIZE) {
    if ($_FILES['archivo']['name'] != NULL) 
        {
        $ubicacion = "../musica/" . $archivo;
        if ($_FILES['archivo']['type'] == "audio/mvw" or $_FILES['archivo']['type'] == "audio/mp3") 
            {
            
                move_uploaded_file($_FILES['archivo']['tmp_name'], $ubicacion);
                echo "El archivo" . $archivo . "esta subido";
            
        
            $cancionUser = $session->get("canciones");
            if ($cancionUser != null) {
                foreach ($cancionUser as $key => $value) {
                    echo "<h2>$value</h2>";
                    echo "<a href='../control/phpadd.php?cancion=music1'>Music2</a>";
                }
            }
        } else {
            echo "Error al subir el archivo " . $archivo . "<br><b>" . " El archivo no es un formato valido inserte mvw o mp3" . "</b>";
        }
    }
} else {
    echo "Error al subir el archivo " . $archivo . " El archivo sobrepasa el peso" . "</b>";
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
