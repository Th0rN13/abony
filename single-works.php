<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Abony
 */

get_header();
?>

	<section class="page faq">
		<div class="page-logo">
			<a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="Logo"></a>
		</div>
		<div class="clearfix"></div>
		<div class="faq-title"><h3><?php the_title();?></h3></div>
		<div class="faq-set">
			<div class="faq-one-single">			
				<?php //print_r(get_field('work_image'));?>	
				<img src="<?php echo get_field('work_image')['url']; ?>" alt="<?php the_title();?>">
				<?php
					the_post();
				 	the_content();
				 	?>
			</div>				
		</div>
		<!-- <div class="faq-link">
			<a href="<?php echo get_permalink (get_page_by_path('voprosy-i-otvety'));?>">Все выполненные работы</a>
		</div> -->
	</section><!-- page paper-->	

	<div class="footer-rel">
		<div class="footer-img">
			<!-- <img src="img/green3.png" alt=""> -->
		</div>
		<div class="footer-links clearfix">
			<div class="footer-link-left">
				<a href="index.html">ural-helyx.ru</a>
			</div>
			<div class="footer-link-right">
				<a href="http://2666541.ru" target="_blank">Воплощение идей – <u>Студия Анатолия Тарасенко</u> 2018</a>
			</div>											
		</div>					
	</div>	

<?php

get_footer();
