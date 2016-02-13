<?php
get_header();


if( have_posts() ) :
	while( have_posts() ) :
		the_post();
?>


<div id="entrada_single" class="cols-12">

	<h1 class="titulo"><?php echo get_the_title(); ?></h1>

	<div class="cols-12">
		<?php echo get_the_post_thumbnail(); ?>
	</div>


	<div class="contenido">
		<?php echo get_the_content(); ?>
	</div>

</div>

<?php

	endwhile;
endif;


get_footer();
?>