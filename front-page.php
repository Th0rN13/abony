<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Abony
 */

get_header();
?>
	<div class="main-container">
		<div class="main-intro">			
			<!-- Intro background for left size-->
		</div><!-- main-intro-->
		<div class="main-right-block">
			<div class="main-logo"></div>
			<div class="main-menu">
				<?php wp_nav_menu (array ('theme_location' => 'main'));?>
			</div>
		</div>
	</div>

<?php
get_footer();
