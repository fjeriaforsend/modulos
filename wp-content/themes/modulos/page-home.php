<?php
/**
 * Template Name: home page modulos
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package modulos
 */

get_header();
?>

	<main id="primary" class="site-main">
<h1>Modulos auto administrables disponibles para Comercio 4</h1>
		<h2>Modulo de tabs.</h2>
		<?php
			include get_template_directory() . '/assets/modulos/modulo-product-tabs/loop-modulo-product-tabs.php';
		?>

		<hr>

		<h2>Modulo de banner</h2>
		<?php
			include get_template_directory() . '/assets/modulos/modulo-product-tabs/loop-modulo-product-tabs.php';
		?>



	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
