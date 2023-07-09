<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>

    <form  method="post">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="name" >
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="email" >

        <input type="submit" value="send" name="register">
    </form>

<?php
include('logica_mysql.php');
?>
</body>
</html>
