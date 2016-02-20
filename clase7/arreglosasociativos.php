<?php


// arreglos asociativos

// asignar un valor a un indice
// del lado izq están los indices, del derecho los valores
$abuelo = array(
	'nombre' 	=> 'Hermenegildo',
	'apellido' 	=> 'Perez',
	'edad' 		=> 88,
	'hijos'		=> array()
);
$padre = array(
	'nombre' 	=> 'Juan',
	'apellido' 	=> 'Perez',
	'edad' 		=> 32,
	'hijos'		=> array()
);

$hijo1 = array(
	'nombre' 	=> 'Pedro',
	'apellido' 	=> 'Perez',
	'edad' 		=> 10,
	'hijos'		=> array()
);


$hija2 = array(
	'nombre' 	=> 'Margarita',
	'apellido' 	=> 'Perez',
	'edad' 		=> 3,
	'hijos'		=> array()
);
//
// echo "Una persona: " . $persona['nombre'] . " " . $persona['apellido'];
// echo "Otra persona: " . $otraPersona['nombre'] . " " . $otraPersona['apellido'];

// meter un valor nuevo a un arreglo

array_push( $padre['hijos'], $hijo1 );
array_push( $padre['hijos'], $hija2 );
array_push( $abuelo['hijos'], $padre );


// funcion recursiva para mostrar familia

function mostrar_persona( $una_persona ) {
	echo '<li>';
		echo $una_persona['apellido'];
		echo ', ';
		echo $una_persona['nombre'];
		echo ': ';
		echo $una_persona['edad'];
		echo ' anhos';
		echo '<br>';
		echo 'Hijos: '. count($una_persona['hijos']) .": ";
		echo '<br>';

		if( count($una_persona['hijos']) > 0 ) {
			echo '<ul>';
				foreach( $una_persona['hijos'] as $hijo ) {
					mostrar_persona( $hijo );
				}
			echo '</ul>';
		}


	echo '</li>';
}






mostrar_persona($abuelo);



?>
