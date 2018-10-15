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
	<div id="wrap1">
		<div id="view1">
			<!-- placeholder to view screen -->			
			<section class="page contacts">
				<div class="page-logo">
					<a href="/"><img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="Logo"></a>
				</div>
				<div class="clearfix"></div>
				<div class="contact-container">
					<div class="hidden">
						<h3>Отослать письмо</h3>
					</div>
					<div class="contact-text">
						Заказывайте услуги по наладке водоснабжения и канализации у компании <span>Ural-Helyx</span>
					</div><!--
					--><div class="contact-form-block">
						<form action="send" class="contact-form" method="post" name="contact_form">
							<ul>
								<li>
									<input type="text" name="name" placeholder="Ваше Имя" />
								</li>
								<li>
									<input type="text" name="city" placeholder="Ваш город" />						
								</li>
								<li>
									<input type="text" name="phone" placeholder="Ваш телефон*" />
								</li>
								<li>
									<input type="text" name="email" placeholder="Ваш e-mail*" />
								</li>
								<li>
									<textarea name="message" placeholder="Сообщение*" cols="40" rows="3"></textarea>
								</li>
								<li>
									<button class="submit" type="submit">Отправить</button>
								</li>
							</ul>					
						</form>
					</div>	
				</div>
				<div class="contact-border border">
					<div class="contact-border-img">
						<img src="<?php echo get_template_directory_uri();?>/img/border1.png" alt="Border">				
					</div>
					<div class="contacts-border-line"></div>
				</div>
			</section><!-- page contacts--><!-- 
 			
 			--><section class="page tank">
				<div class="tank-container">
					<div class="page-logo">
						<a href="/"><img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="Logo"></a>
					</div>			
					<div class="tank-picture">
						<img src="<?php echo get_template_directory_uri();?>/img/water-tank.png" alt="Tank">
					</div>			
					<div class="tank-spacer"></div>
					<div class="tank-text">
						<h3><?php the_title(); ?></h3>
						<ul>
							<li>ёмкости и резервуары</li>
							<li>ливневые очистные сооружения</li>
							<li>насосные станции (канализационные насосные станции, станции повышения давления, станции пожаротушения)</li>
							<li>нестандартное оборудование (дефлекторы, гальванические ванные)</li>
							<li>хозяйственно-бытовые стоки</li>
							<li>производственные и промышленные стоки</li>
							<li>ёмкости спецназначения</li>
							<li>трубы и трубопроводы</li>
							<li>колодцы</li>
						</ul>
					</div>			
				</div>
				<div class="tanks-border border">
					<div class="tanks-border-img">
						<img src="<?php echo get_template_directory_uri();?>/img/border2.png" alt="">
					</div>
					<div class="tanks-border-line"></div>
				</div>
			</section><!-- page tank--><!--

			--><section class="page works">
				<div class="page-logo">
					<a href="/"><img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="Logo"></a>
				</div>
				<div class="works-title title clearfix">
					<h3>ВЫПОЛНЕНЫЕ РАБОТЫ</h3>
				</div>	
				<div class="works-container">					
					<div class="works-set">
						<div class="works-one">
							<div class="works-one-text">
								<span>Новоуфимская РЭС</span>
								<div class="works-one-text-align"></div>
							</div>
							<img src="<?php echo get_template_directory_uri();?>/img/works1.png" alt="">
						</div>
						<div class="works-one">
							<div class="works-one-text">
								<span>ТРЦ Ультра Сити Молл</span>
								<div class="works-one-text-align"></div>
							</div>
							<img src="<?php echo get_template_directory_uri();?>/img/works2.png" alt="">
						</div>
						<div class="works-one">
							<div class="works-one-text">
								<span>Системы оборотных контуров УМПО</span>
								<div class="works-one-text-align"></div>
							</div>
							<img src="<?php echo get_template_directory_uri();?>/img/works3.png" alt="">
						</div>
						<div class="works-one">
							<div class="works-one-text">
								<span>Управление аварийно-восстановительных работ ПАО Газпром</span>
								<div class="works-one-text-align"></div>
							</div>
							<img src="<?php echo get_template_directory_uri();?>/img/works4.png" alt="">
						</div>
						<div class="works-one">
							<div class="works-one-text">
								<span>Башспирт системы водоотведения ливневых и пром.стоков</span>
								<div class="works-one-text-align"></div>
							</div>
							<img src="<?php echo get_template_directory_uri();?>/img/works5.png" alt="">
						</div>										
					</div>
				</div>
				<div class="works-border border">
					<div class="works-border-img">
						<img src="<?php echo get_template_directory_uri();?>/img/border2.png" alt="">
					</div>
					<div class="works-border-line"></div>
				</div>
			</section><!-- page works -->			
		</div>
	</div>	

	<div id="wrap2">
		<div id="view2">
			<section class="page superior">
				<div class="page-logo">
					<a href="/"><img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="Logo"></a>
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
					<div class="superior-border-img">
						<img src="<?php echo get_template_directory_uri();?>/img/border2.png" alt="">
					</div>
					<div class="superior-border-line"></div>
				</div>
			</section><!-- page superiority --><!--

			--><section class="page testimonial">
				<div class="page-logo">
					<a href="/"><img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="Logo"></a>
				</div>
				<div class="testimonial-title title clearfix"><h3>Отзывы</h3></div>
				<div class="testimonial-set">					
					<div class="testimonial-one">
						<div class="testimonial-phname clearfix">
							<div class="testimonial-photo">
								<img src="<?php echo get_template_directory_uri();?>/img/testimonial-photo1.png" alt="">
							</div>
							<div class="testimonial-name">
								Руслан Васильевич, ООО «Арианские сыры»
							</div>							
						</div>
						<div class="testimonial-text arrow-box">
							Большое спасибо компании Хеликс-Урал: они смогли подобрать оборудование под наш конкретный случай и встроить его в наш техпроцесс без осложнений.
						</div>
					</div><!--
					--><div class="testimonial-one">
						<div class="testimonial-phname clearfix">
							<div class="testimonial-photo">
								<img src="<?php echo get_template_directory_uri();?>/img/testimonial-photo3.png" alt="">
							</div>
							<div class="testimonial-name clearfix">
								Йозеф Асхатович, ООО “Массболл”
							</div>
						</div>
						<div class="testimonial-text arrow-box">
							Испытывали большие проблемы на производстве из-за безответственного подрядчика по настройке водоснабжения. Хеликс-Урал, можно сказать, спасли нас — все починили, привезли и поставили качественное оборудование, помогли отстроить рабочий процесс. Профессионалы высокого уровня.
						</div>
					</div><!--
					--><div class="testimonial-one">
						<div class="testimonial-phname clearfix">
							<div class="testimonial-photo">
								<img src="<?php echo get_template_directory_uri();?>/img/testimonial-photo2.png" alt="">
							</div>
							<div class="testimonial-name clearfix">
								Егор Григорьевич, ЗАО «Фенитцер»
							</div>
						</div>
						<div class="testimonial-text arrow-box">
							Нашему комбинату требовалась система водоснабжения по немецкому образцу — Хеликс-Урал реализовал эту задумку точно в соответствии с нашими пожеланиями. Остались довольны.
						</div>
					</div><!--
					--><div class="testimonial-one button">
						<button><img src="<?php echo get_template_directory_uri();?>/img/testimonial-btn.png" alt=""></button>
					</div>
				</div>

				<div class="testimonial-border border">
					<div class="testimonial-border-img">
						<img src="<?php echo get_template_directory_uri();?>/img/green.png" alt="">
					</div>
					<div class="testimonial-border-line"></div>
				</div>		
			</section><!-- page testimonial-->
		</div>
	</div>	

	<div id="wrap3">
		<div id="view3">
			<section class="page cert">
				<div class="page-logo">
					<a href="/"><img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="Logo"></a>
				</div>
				<div class="cert-title title clearfix"><h3>Сертификаты</h3></div>
				<div class="cert-set">
					<div class="cert-one">
						<div class="cert-img">
							<img src="<?php echo get_template_directory_uri();?>/img/cert1.png" alt="">
						</div>
						<div class="cert-text">
							Декларация о соответствии емкости для пищевых продуктов
						</div>
					</div>
					<div class="cert-one">
						<div class="cert-img">
							<img src="<?php echo get_template_directory_uri();?>/img/cert2.png" alt="">
						</div>
						<div class="cert-text">
							Декларация соответствия ЛОС
						</div>
					</div>
					<div class="cert-one">
						<div class="cert-img">
							<img src="<?php echo get_template_directory_uri();?>/img/cert3.png" alt="">
						</div>
						<div class="cert-text">
							Декларация о соответствии емкости для пищевых продуктов
						</div>
					</div>
					<div class="cert-one">
						<div class="cert-img">
							<img src="<?php echo get_template_directory_uri();?>/img/cert4.png" alt="">
						</div>
						<div class="cert-text">
							Декларация соответствия ЛОС
						</div>
					</div>
					<div class="clearfix"></div>
				</div>		
				<div class="cert-border border">
					<div class="cert-border-img">
						<img src="<?php echo get_template_directory_uri();?>/img/green2.png" alt="">
					</div>
					<div class="cert-border-line"></div>
				</div>		
			</section><!-- page cert--><!--

			--><section class="page map">
				<div class="map-view">			
					<!-- need to past map code -->			
					<div id="map"></div>
				</div>
				<div class="map-contact">
					<div class="page-logo">
						<a href="/"><img src="<?php echo get_template_directory_uri();?>/img/white-logo.svg" alt="Logo"></a>
					</div>
					<div class="clearfix"></div>
					<div class="map-title"><h3>география клиентов</h3></div>
					<div class="map-text">Helyx-ural<br>
						Адрес:<br>
						Екатеринбург +7 (343) 346 33 30<br>
						Уфа +7 (347) 298 32 42<br>
						<br>
						Телефон: 8 000 540-57-59<br>
						<br>
						E-mail: ural-helyx@mail.ru
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
		</div>
	</div>	

	<section class="page paper">
		<div class="page-logo">
			<a href="/"><img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="Logo"></a>
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
					<div class="paper-file-one">
						<div class="paper-file-icon">
							<img src="<?php echo get_template_directory_uri();?>/img/icon-doc.png" alt="">
						</div>
						<div class="paper-file-desc">
							Ливневые очистные сооружения<br>
							<a href="#">Скачать файл .DOCX, 478 Kb</a>
						</div>
					</div>
					<div class="paper-file-one">
						<div class="paper-file-icon">
							<img src="<?php echo get_template_directory_uri();?>/img/icon-doc.png" alt="">
						</div>
						<div class="paper-file-desc">
							Ливневые очистные сооружения<br>
							<a href="#">Скачать файл .DOCX, 478 Kb</a>
						</div>
					</div>
					<div class="paper-file-one">
						<div class="paper-file-icon">
							<img src="<?php echo get_template_directory_uri();?>/img/icon-doc.png" alt="">
						</div>
						<div class="paper-file-desc">
							Ливневые очистные сооружения<br>
							<a href="#">Скачать файл .DOCX, 478 Kb</a>
						</div>
					</div>
					<div class="paper-file-one">
						<div class="paper-file-icon">
							<img src="<?php echo get_template_directory_uri();?>/img/icon-doc.png" alt="">
						</div>
						<div class="paper-file-desc">
							Ливневые очистные сооружения<br>
							<a href="#">Скачать файл .DOCX, 478 Kb</a>
						</div>
					</div>															
				</div>				
			</div>
			<div class="paper-faq">
				<div class="paper-faq-title">вопросы и ответы</div>
				<div class="paper-faq-set">
					<div class="paper-faq-one">
						<b>Как осуществляется подбор оборудования и проработка деталей проекта?</b>	На данном этапе при создании очистного комплекса или другой наружной инженерной сети специалисты компании «БиоПласт» осуществляют подбор необходимого оборудования исходя из технико-экономической целесообразности. При необходимости осуществляется разработка нестандартных решений с последующей их реализацией. <a href="#">Далее</a>
					</div>
					<div class="paper-faq-one">
						<b>Как осуществляется подбор оборудования и проработка деталей проекта?</b> На данном этапе при создании очистного комплекса или другой наружной инженерной сети специалисты компании «БиоПласт» осуществляют подбор необходимого оборудования исходя из технико-экономической целесообразности. При необходимости осуществляется разработка нестандартных решений с последующей их реализацией. <a href="#">Далее</a>
					</div>
					<div class="paper-faq-link">
						Все вопросы
					</div>
				</div>
			</div>
		</div>
		
		<div class="paper-border border">					
			<div class="paper-border-line"></div>
		</div>		
		<div class="footer">
			<div class="footer-img">
				<!-- <img src="<?php echo get_template_directory_uri();?>/img/green3.png" alt=""> -->
			</div>
			<div class="footer-links clearfix">
				<div class="footer-link-left">
					<a href="#">ural-helyx.ru</a>
				</div>
				<div class="footer-link-right">
					<a href="#">Студия Анатолия Тарасенко</a>
				</div>											
			</div>					
		</div>	
	</section><!-- page paper-->	


<?php
get_footer();
