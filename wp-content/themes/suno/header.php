<?php

/**
 * Theme header partial.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyApp
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>




	<header class="wrapper headerSuno">

		<div class="headerSuno__menu">

			<div class="headerSuno__menu__hamburger">
				<input type="checkbox" id="toggleMenu">
				<label for="toggleMenu" id="hamburgerMenu" onclick="validate()">
					<span></span>
					<span></span>
					<span></span>
				</label>
			</div>

			<img class="headerSuno__menu__logo" src="<?php echo myapp_get_theme_image('header/logo-suno.svg'); ?>" width="110" height="32" alt="suno logo">

			<ul id="menuMobi">
				<li>
					<input type="checkbox" id="menu-1">
					<label for="menu-1" id="labelMenu-1">
						<span>Assinaturas</span>
					</label>
					<ul>
						<li><a href="#">Research</a></li>
						<li><a href="#">Asset</a></li>
						<li><a href="#">Consultoria</a></li>
						<li><a href="#">Wealth</a></li>
					</ul>
				</li>
				<li>
					<input type="checkbox" id="menu-2">
					<label for="menu-2" id="labelMenu-2">
						<span>Cursos Online</span>
					</label>
					<ul>
						<li><a href="#">Notícias</a></li>
						<li><a href="#">Colunistas</a></li>
					</ul>
				</li>
				<li>
					<input type="checkbox" id="menu-3">
					<label for="menu-3" id="labelMenu-3">
						<span>Conteúdo Gratuito</span>
					</label>
					<ul>
						<li><a href="#">Artigos</a></li>
						<li><a href="#">Guias</a></li>
						<li><a href="#">Perfis</a></li>
						<li><a href="#">Glossário de Contabilidade</a></li>
						<li><a href="#">Hall da Fama</a></li>
						<li><a href="#">Listas</a></li>
					</ul>
				</li>
				<li><a href="#">Notícias</a></li>
				<li><a href="#">Artigos</a></li>
				<li><a href="#">Analítica</a></li>
			</ul>


		</div>


		<div class="headerSuno__btns">
			<a class="sunoBtn sunoBtn--subscribe" href="#">Assine<span> Agora</span></a>
			<a class="sunoBtn sunoBtn--login" href="#">Entrar</a>
		</div>
	</header>


	<?php  \MyApp::render('views/partials/header/header-suno-news'); ?>

	<?php  \MyApp::render('views/partials/header/header-featured-news'); ?>

	<?php  \MyApp::render('views/partials/header/header-suno-quotes'); ?>

	
