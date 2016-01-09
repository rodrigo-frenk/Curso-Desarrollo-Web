<?php

	// Comentario:
	// Cualquier texto después de '//' es ignorado por PHP.

	// Sirven para explicar nuestro código
	// o dejar mensajes a nosotros mismos u otras personas

	/*
	Este es un comentario multi-línea
	Abarca varias líneas
	*/


	// funcion "echo": muestra contenido en la pantalla:
	echo "Hola";
	echo 1+1;




	// Muchas veces se intercala código PHP con HTML:
	?>

	<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>


		<h3>Código HTML</h3>

		<div>
			<?php 
			$frase = "Código PHP";
			echo $frase;
			?>
		</div>




		<?php

		// VARIABLES

		// son como buzones, puede cambiar su contenido.


		$mi_variable = "Cualquier contenido";
		echo $mi_variable;
		echo '<br/>';

		$mi_variable = 17;
		echo $mi_variable;
		echo '<br/>';
		
		$mi_variable = date('D-d-M-Y');
		echo $mi_variable;
		echo '<br/>';
		
		?>



	</body>
	</html>
