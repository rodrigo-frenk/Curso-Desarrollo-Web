<div id="home_imagen_fondo">
	<img src="http://lorempixel.com/1200/500/sports" alt="">
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
	
	<?php for ($i=0; $i < 5; $i++) : ?>

	<!-- #entrada_$.entrada.cols-6>.imagen>img^+.contenido>(h4{Título de Entrada $}+img[src=http://fakeimg.pl/600x350]+.fecha{1 de marzo, 2016}+p{lorem10}+button{Ver Más}) -->
	<div id="entrada_<?php echo $i; ?>" class="entrada cols-6">
	
		<a href="<?php echo 'entrada.php/'.$i; ?>">
			
			<div class="imagen">
				<img src="http://fakeimg.pl/350x450" alt="">
			</div>

			<div class="contenido">
				<h4>Título de Entrada <?php echo ($i+1); ?></h4>
				<img src="http://fakeimg.pl/600x350" alt="">
				<div class="fecha">1 de marzo, 2016</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, officia.</p>
				<button>Ver Más</button>
			</div>
		</a>
	
	</div>

	<?php endfor; ?>

</div><!-- #blog -->




