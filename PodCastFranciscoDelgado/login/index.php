<?php 
require '../clases/AutoCarga.php';
$sesion = new Session();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../estilos.css">
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php 
            if(!$sesion->isLogged())
                {
        ?>
        <div id="logeando">
            <form name="login" action="phplogin.php" method="POST">
                <label>User:</label>
                <input type="text" name="user" value=""/>
                <br><br>
                <label>Pass: </label>
                <input type="password" name="password" value=""/>
                <br>
                <input id="Blogin" type="submit" value="Login" name="login"/>
            </form>
        </div>
        <?php } else{ ?>  
        <a href="phplogout.php">logout</a>
        <?php 
                    }
                ?>
    </body>
</html>
