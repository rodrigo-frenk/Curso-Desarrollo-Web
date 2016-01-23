<?php 


// Introducción a PHP

// variables

$un_numero = 3;

$otro_numero = 4;

// operador de suma:

$suma = $un_numero + $otro_numero;



// Presentación / Vista para el usuario:

// operador de concatenación "."
// Sirve para añadir más texto (caracteres) a una variable

$texto = "Primer Numero: " . $un_numero;

// Podemos seguir añadiendo texto a una variable:

$texto = $texto . "<br/>";

// Lo anterior, se puede abreviar con el siguiente operador ".=" :

$texto .= "<br/>";

$texto .= " Segundo numero: " . $otro_numero;

$texto .= "<br/>";
$texto .= " Resultado: " . $suma;

$texto .= "<br/>";



echo $texto;



// Estructura de control
// Podemos evaluar una condición ( revisar si la súma es mayor que 0 )

if( $suma > 0 ) {

	// Si es mayor que 0, ejecutar este bloque de código
	echo "Resultado es positivo";

} else {
	// De otro modo, ejecutar éste:
	echo "Resultado es negativo";

}
							// operadores de comparacion
							// > mayor que
							// > menor que
							// >= mayor o igual que
							// <= menor o igual que
							// == igual que
							// != diferente que 



// 3. Funciones 

/*

Podemos declarar funciones, algo así como acciones que podemos "enseñarle"
a la computadora para que las ejecute cada que las necesitamos.

Sintaxis:

1. La palabra function indica que vamos a declarar una palabra como nombre
de una nueva funcion

2. Los paréntesis "()" sirven para pasar datos a la función. Ver más adelante.

3. Las llaves "{}" abren un espacio dentro del cual nosotros podemos ejecutar código.

*/

function saluda() {
	echo "</br>";
	echo "Hola";
}
function despide() {
	echo "</br>";
	echo "Adios";
	echo "</br>";
}


// Después de declarar las funciones, podemos mandarlas llamar:

saluda();

despide();

// Función a la que se pasan datos (o argumentos, también llamados parámetros)
function suma_numeros( $a, $b ) {
	return $a + $b;
}

echo suma_numeros( 100, 50 );

echo '<br/>';

echo suma_numeros( 1, 9 );

echo '<br/>';

// reutilizando funciones dentro de funciones
echo suma_numeros( suma_numeros( 1, 9 ), suma_numeros( 3, 2 ) );
echo '<br/>';






?>
