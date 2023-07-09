<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login con php</title>
</head>
<body>
    <form action="home.html" method="post">
<label for="nombre">Nombre</label>
<input type="text" name="nombre" id="nombre">
<label for="correo">Correo</label>
<input type="email" name="correo" id="correo">
<input type="submit" value="enviar" name= "login" >
    </form>


</body>
</html>
<?php
    include 'conexiones.php';
    ?>