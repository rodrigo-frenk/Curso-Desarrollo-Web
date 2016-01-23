<?php 


	// ejemplo de generación dinámica de HTML
	// a partir de una "base de datos"
	// utilizando PHP

	// utilización de un arreglo para almacenar información

	$personas = array(
		array( "nombre" => "Andrea", "email" => "email@email.com" ),
		array( "nombre" => "Viviana", "email" => "email@email.com" ),
		array( "nombre" => "Adalberto", "email" => "email@email.com" ),
		array( "nombre" => "Rebeca", "email" => "email@email.com" ),
		array( "nombre" => "Mariana", "email" => "email@email.com" ),
		array( "nombre" => "Karen", "email" => "email@email.com" ),
		array( "nombre" => "Susana" , "email" =>  "email@email.com" ),
		array( "nombre" => "Rodrigo" , "email" =>  "email@email.com" )
	);



echo "<h2>";
	echo "Total personas: " . count( $personas ); // 'count' nos entrega el número de elementos del arreglo
echo "</h2>";


// mostrar primera persona:

// eligir la primera persona, contando desde 0
$primera_persona = $personas[ 0 ];

// obtener su nombre
$nombre = $primera_persona["nombre"];

echo "<h4>";

	echo "Primera persona: ";
	echo $nombre;
echo "</h4>";



// Mostrar todas las personas:

// contar de 0 a 8 (el número total de personas)

for( $i=0; $i < count($personas); $i++ ) {
	
	// obtener datos del arreglo:

	// seleccionar una persona a la vez
	$persona = $personas[ $i ];
	// obtener su nombre
	$nombre = $persona["nombre"];
	// obtener su email
	$email = $persona["email"];

	?>

	<li>
		<h5>
			<?php echo $nombre; ?>
		</h5>
		<div class="email">
			<a href="mailto:<?php echo $email; ?>">
				<?php echo $email; ?>
			</a>
		</div>
	</li>

	<?php
}



?>