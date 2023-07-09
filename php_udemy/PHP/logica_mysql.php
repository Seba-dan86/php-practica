<?php
include( 'mysql_conect.php' );

$name=$_POST['name'];
$email=$_POST['email'];

$db_consulta = "INSERT INTO login(name,email) VALUES ('$name','$email')";
$resultado= mysqli_query($conexion,$db_consulta);




?>