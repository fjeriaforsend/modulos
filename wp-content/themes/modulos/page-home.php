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

		<?php
			include get_template_directory() . '/assets/modulos/modulo-product-tabs/loop-modulo-product-tabs.php';
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
