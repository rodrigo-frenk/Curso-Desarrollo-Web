<?php 


		// ejemplo de generación dinámica de HTML
		// a partir de una "base de datos"
		// utilizando PHP

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

