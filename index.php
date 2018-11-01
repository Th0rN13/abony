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
	<div id="wrap1">
		<div id="view1">
			<!-- placeholder to view screen -->			
			<section class="page contacts">
				<div class="page-logo">
					<a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="Logo"></a>
				</div>
				<div class="clearfix"></div>
				<div class="contact-container">
					<div class="hidden">
						<h3>Отослать письмо</h3>
					</div>
					<div class="contact-text">
						<?php echo get_field('contact-text'); ?>
					</div><!--
					--><div class="contact-form-block">

						<?php echo do_shortcode('[contact-form-7 id="82" title="Form1"]');?>
						
					</div>	
				</div>
				<div class="contact-border border">					
					<div class="contacts-border-line"></div>
				</div>
				<div id="border-img" class="border-img">
					<img src="<?php echo get_template_directory_uri();?>/img/border1.png" alt="Border">				
				</div>				
			</section><!-- page contacts--><!-- 
 			
 			--><section class="page tank">
				<div class="tank-container">
					<div class="page-logo">
						<a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="Logo"></a>
					</div>			
					<div class="tank-picture">
						<img src="<?php echo get_template_directory_uri();?>/img/water-tank.jpg" alt="Tank">
					</div>			
					<div class="tank-spacer"></div>
					<div class="tank-text">
						<h3><?php the_title(); ?></h3>						
						<?php echo get_the_content(); ?>
					</div>			
				</div>
				<div class="tanks-border border">					
					<div class="tanks-border-line"></div>
				</div>
			</section><!-- page tank--><!--

			--><section class="page works">
				<div id="works-bg" class="works-bg"></div>	
				<div class="page-logo">
					<a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="Logo"></a>
				</div>
				<div class="works-title title clearfix">
					<h3>ВЫПОЛНЕНЫЕ РАБОТЫ</h3>
				</div>	
				<div class="works-container">					
					<div class="works-set">

					<?php $temppost = get_posts ( array (
						'post_type' => 'works',
						'showposts' => 20,
						'order' => 'asc'));
						if ($temppost) : 						
							foreach ($temppost as $post) : setup_postdata ($post); ?>	
								<a href="<?php the_permalink();?>">
									<div class="works-one">
										<div class="works-one-text">
											<span><?php the_title();?></span>
											<div class="works-one-text-align"></div>
										</div>
										<div class="works-one-img">
											<img src="<?php echo get_field('work_image')['sizes']['works-thumb']; ?>" alt="<?php the_title();?>">
										</div>
									</div>
								</a>
						<?php 
							endforeach;
							wp_reset_postdata();
						endif; ?>
					</div>
				</div>
				<div class="works-border border">					
					<div class="works-border-line"></div>
				</div>
			</section><!-- page works -->					
			<section class="page superior">
				<div class="page-logo">
					<a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="Logo"></a>
				</div>
				<div class="superior-title title clearfix"><h3>Преимущества</h3></div>
				<div class="superior-block">					
					<div class="superior-set">						
						<div class="superior-one">							
							<div class="superior-img">
								<img src="<?php echo get_template_directory_uri();?>/img/super1.png" alt="">
							</div>
							<div class="superior-text">
								<span>Мы являемся производителем, вы не переплачиваете за услуги посредника</span>
							</div>
						</div><!--
						--><div class="superior-one">
							<div class="superior-img">
								<img src="<?php echo get_template_directory_uri();?>/img/super6.png" alt="">
							</div>
							<div class="superior-text">
								Производим оборудования систем отопления, налажено с 1993 года, качество продукции позволяет осуществлять поставки в Европу
							</div>
						</div><!--
						--><div class="superior-one">
							<div class="superior-img">
								<img src="<?php echo get_template_directory_uri();?>/img/super2.png" alt="">
							</div>
							<div class="superior-text">
								Выполняем все работы под ключ, от проектирования до перерезания ленточки и сдачи объекта
							</div>
						</div><!--
						--><div class="superior-one">
							<div class="superior-img">
								<img src="<?php echo get_template_directory_uri();?>/img/super7.png" alt="">
							</div>
							<div class="superior-text">
								Мы являемся отечественными производителями, производство сертифицировано и подтверждено высшим международным стандартом качества ISO 9001
							</div>
						</div>	<!--
						--><div class="superior-one">
							<div class="superior-img">
								<img src="<?php echo get_template_directory_uri();?>/img/super3.png" alt="">
							</div>
							<div class="superior-text">
								Производство оборудования водоснабжения и канализации осуществляется уже <b>12</b> лет
							</div>
						</div><!--
						--><div class="superior-one">
							<div class="superior-img">
								<img src="<?php echo get_template_directory_uri();?>/img/super8.png" alt="">
							</div>
							<div class="superior-text">
								Мы осуществляем полную техническую поддержку на всей стадии ведения строительства объекта: начиная с проектирования, расчетов, подбора оборудования, заканчивая его запуском и сдачей
							</div>
						</div><!--
						--><div class="superior-one">
							<div class="superior-img">
								<img src="<?php echo get_template_directory_uri();?>/img/super4.png" alt="">
							</div>
							<div class="superior-text">
								Завод площадью более <b>20 000</b> кв.м, передовое японское оборудование
							</div>
						</div><!--
						--><div class="superior-one">
							<div class="superior-img">
								<img src="<?php echo get_template_directory_uri();?>/img/super9.png" alt="">
							</div>
							<div class="superior-text">
								Расширенная гарантия на безотказность оборудования и сервис
							</div>
						</div><!--
						--><div class="superior-one">
							<div class="superior-img">
								<img src="<?php echo get_template_directory_uri();?>/img/super5.png" alt="">
							</div>
							<div class="superior-text">
								Перекрестная непрерывная роботизированная машинная намотка, выпускаем более <b>1500</b> изделий в год
							</div>
						</div><!--
						--><div class="superior-one">
							<div class="superior-img">
								<img src="<?php echo get_template_directory_uri();?>/img/super10.png" alt="">
							</div>
							<div class="superior-text">
								Оперативное и качественное решение вопросов водоснабжения, водоотведения, отопления
							</div>
						</div>					
					</div>
				</div>
				<div class="superior-border border">					
					<div class="superior-border-line"></div>
				</div>
			</section><!-- page superiority --><!--

			--><section class="page testimonial">
				<div class="page-logo">
					<a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="Logo"></a>
				</div>
				<div class="testimonial-title title clearfix"><h3>Отзывы</h3></div>
				<div class="testimonial-set"><!--

					<?php $temppost = get_posts ( array (
						'post_type' => 'testimonial',
						'showposts' => 3,
						'order' => 'desc'));
						if ($temppost) : 						
							foreach ($temppost as $post) : setup_postdata ($post); ?>	
								--><div class="testimonial-one">
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
					--><div class="testimonial-one testimonial-button-set">
						<div class="testimonial-button">
							<a href="<?php echo get_permalink (get_page_by_path('napisat-otzyv'))?>">Написать<br>отзыв</a>	
						</div>
						
						<div class="testimonial-button">
							<a href="<?php echo get_permalink (get_page_by_path('otzyvy'))?>">Читать все<br>отзывы</a>
						</div>
					</div>
				</div>

				<div class="testimonial-border border">					
					<div class="testimonial-border-line"></div>
				</div>		
			</section><!-- page testimonial-->
		
			<section class="page cert">
				<div class="page-logo">					
					<a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="Logo"></a>
				</div>
				<div class="cert-title title clearfix"><h3>Сертификаты</h3></div>
				<div class="cert-set">
					<?php $temppost = get_posts ( array (
						'post_type' => 'cert',
						'showposts' => 20,
						'order' => 'asc'));
						$i=0;
						if ($temppost) :
							foreach ($temppost as $post) : setup_postdata ($post); $i++; ?>
								<div class="cert-one">
									<div class="cert-img">	
										<?php 
											$imagefull = get_field('cert-img');
											$size = "cert-thumb"; 
    										$imagesized = wp_get_attachment_image_src( $imagefull, $size );	
											if(get_field('cert-img')):
												$attachment_id = get_field('cert-img');
												$size = "full";
												$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
												<a href="<?php echo $image[0]; ?>" rel="fancybox" class="fancybox"><?php echo wp_get_attachment_image( $attachment_id, medium); ?></a>
											<?php endif; ?>										        
									</div>
									<div class="cert-text">
										<?php the_title();?>
									</div>
								</div>
						<?php 
								//if($i % 4 === 0) echo '<div class="clearfix"></div>';
							endforeach;
							wp_reset_postdata();
						endif; ?>

					<div class="clearfix"></div>
				</div>		
				<div class="cert-border border">
					<div class="cert-border-img">
						<img src="<?php echo get_template_directory_uri();?>/img/green2.png" alt="">
					</div>
					<div class="cert-border-line-1"></div>
					<div class="cert-border-line-2"></div>
				</div>		
			</section><!-- page cert--><!--

			--><section class="page map">
				<div class="map-view">
					<div id="map-transparent"></div>
					<!-- need to past map code -->	
					<iframe src="https://www.google.com/maps/d/embed?mid=1jaSGNWe9MTW2IwGzmdN6JVyg49SQSowv"></iframe>
					<!-- for yandex.maps use <div id="map"></div>-->
				</div>				
				<div class="map-contact">
					<div class="page-logo">
						<a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/img/white-logo.svg" alt="Logo"></a>
					</div>
					<div class="clearfix"></div>
					<div class="map-title"><h3>география клиентов</h3></div>
					<div class="map-text">Helyx-ural<br>
						Адрес:<br>
						<?php echo get_option('city1');?>:
						<a href="tel:<?php
							$temp = get_option('phone1');
							echo preg_replace('/[^0-9]/', '', $temp);?>
						"><?php echo $temp;?>
						</a><br>
						<?php echo get_option('city2');?>:
						<a href="tel:<?php
							$temp = get_option('phone2');
							echo preg_replace('/[^0-9]/', '', $temp);?>
						"><?php echo $temp;?>
						</a><br>
						<br>
						Телефон: <a href="tel:<?php
							$temp = get_option('phone-common');
							echo preg_replace('/[^0-9]/', '', $temp);?>
						"><?php echo $temp;?>
						</a><br>
						<br>
						E-mail: <a href="mailto:<?php
							$temp = get_option('email');
							echo $temp;?>
						"><?php echo $temp;?>
						</a>
					</div>
					<div class="map-bg-text">
						Кон<br>
						так<br>
						ты
					</div>
				</div>
				<div class="map-border border">
					<div class="map-border-line"></div>
				</div>		
			</section><!-- page map -->
		
			<section class="page paper">
				<div class="page-logo">
					<a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="Logo"></a>
				</div>				
				<div class="clearfix"></div>
				<div class="paper-container">
					<div class="hidden">
						<h3>Документы и вопросы</h3>
					</div>
					<div class="paper-files">
						<div class="paper-files-title">
							Опросные листы для заказа продукции и услуг
						</div>
						<div class="paper-files-container">

							<?php $temppost = get_posts ( array (
								'post_type' => 'doc_file',
								'showposts' => 100));						
								if ($temppost) :
									foreach ($temppost as $post) : setup_postdata ($post);
										$childs = get_children(array ('post_parent' => $post->ID));
										$child = reset($childs);
										$file_url = wp_get_attachment_url($child->ID);
										$filetype = strtoupper(wp_check_filetype($file_url)['ext']);
									?><!-- 
									--><div class="paper-file-one">
										<div class="paper-file-icon">
											<img src="<?php echo wp_mime_type_icon($child->ID);?>" alt="">
										</div>
										<div class="paper-file-desc">
											<?php the_title();?><br>
											<a href="<?php echo $file_url?>" target="_blank">
												<?php echo 'Скачать файл .'.$filetype.', '; ?>
												<?php echo size_format(filesize( get_attached_file( $child->ID)))?>
											</a>

										</div>
									</div><!--
								--><?php 								
									endforeach;
									wp_reset_postdata();
								endif; ?><!--
							--><!-- -->	
						</div>				
					</div>
					<div class="paper-faq">
						<div class="paper-faq-title">вопросы и ответы</div>
						<div class="paper-faq-set">
							<?php $temppost = get_posts ( array (
								'post_type' => 'questions',
								'showposts' => 2,
								'order' => 'asc'));						
								if ($temppost) :
									foreach ($temppost as $post) : setup_postdata ($post);?>
										<div class="paper-faq-one">
											<b><?php the_title();?></b>
											<?php the_excerpt();?>
											<a href="<?php the_permalink();?>">Далее</a>
										</div>
								<?php 								
									endforeach;
									wp_reset_postdata();
								endif; ?>
							<div class="paper-faq-link">
								<a href="<?php echo get_permalink (get_page_by_path('voprosy-i-otvety'));?>">Все вопросы</a>						
							</div>
						</div>
					</div>
				</div>
		
				<div class="paper-border border">					
					<div class="paper-border-line"></div>
				</div>		
		
			</section><!-- page paper-->	
			<div class="footer">
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
		</div>
	</div>	

<?php
get_footer();
