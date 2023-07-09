<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form">
    <form action="recibe.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre :">
        <br />
        <input type="password" name="clave" placeholder="clave :">
        <br />
        <label for="sexo">hombre</label>
        <input type="radio" name="sexo" value="hombre">
        <br />
        <label for="sexo">mujer</label>
        <input type="radio" name="sexo" value="mujer">
        <br />

<input type="submit" value="enviar">

    </form>
    </div>

</body>
</html>