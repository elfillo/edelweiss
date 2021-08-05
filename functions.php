<?php
	function enqueue_styles()
	{
		wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.min.css');
	}

	add_action('wp_enqueue_scripts', 'enqueue_styles');

	function enqueue_script()
	{
		wp_deregister_script('jquery');
		//wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', null, true);
		wp_enqueue_script('libs', get_template_directory_uri() . '/assets/js/libs.min.js', null, true);
		wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.min.js', array('libs'), null, true);
	}

	add_action('wp_enqueue_scripts', 'enqueue_script');
	
	//menu
	register_nav_menu('header-top', 'Верхнее меню хэдера');
	register_nav_menu('header-main', 'Основное меню хэдера');
	register_nav_menu('footer', 'Меню подвала');

	//add thumbnails
	add_theme_support('post-thumbnails');
	//add support excerpt
	add_post_type_support('page', 'excerpt');

	include 'parts/admin/helpers.php';
	include 'parts/admin/submit-form.php';
	include 'parts/admin/post_types.php';

	//require get_theme_file_path('parts/admin/flat-sync/index.php');
?>