<?php 


		// ejemplo de generación dinámica de HTML
		// a partir de una "base de datos"
		// utilizando PHP

$arreglo = array(
	"Andrea"=>"email@email.com",
	"Viviana"=>"email@email.com",
	"Adalberto"=>"email@email.com",
	"Rebeca"=>"email@email.com",
	"Mariana"=>"email@email.com",
	"Karen"=>"email@email.com",
	"Susana" => "email@email.com",
	"Rodrigo" => "email@email.com"
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

