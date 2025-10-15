<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
 function my_theme_enqueue_styles() {
            wp_enqueue_style( 'my-custom-style', get_template_directory_uri() . '/styles/main.css');
}


add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method(){
	wp_enqueue_script( 'newscript', get_template_directory_uri() .  '/scripts/swiper-bundle.min.js');
	// wp_enqueue_script( 'newscript4', get_template_directory_uri() .  '/scripts/jquery-2.2.4.min.js');
	wp_enqueue_script( 'newscript-2', get_template_directory_uri() .  '/scripts/reviews.js',
                       array( 'jquery' ), 
                       '69', 
                       true);
	wp_enqueue_script( 'newscript-3', get_template_directory_uri() .  '/scripts/burger.js',
                       array( 'jquery' ), 
                       '69', 
                       true);
	wp_enqueue_script( 'newscript-4', get_template_directory_uri() .  '/scripts/modal.js');
}
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Основные настройки',
		'menu_title'	=> 'Настройки темы',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}
?>
