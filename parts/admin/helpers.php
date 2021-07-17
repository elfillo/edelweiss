<?php
function dd($var, $dumb = 0){
	echo '<pre>';
	if($dumb){
		var_dump($var);
	}else{
		print_r($var);
	}
	echo '</pre>';
}

function get_page_data($page){
	$pages = get_pages(array(
		'meta_key' => '_wp_page_template',
		'meta_value' => $page.'.php'
	));

	return $pages[0];
}

function the_img_uri($relative_path)
{
	echo get_template_directory_uri() . '/assets/images/'.$relative_path;
}

function is_active_link($link)
{
	return 	get_current_url() === $link ? true : false;
}

function get_menu_items($location)
{
	$theme_locations = get_nav_menu_locations();
    $menuObj = get_term( $theme_locations[$location], 'nav_menu' );
    $menuItems = wp_get_nav_menu_items($menuObj->term_id);

	$menuNestedArr = [];

	foreach($menuItems as $item){
		$i = [
			'id' => $item->ID,
			'title' => $item->title,
			'url' => $item->url,
			'order' => $item->menu_order,
			'menu_item_parent' => $item->menu_item_parent,
			'is_active' => is_active_link($item->url)
		];

		if($item->menu_item_parent){
			$menuNestedArr[$item->menu_item_parent]['children'][$item->ID]	= $i;
		}else{
			$menuNestedArr[$item->ID] = $i;
		}
	}

	return $menuNestedArr;
}

function get_current_url()
{
	$actual_link = 
	(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . 
	"://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	return $actual_link;
}

function the_breadcrumbs($args)
{
	$bc = '';

	foreach ($args as $name => $link)
	{
		if(!empty($link) && !empty($name)){
			$bc .= "<a href='$link'>$name</a> / ";
		}else{
			$bc .= "<span>$name</span>";
		}
	}
	echo $bc;
}

?>