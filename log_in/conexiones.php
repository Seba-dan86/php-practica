<?php
session_start();

# conectamos el archivo a la base de datos.
$host='127.0.0.1:3308';
$usuario= 'root';
$clave='';
$baseDeDatos='login_con_php';

$conexion = mysqli_connect($host,$usuario,$clave,$baseDeDatos);
if (!$conexion){
    echo "Error en la conexion de datos";
}
 #-----------------------------------------------------------------#
 $nombre=$_POST['nombre']; #capturamos lo que el campo nombre tiene
$correo=$_POST['correo']; #capturamos lo que el campo correo tiene

if(isset($_POST['login']) && !empty( $nombre) && !empty( $correo)){
    $nombre=trim($nombre);
    $correo=trim($correo);
$consulta="INSERT INTO data VALUES ('$nombre','$correo')";# insertamos datos a sql
$query=mysqli_query($conexion,$consulta); # consulta la base de datos

}else{
    echo "<script>alert('se deben completar los campos');</script>";;
};


#-----------------------------------------------------------------#
$mostrar_datos="SELECT * FROM data where nombre='$nombre' and correo='$correo' "; # preguntamos si hay datos a la base de datos
$query_datos=mysqli_query($conexion,$mostrar_datos); # consultamos
$show_filas=mysqli_num_rows($query_datos); # preguntamos si hay filas
$show_datos=mysqli_fetch_array($query_datos); # traemos el select en un array

mysqli_close($conexion);



?>