<?php 

	$args = array(
		'category_name'    => 'fondos'
	);

	$query = new WP_Query( $args );



?>

<div id="home_imagen_fondo">
	<div id="fondos">

<?php 

	if( $query->have_posts() ) :
		while( $query->have_posts() ) :
			$query->the_post();
			echo '<div class="slide">';
				echo get_the_post_thumbnail();
			echo '</div>';

		endwhile;
	endif;



 ?>		
	</div>
	<!-- #cortina_fondo.cortina -->
	<div id="cortina_fondo" class="cortina"></div>
</div>



<div id="home_titulo_texto">
	<div id="home_titulo">
		<h1>
			Blog
		</h1>
	</div>
	<div id="home_texto">
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit.
		</p>
	</div>
</div>


<!-- #blog -->
<div id="blog">
	
	<?php 

	$entradas = get_posts();

	foreach( $entradas as $entrada ) :

		$ID = $entrada->ID;
	?>

	<!-- #entrada_$.entrada.cols-6>.imagen>img^+.contenido>(h4{Título de Entrada $}+img[src=http://fakeimg.pl/600x350]+.fecha{1 de marzo, 2016}+p{lorem10}+button{Ver Más}) -->
	<div id="entrada_<?php echo $ID; ?>" class="entrada cols-6">
	
		<a href="<?php echo get_permalink( $ID ); ?>">
			
			<div class="imagen">
				<?php echo get_the_post_thumbnail( $ID, 'medium' ); ?>
			</div>

			<div class="contenido">
				<h2><?php echo get_the_title($ID); ?></h2>
				
				<?php //echo get_the_post_thumbnail( $ID, 'medium' ); ?>
				
				<div class="fecha"><?php echo get_the_date( 'D-d-m-y', $ID );  ?></div>
				<p><?php echo get_the_excerpt($ID); ?></p>
				<button>Ver Más</button>
			</div>
		</a>
	
	</div>

	<?php endforeach; ?>

</div><!-- #blog -->




