<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
		<div class="faq-title"><h3>Ничего не найдено</h3></div>
		<div class="faq-set">
			<div class="faq-one-single">						
				Вы можете перейти на <a href="<?php echo home_url();?>">главную страницу</a>
			</div>				
		</div>		
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
