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



		<?php 

		$arreglo = array(
			"Andrea"=>"eandrea969@gmail.com",
			"Viviana"=>"leyvakar92@gmail.com",
			"Adalberto"=>"adalberto.romero.rojas@gmail.com",
			"Rebeca"=>"rebeka_2822@hotmail.com",
			"Mariana"=>"mariana.morgar@gmail.com",
			"Karen"=>"karen_rodriguezleon@outlook.com",
			"Susana" => "mailde@susana.com",
			"Rodrigo" => "furenku@gmail.com"
		 );


		// no intercalar VS. intercalar 

		// intercalar
		echo "<h2>";
			echo "Total personas: " . count($arreglo);
		echo "</h2>";

		?>
		

		<!-- no intercalar -->
		<h2>
			<?php 
			echo "Total personas: " . count($arreglo);
			?>
		</h2>

		<?php


		foreach ($arreglo as $nombre => $email) {
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











	</body>
	</html>
