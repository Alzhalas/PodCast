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
