<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../estilos.css">
        <meta charset="utf-8">
        <title></title>
    </head>
    <body> 
        <div id="cont">
            <a href="../login/user.php">VOLVER</a>
            <a href="../login/phplogout.php" class="logout">LOGOUT</a>
            <?php
            
            $mostrar = array_diff(scandir("../musica/"), array('..', '.'));
            echo "<ol>";
            foreach ($mostrar as $key => $value) {
                echo $value;
                echo '<li><audio src="'.'../musica/'. $value . '" loop controls></audio></li><br>';
            }
            echo "</ol>";
            ?>
        </div>
    </body>
</html>