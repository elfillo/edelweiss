<?php
function flat_post_types()
{
    register_post_type('flat', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Квартиры',
            'singular_name'      => 'Квартира',
            'add_new'            => 'Добавить запись',
            'add_new_item'       => 'Добавление записи',
            'edit_item'          => 'Редактирование записи',
            'new_item'           => 'Свежая запись',
            'view_item'          => 'Смотреть запись',
            'search_items'       => 'Искать запись',
            'not_found'          => 'Не найдено',
            'not_found_in_trash' => 'Не найдено в корзине',
            'parent_item_colon'  => '',
            'menu_name'          => 'Квартиры',
        ),
        'description'         => '',
        'public'              => true,
        'show_in_menu'        => true,
        'show_in_rest'        => true,
        'rest_base'           => null,
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-building',
        'hierarchical'        => true,
        'supports'            => ['title'],
        'taxonomies'          => array('post_tag'),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ));

    register_post_type('flat-plan', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Планировка',
            'singular_name'      => 'План',
            'add_new'            => 'Добавить запись',
            'add_new_item'       => 'Добавление записи',
            'edit_item'          => 'Редактирование записи',
            'new_item'           => 'Свежая запись',
            'view_item'          => 'Смотреть запись',
            'search_items'       => 'Искать запись',
            'not_found'          => 'Не найдено',
            'not_found_in_trash' => 'Не найдено в корзине',
            'parent_item_colon'  => '',
            'menu_name'          => 'Планировка',
        ),
        'description'         => '',
        'public'              => true,
        'show_in_menu'        => true,
        'show_in_rest'        => true,
        'rest_base'           => null,
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-grid-view',
        'hierarchical'        => true,
        'supports'            => ['title', 'thumbnail'],
        'taxonomies'          => array('post_tag'),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ));
}

add_action('init', 'flat_post_types');
