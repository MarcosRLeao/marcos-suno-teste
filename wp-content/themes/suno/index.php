<?php

/**
 * Layout: views/layouts/app.php
 *
 * The main template file.
 *
 * This is the template that is used for displaying:
 * - posts
 * - single posts
 * - archive pages
 * - search results pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MyApp
 */

// \MyApp::render( 'views/partials/loop' );
?>

<main>

    <?php \MyApp::render('views/partials/components/suno-live'); ?>

    <?php \MyApp::render('views/partials/index/suno-news'); ?>

    <?php \MyApp::render('views/partials/index/suno-dark-box'); ?>

</main>