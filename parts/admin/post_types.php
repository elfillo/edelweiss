<?php

add_action( 'init', 'register_post_news' );
add_action( 'init', 'register_post_implemented_object' );
add_action( 'init', 'register_post_issuing_keys' );
add_action( 'init', 'register_post_sale' );
add_action( 'init', 'register_post_bank' );

function register_post_news(){
	register_post_type('news', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Новости', // основное название для типа записи
			'singular_name'      => 'Новость', // название для одной записи этого типа
			'add_new'            => 'Добавить запись', // для добавления новой записи
			'add_new_item'       => 'Добавление записи', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование записи', // для редактирования типа записи
			'new_item'           => 'Свежая запись', // текст новой записи
			'view_item'          => 'Смотреть запись', // для просмотра записи этого типа.
			'search_items'       => 'Искать новость', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Новости', // название меню
		),
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-megaphone',
		'hierarchical'        => true,
		'supports'            => [ 'title', 'editor', 'excerpt', 'post-formats', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array('post_tag'),
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}

//Реализованные объекты
function register_post_implemented_object(){
	register_post_type('implemented-object', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Реализованные объекты', // основное название для типа записи
			'singular_name'      => 'Реализованный объект', // название для одной записи этого типа
			'add_new'            => 'Добавить запись', // для добавления новой записи
			'add_new_item'       => 'Добавление записи', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование записи', // для редактирования типа записи
			'new_item'           => 'Свежая запись', // текст новой записи
			'view_item'          => 'Смотреть запись', // для просмотра записи этого типа.
			'search_items'       => 'Искать запись', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Реализованные объекты', // название меню
		),
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-hammer',
		'hierarchical'        => true,
		'supports'            => [ 'title', 'editor', 'excerpt', 'post-formats', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array('post_tag'),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}

//Выдача ключей
function register_post_issuing_keys(){
	register_post_type('issuing-keys', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Выдача ключей', // основное название для типа записи
			'singular_name'      => 'Выдача ключей', // название для одной записи этого типа
			'add_new'            => 'Добавить запись', // для добавления новой записи
			'add_new_item'       => 'Добавление записи', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование записи', // для редактирования типа записи
			'new_item'           => 'Свежая запись', // текст новой записи
			'view_item'          => 'Смотреть запись', // для просмотра записи этого типа.
			'search_items'       => 'Искать запись', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Выдача ключей', // название меню
		),
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-buddicons-groups',
		'hierarchical'        => true,
		'supports'            => [ 'title', 'editor', 'excerpt', 'post-formats', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array('post_tag'),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}

//Акции
function register_post_sale(){
	register_post_type('sale', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Акции', // основное название для типа записи
			'singular_name'      => 'Акция', // название для одной записи этого типа
			'add_new'            => 'Добавить запись', // для добавления новой записи
			'add_new_item'       => 'Добавление записи', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование записи', // для редактирования типа записи
			'new_item'           => 'Свежая запись', // текст новой записи
			'view_item'          => 'Смотреть запись', // для просмотра записи этого типа.
			'search_items'       => 'Искать запись', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Акции', // название меню
		),
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-superhero',
		'hierarchical'        => true,
		'supports'            => [ 'title', 'editor', 'excerpt', 'post-formats', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array('post_tag'),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}

//Банки-партнеры
function register_post_bank(){
	register_post_type('bank', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Банки-партнеры', // основное название для типа записи
			'singular_name'      => 'Банк', // название для одной записи этого типа
			'add_new'            => 'Добавить запись', // для добавления новой записи
			'add_new_item'       => 'Добавление записи', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование записи', // для редактирования типа записи
			'new_item'           => 'Свежая запись', // текст новой записи
			'view_item'          => 'Смотреть запись', // для просмотра записи этого типа.
			'search_items'       => 'Искать запись', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Банки-партнеры', // название меню
		),
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-money-alt',
		'hierarchical'        => true,
		'supports'            => [ 'title', 'editor', 'excerpt', 'post-formats', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array('post_tag'),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}
?>