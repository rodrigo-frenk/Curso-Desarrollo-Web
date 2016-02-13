<!DOCTYPE HTML>
<html>
	
	<head>
	
		<meta charset="utf-8">
	
		<title>
			Plantilla para Blog
		</title>
		
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		
		<?php 
		$theme_directory = get_stylesheet_directory_uri() . "/";
		?>

		<link rel="stylesheet" href="<?php echo $theme_directory; ?>css/grid.css">
		<link rel="stylesheet" href="<?php echo $theme_directory; ?>css/estilos.css">
	

		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>

		<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

		<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
				

		<script>
		$(document).ready(function(){
			$('#fondos').slick({fade:true,autoplay:true,arrows:false});
		})
		</script>

		<?php wp_head(); ?>




	</head>


	<body>
		
		<header id="header">

			<div id="logo" class="cols-2">
				<img src="http://fakeimg.pl/100x50/fff,0" alt="">
			</div>
			
			<div id="redes" class="cols-8">
				<div class="cols-4">
					Facebook
				</div>
				<div class="cols-4">
					Twitter
				</div>
				<div class="cols-4">
					Instagram
				</div>

			</div>
			<div id="menu" class="cols-2">
				Menú
			</div>
		</header>



		<section id="home" class="main scrollH">