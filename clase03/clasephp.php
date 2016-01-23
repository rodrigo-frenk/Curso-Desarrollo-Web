<?php

/*

Clase 3

PHP: arreglos

Un arreglo es un conjunto de espacios de memoria que puede
guardar varios datos de manera ordenada

*/


$sillas = [
	1,1,1,
	1,0,0,
	1,0,1,
	0,1,1
];

// echo $sillas[ 0 ]; //primera silla: empezamos a contar desde 0
// echo $sillas[ 1 ]; //segunda silla
// echo $sillas[ 2 ]; //tercera silla
// // ...
// echo $sillas[ 11 ]; //ultima silla

echo '<br>';

// esta ocupada la primera silla?

if( $sillas[4] == 1 ) {
	// echo 'Esta ocupada la quinta silla';
} else {
	// echo 'Esta vacia la quinta silla';
}




//equivalentes:
$sillas = [];
$sillas = array();


$sillas[0] = 'Cynthia';
$sillas[1] = 'Karla';
$sillas[2] = 'Melany';
$sillas[3] = 'Mariana';
// tres formas equivalentes de dar valor nulo
$sillas[4] = 0;
$sillas[5] = false;
$sillas[6] = NULL;

$sillas[7] = 'Susana';
$sillas[8] = 'Karen';
$sillas[9] = 0;
$sillas[10] = 'Rebeca';
$sillas[11] = 'Andrea';

// funciones utiles para mostrar contenido de variable
//var_dump( $sillas );
// print_r( $sillas );


// Loop ( en español, bucle ) para recorrer todas las sillas automaticamente

for( $i = 0; $i < 12; $i++ ) {

	echo "<br>";	
	echo "En la silla " . ( $i + 1 );
	
	if( $sillas[ $i ] ) {
		echo " esta sentada " . $sillas[ $i ];
	} else {
		echo " no hay nadie";
	}

}

	
// estructura equivalente:
echo "<br>";	
// otro tiṕo de bucle para repetir
// una accion por cada elemento de un arreglo

foreach( $sillas as $posicion => $nombre ) {

	echo "<br>";	
	echo "En la silla " . ($posicion + 1 );
	
	if( $nombre ) {
		echo " esta sentada " . $nombre;
	} else {
		echo " no hay nadie";
	}

}




?>