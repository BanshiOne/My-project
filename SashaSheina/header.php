<head>
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>	
    <?php wp_head(); ?>
</head>
<header class="bg-[#292A3E] text-white sticky top-0 z-50">
	 <div class="header max-w-7xl mx-auto px-4 py-20 grid md:grid-cols-2 gap-10 items-center">
      <nav class="nav flex gap-6 text-sm">
        <a href="#services" class="hover:text-pink-400">Услуги</a>
        <a href="#reasons" class="hover:text-pink-400">О нас</a>
        <a href="#reviews" class="hover:text-pink-400">Отзывы</a>
        <a href="#contacts" class="hover:text-pink-400">Контакты</a>
      </nav>
	  
	  <!-- Добавляем номер телефона -->
	<div class="phone-number text-white text-base font-semibold">
	<?php 
			$socials = get_field('socials_links', 'option');
			if ($socials) {
				$phone = $socials['phone'];
			?>

			<?php if (!empty(trim($phone))) { ?>
				<a href="tel:<?php echo esc_attr($phone); ?>">
					<?php echo esc_html($phone); ?>
				</a>
			<?php } ?>

			<?php } ?>
	</div>
	  
	<div id="menu-btn">
		<span class="icon"></span>
		<span class="text">MENU</span>
	</div>
	
      
    </div>
	
  </header>