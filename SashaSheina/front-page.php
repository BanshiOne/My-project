 <?php
/*
Template Name: Главная страница
*/
?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
  <title>Ремонт компьютеров</title>
  <!-- Montserrat -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="bg-white text-slate-900">

  <!-- Navbar -->
  <?php get_header();?>

  <main>
    <!-- Hero -->
    <section id="hero" class="bg-[#292A3E] text-white">
      <div class="max-w-7xl mx-auto px-4 py-20 grid md:grid-cols-2 gap-10 items-center">
        <div>
          <h1 class="text-4xl md:text-5xl font-bold leading-tight">
            Ваш компьютер — <br> наша забота!
          </h1>
          <p class="mt-4 text-lg text-gray-300">
            Ремонт и обслуживание компьютерной техники в Минске<br>
            Бесплатная консультация<br>
            Выезд мастера на дом
          </p> 
		  <a href="#" class="btn-signup inline-block mt-6 px-6 py-3 rounded-xl border-2 border-button text-white font-semibold transition">
            Записаться
          </a>
          <div class="mt-8 flex gap-6 text-lg font-semibold">
            <div class="advantages">
				<div class="advantage">
				  <span class="circle">В</span>ыгодно
				</div>
				<div class="advantage">
				  <span class="circle">К</span>ачественно
				</div>
				<div class="advantage">
				  <span class="circle">Б</span>ыстро
				</div>
			</div>
          </div>
        </div>
        <div class="img flex justify-center">
          <!-- Картинка ноутбука -->
            <?php include_once(get_template_directory() . "/src/image.svg")?>  
        </div>
      </div>
    </section>
    <!-- Hero -->
	
	<!-- Services -->
	<section id="services" class="max-w-7xl mx-auto px-4 py-16">
		<h2 class="text-3xl font-bold text-center mb-12">Услуги</h2>	
		 <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
		<?php
	if( have_rows('uslugi') ):

		while ( have_rows('uslugi') ) : the_row();

			$p_1 = get_sub_field('p_1');
			$p_2 = get_sub_field('p_2');
			$p_3 = get_sub_field('p_3');
			?>
		
		<div class="p-6 border rounded-2xl text-center shadow-sm">     
	 
				<?php if(!empty(trim($p_1))) { ?>
					<h3 class="font-semibold"><?php echo $p_1; ?></h3>
				<?php } ?>
				<?php if(!empty(trim($p_2))) { ?>
					<p class="mt-2 text-sm text-gray-600"><?php echo $p_2; ?></p>
				<?php } ?>
				<?php if(!empty(trim($p_3))) { ?>
					<p class="mt-4 font-bold text-lg"><?php echo $p_3; ?></p>
				<?php } ?>				
			
			</div>
			
			<?php
		endwhile;

	endif;
	?>
	</div>
	 </section>
	
	 <section id = "reasons" class="reasons">
    <h2>4 причины</h2>
    <h3>обратиться именно к нам</h3>

    <div class="reasons-content">
      <!-- Левая колонка -->
      <div class="reasons-list">
        <div class="reason">
          <h4>ОПЫТ</h4>
          <p>Более 5 лет создаем успех для клиентов, завоевывая их доверие безупречными результатами</p>
        </div>
        <div class="reason">
          <h4>СКОРОСТЬ</h4>
          <p>Работаем 7 дней в неделю и приезжаем к вам домой, чтобы решить ваши задачи максимально быстро</p>
        </div>
      </div>

      <!-- Центр (ноутбук) -->
      <div class="reason-img">
        <?php include_once(get_template_directory() . "/src/laptop.svg")?>
      </div>

      <!-- Правая колонка -->
      <div class="reasons-list">
        <div class="reason">
          <h4>КАЧЕСТВО</h4>
          <p>Всегда на вашей стороне — предлагаем самые выгодные решения, созданные специально для вас</p>
        </div>
        <div class="reason">
          <h4>ГАРАНТИИ</h4>
          <p>Уверены в своей работе, поэтому даем гарантию на все выполненные услуги</p>
        </div>
      </div>
    </div>
  </section>
	
 <!-- Reviews -->
<section id = "reviews" class="reviews-section">
 <h2>Отзывы о нашей работе</h2>
  <!-- Swiper -->
  <div class="container swiper">
    <div class="card-wrapper">
      <div class="swiper-wrapper">
        <?php
          if( have_rows('kommentarii') ):
            while ( have_rows('kommentarii') ) : the_row();

              $k_1 = get_sub_field('k_1');
              $k_2 = get_sub_field('k_2');
              $k_3 = get_sub_field('k_3');
              ?>
              
              <!-- Каждый отзыв = отдельный слайд -->
              <div class="swiper-slide">    
                <div class="review-card">     
                  <?php if(!empty(trim($k_1))) { ?>
                    <h3><?php echo $k_1; ?></h3>
                  <?php } ?>
                  <?php if(!empty(trim($k_2))) { ?>
                    <p><?php echo $k_2; ?></p>
                  <?php } ?>
                  <?php if(!empty(trim($k_3))) { ?>
                    <div class="review-date"><?php echo $k_3; ?></div>
                  <?php } ?>				
                </div>
              </div>
              
              <?php
            endwhile;
          endif;
        ?>
      </div>
      <!-- Кнопки -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <!-- Пагинация -->
      <div class="swiper-pagination"></div>
    </div>		
  </div>
</section>
 <!-- Reviews -->
  
  <!-- Footer -->
  <section id = "contacts" class="contact-section">
  
	<div class="form-block">
		<div class="form-title block-spacing">
		   Закажи <span class="gradient"><br>обратный звонок</span><br> прямо сейчас
		</div>
		<?php echo do_shortcode('[contact-form-7 id="ee22f1a" title="Контактная форма 1"]'); ?>
	</div>

    <!-- Правая часть - контакты -->
    <div class="contacts-block">
      <div class="contacts-title block-spacing">
        Или <span class="gradient"><br>свяжись с нами</span><br> удобным способом
      </div>
	 
	
		
      <div class="contacts-list block-spacing">
	  	
		<?php 
			$socials = get_field('socials_links', 'option');
			if ($socials) {
				$phone = $socials['phone'];
				$telegram = $socials['telegram'];
				$instagram = $socials['instagram'];
			?>

			<?php if (!empty(trim($phone))) { ?>
				<a href="tel:<?php echo esc_attr($phone); ?>">
					<?php include_once(get_template_directory() . "/src/phone.svg")?> <?php echo esc_html($phone); ?>
				</a>
			<?php } ?>

			<?php if (!empty(trim($telegram))) { ?>   
				<a href="<?php echo esc_url($telegram); ?>" title="Telegram">
					<?php include(get_template_directory() . "/src/telegram.svg")?> Telegram: CompCare
				</a>
			<?php } ?>

			<?php if (!empty(trim($instagram))) { ?>
				<a href="<?php echo esc_url($instagram); ?>">
					<?php include_once(get_template_directory() . "/src/instagram.svg")?> instagram: CompCare
				</a>
			<?php } ?>

			<?php } ?>
		
      </div>
	  
	
      <p class="disclaimer">
        Данный интернет-сайт носит исключительно информационный характер и ни при каких условиях не является публичной офертой, определяемой положениями ст. 405 гражданского кодекса Республики Беларусь. 
        Окончательная стоимость, виды работ и услуг согласовываются непосредственно с мастером, исполнителем которых может являться юридическое лицо, индивидуальный предприниматель или физическое лицо (самозанятый).
      </p>
    </div>
  </section>
   <!-- Footer -->  

  <!-- Footer -->
 <?php get_footer();?>


<div id="callback-modal" class="modal">
  <div class="modal-content">
    <span class="modal-close">&times;</span>
    <h3 class="modal-title">Закажи обратный звонок</h3>
    <?php echo do_shortcode('[contact-form-7 id="ee22f1a" title="Контактная форма 1"]'); ?>
  </div>
</div>

</body>
</html>
