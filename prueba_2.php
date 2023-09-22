<?php
if($_POST){
//recibir informacion del formulario HTML  (metodo pots)
 $Nombre=$_POST['txtNombre'];
 echo "hola" .$Nombre;
}


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Prueba 2</title>
    </head>
    <body>
        
        <form action="index.php" method="post">     
            Usuario:     
            <input type="text" name="txtNombre" value="" placeholder="Ingresar Nombre">
            <br/>
            Contraseña:
            <input type="password" name="txtPASS" value="" placeholder="Ingresar clave">
            <br/>
            <input type="submit" value="guardar" name="btn">
            <br/>
         
        </form>
        
    </body>
</html>