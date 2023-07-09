<?php
 // el metodo $_SERVER['REQUEST_METHOD'] sirve para saber porque metodo se envian los datos de uin formulario

if ($_SERVER['REQUEST_METHOD'] =='POST'){
    echo 'se enviaron por post';

}

?>