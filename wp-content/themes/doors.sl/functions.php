<?php


 add_action( 'wp_enqueue_scripts', 'header_style');
 add_action( 'wp_enqueue_scripts', 'footer_script');
 function header_style(){
 		wp_enqueue_style('font-style', get_template_directory_uri() . '/fonts/stylesheet.css' );
	wp_enqueue_style('main-style', get_template_directory_uri() . '/dist/css/app.min.css' );
	wp_enqueue_style('uikit-style', get_template_directory_uri() . '/dist/css/uikit.min.css' );
	}
	
	function footer_script(){
	wp_enqueue_script( 'app', get_template_directory_uri() .'/dist/js/app.min.js', null, true );
	}
	
	add_theme_support('custom-logo');
	show_admin_bar(false);
	// параметры по умолчанию
	//pll_register_string('name', 'name');
	
	add_theme_support('widgets');
	
	add_theme_support('title-tag');
	
	add_theme_support('post-thumbnails');
	
	if (class_exists('MultiPostThumbnails')) {
		new MultiPostThumbnails(array(
		'label' => '2 картинка',
		'id' => 'secondary-image',
		'post_type' => 'post'
		));
	};

	if (class_exists('MultiPostThumbnails')) {
		new MultiPostThumbnails(array(
		'label' => '3 картинка',
		'id' => 'third-image',
		'post_type' => 'post'
		));
	};
	
	if (class_exists('MultiPostThumbnails')) :
	MultiPostThumbnails::the_post_thumbnail(get_post_type(),'second-image');
	endif;

	if (class_exists('MultiPostThumbnails')) :
		MultiPostThumbnails::the_post_thumbnail(get_post_type(),'third-image');
	endif;


?>
