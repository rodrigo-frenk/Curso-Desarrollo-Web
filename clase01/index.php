<html>
	<head>
		<meta charset="UTF-8">
	</head>

	<body>

<?php
	// PHP básico.
	
	// PHP: Hypertext Preprocessor



	// Comentario:
	// Cualquier texto después de '//' es ignorado por PHP.

	// Sirven para explicar nuestro código
	// o dejar mensajes a nosotros mismos u otras personas

	/*
	Este es un comentario multi-línea
	Abarca todo el texto comprendido
	entre los símbolos de comentario
	*/


	// 1. Mostrando contenido en la pantalla:
	
	// La función "echo": muestra contenido en la pantalla:
	
	echo "Hola";
	
	echo 1+1;


	/*

	NOTA: Observar la sintaxis.
		1. El comando 'echo' muestra cualquier información que se ubique a su derecha.
		2. La palabra "Hola" está escrita entre comillas.
		3. Cada comando debe concluirse con un ';' (punto y coma)

	*/



	/*

	2. Incorporando PHP a HTML

		Para ubicar la información mostrada con PHP dentro de
		una estructura semántica y/o dentro de un diseño, es
		necesario ubicarla dentro de etiquetas HTML.
		Para esto, hay dos estilos:

	*/




	/*
	2.1 Intercalando PHP con HTML:
		Se utilizan las etiquetas <?php y ?> para abrir y cerrar bloques de PHP
	*/

	?>

		<h3>Código HTML</h3>

		<div>
			<?php 
			$frase = "Código PHP";
			echo $frase;
			?>
		</div>


	<?php 

	/*

	2.2 Escribiendo etiquetas HTML desde PHP
	
		Sin salir de PHP, podemos escribir etiquetas HTML
		utilizando "strings"
	*/
	echo '<div>';

		echo '<p>';
			echo 'Este texto está dentro de un párrafo HTML';
		echo '</p>';

		echo '<a href="#">';
			echo 'Este texto es un link';
		echo '</a>';

	echo '</div>';	
	?>




	<?php

	// 3. VARIABLES
	// cualquier palabra antecedida por un signo de dólar ($) 
	// se vuelve una variable, a la que podemos asignar cualquier contenido.
	
	$mi_variable = "Cualquier contenido"; // un texto
	echo $mi_variable;
	echo '<br/>'; // line break para mostrar variable en una sóla línea.

	$mi_variable = 17; // un número
	echo $mi_variable;
	echo '<br/>'; // line break para mostrar variable en una sóla línea.
	
	$mi_variable = date('D-d-M-Y'); // un objeto que arroja la fecha de hoy en un formato legible.
	echo $mi_variable;
	echo '<br/>'; // line break para mostrar variable en una sóla línea.
	
	?>



	</body>
</html>
