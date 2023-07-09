<?php




# gettype se usa para saber que tipo de datos manejamos

# echo se usa para imprimir en pantalla

# para poner una constante de una la fn define

//define('pi',276) ; # se propone el nombre de la cte seguido del valor

# para definir arrays--

$semana = array('lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo');
$nombres= ['seba','juan','guada','clari','elfa','marce','brisa'];

//count($semana) ;// cuenta los valores del array

# para ordenar arreglos en ascendente o alfabeticamente usamos el sort o rsort
//$nombress= sort($nombres);

# condicionales
# isset() sirve para saber si una variable tiene seteado un valor , da true si tiene valor o viceversa
 //$edad=18;

//$edadd= (isset($edad))?  $edad:'no hat datos'; # se usa como el operador ternarios de Js

//  var_dump sirve para conocer varias propiedades/informacion de nuestras variables como el tipo de dato, la cantidad de caracteres y el valor
//var_dump($semana);

// print_r() muestra el valor de la variable
// print_r($nombres);


function saludar($name){
return 'hola'.' '. $name .' '. 'como estas?';

};

saludar('seba');

?>

