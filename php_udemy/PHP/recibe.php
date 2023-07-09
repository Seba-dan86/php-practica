<?php
if (!$_POST){
    header('Location: https://localhost/PHP/formulario/'); // con esto redirigimops en caso de que no haya completado los campos requeridos

} else {
    $nombre = $_POST['nombre']; //trae valores de los inputs
$clave = $_POST['clave'];
$sexo = $_POST['sexo'];

echo 'Usuario:'.$nombre.'clave: '.$clave.' Genero:'.$sexo;

}

?>