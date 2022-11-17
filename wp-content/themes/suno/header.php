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


	<div class="headerSunoNews100">
		<section class="wrapper headerSunoNews">

			<input type="checkbox" id="editorials">

			<label for="editorials" id="">
				<span class="sunoBtn sunoBtn--editorials">Editoriais</span>
			</label>

			<div class="headerSunoNews__boxEditorials">
				<ul class="headerSunoNews__editorialsList">
					<li><a href="">Analítica</a></li>
					<li><a href="">Artigos</a></li>
					<li><a href="">Notícias</a></li>
					<li><a href="">Conteúdo Gratuito</a></li>
					<li><a href="">Cursos Online</a></li>
					<li><a href="">Assinaturas</a></li>
					<li><a href="">Colunistas</a></li>
					<li><a href="">Glossário de Contabilidade</a></li>
					<li><a href="">Hall da Fama</a></li>
				</ul>
			</div>
			



			<a class="headerSunoNews__title" href="#">
				<h1 class=""><span>SUNO</span> Notícias</h1>
			</a>


			<input type="checkbox" id="search">

			<label for="search" id="">
				<span class="sunoBtn sunoBtn--search">Buscar</span>
			</label>


			<label for="search" class="wrapper headerSunoNews__boxSearch">

				<form action="#" onkeydown="return event.key != 'Enter';" class="headerSunoNews__form" autocomplete="off">
					<label for="s">
						<input type="search" title="Buscar por:" name="s" value="" id="s" required="true" placeholder="Faça sua pesquisa ..." class="headerSunoNews__form__inputField">
					</label>
					<button type="button" class="headerSunoNews__form__btn"></button>
				</form>

			</label>




		</section>
	</div>


	<div class="headerFeaturedNews100">
		<section class="wrapper headerFeaturedNews">

			<!-- TODO:user select none -->

			<a class="featuredIco featuredIco--alert" href="http://">Imposto de Renda </a>
			<a class="featuredIco featuredIco--elipese" href="http://">Coronavírus</a>
			<a class="featuredIco featuredIco--elipese" href="http://">Sérgio Moro</a>


		</section>
	</div>


	<div class="headerQuotes100">
		<section class="wrapper headerQuotes">

			<div class="headerQuotes__item">

				<span class="headerQuotes__item__title">
					Ibovespa
				</span>

				102.928 pts

				<span class="headerQuotes__item__status headerQuotes__item__status--up">
					0,54%
				</span>

			</div>


			<div class="headerQuotes__item">
				<span class="headerQuotes__item__title">
					Nasdaq
				</span>
				102.928 pts
				<span class="headerQuotes__item__status headerQuotes__item__status--down">
					0,54%
				</span>
			</div>


			<div class="headerQuotes__item">
				<span class="headerQuotes__item__title">
					Dow Jones
				</span>
				102.928 pts
				<span class="headerQuotes__item__status headerQuotes__item__status--up">
					0,54%
				</span>
			</div>


			<div class="headerQuotes__item">
				<span class="headerQuotes__item__title">
					Dólar
				</span>
				R$ 5,25
				<span class="headerQuotes__item__status headerQuotes__item__status--up">
					0,54%
				</span>
			</div>


			<div class="headerQuotes__item">
				<span class="headerQuotes__item__title">
					EURO
				</span>
				R$ 5,25
				<span class="headerQuotes__item__status headerQuotes__item__status--down">
					0,54%
				</span>
			</div>


			<div class="headerQuotes__item">
				<span class="headerQuotes__item__title">
					Selic
				</span>
				<!-- R$ 5,25 -->
				<span class="headerQuotes__item__status headerQuotes__item__status--down">
					0,54%
				</span>
			</div>


		</section>
	</div>


	<div class="wrapper sunoLive">

		<span class="sunoLive__tag">
			<div class="sunoLive__tag__triangle"></div>
			<span class="sunoLive__tag__live">
				<img src="<?php echo myapp_get_theme_image('header/icon-live-station.svg'); ?>" width="24" height="24" alt="Menu Editoriais" />
				Ao Vivo
			</span>
		</span>

		<span class="sunoLive__title">
			<!-- 
				Bloco aceita paragrafo normal sem hiperlink | trocar <a> por <p> 
			-->
			<a href="#">Confira o Encontro de RI com o Sr. Heverton Peixoto, CEO da Wiz Soluções.</a>
		</span>
	</div>





	<?php // \MyApp::render('views/partials/logo'); 
	?>