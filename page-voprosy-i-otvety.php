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

	<?php the_post(); ?>
<section class="page faq">
		<div class="page-logo">
			<a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="Logo"></a>
		</div>
		<div class="clearfix"></div>
		<div class="faq-title"><h3>вопросы и ответы</h3></div>
		<div class="faq-set">

			<?php $temppost = get_posts ( array (
				'post_type' => 'questions',
				'showposts' => 100,
				'order' => 'asc'));						
				if ($temppost) :
					foreach ($temppost as $post) : setup_postdata ($post);?>
						<div class="faq-divider">
							<div class="faq-one">
								<b><?php the_title();?></b>
								<?php the_excerpt();?>
								<a href="<?php the_permalink();?>">Далее</a>
							</div>
						</div>
				<?php 								
					endforeach;
					wp_reset_postdata();
				endif; ?>			
		</div>		
		<div class="faq-link">
			<a href="<?php echo get_permalink (get_page_by_path('voprosy-i-otvety'));?>">Все вопросы</a>
		</div>
	</section><!-- page paper-->	

			
	<div class="footer-rel">
		<div class="footer-img">
			<!-- <img src="<?php echo get_template_directory_uri();?>/img/green3.png" alt=""> -->
		</div>
		<div class="footer-links clearfix">
			<div class="footer-link-left">
				<a href="#">ural-helyx.ru</a>
			</div>
			<div class="footer-link-right">
				<a href="http://2666541.ru" target="_blank">Воплощение идей – <u>Студия Анатолия Тарасенко</u> 2018</a>
			</div>											
		</div>					
	</div>	


<?php
get_footer();
