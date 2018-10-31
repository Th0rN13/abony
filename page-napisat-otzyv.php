<?php
/**/


get_header();
?>

	<?php the_post(); ?>
	<section class="page testimonial-rel">
		<div class="page-logo">
			<a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="Logo"></a>
		</div>
		<div class="testimonial-title title clearfix"><h3>Отзывы</h3></div>
		<div class="testimonial-set">
			<div class="testimonial-one testimonial-form-block">
				<div class="testimonial-form">
					<?php echo do_shortcode('[contact-form-7 id="157" title="FormTestimonial"]');?>				
				</div>	
			</div><!--
			<?php $temppost = get_posts ( array (
				'post_type' => 'testimonial',
				'showposts' => 1,
				'order' => 'asc'));
				if ($temppost) : 						
					foreach ($temppost as $post) : setup_postdata ($post); ?>	
						--><div class="testimonial-one">
							<div class="testimonial-title">Последний отзыв</div>
							<div class="testimonial-phname clearfix">
								<div class="testimonial-photo">										
									<img src="<?php echo get_field('testimonial-photo')['sizes']['testimonial-photo'];?>"
										alt="<?php echo get_field('testimonial-name');?>">
									
								</div>
								<div class="testimonial-name">
									<?php echo get_field('testimonial-name').', '.get_field('testimonial-org');?>
								</div>							
							</div>
							<div class="testimonial-text arrow-box">
								<?php echo get_field('testimonial-text');?>
							</div>
						</div><!--
				<?php 
					endforeach;
					wp_reset_postdata();
				endif; ?>													
			-->
			<!-- <div class="testimonial-one testimonial-button-set">
				<div class="testimonial-button">
					<a href="<?php echo get_permalink (get_page_by_path('otzyvy'))?>">Читать<br>отзывы</a>
				</div>				
			</div> -->
		</div>
		
	</section><!-- page testimonial-->

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
