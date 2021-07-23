<?php
	switch (get_post_type()){
		case 'post type name';
			include_temp('single/name.php');
			break;
		case '';
			include_temp('single/name.php');
			break;
		default:
			include_temp('single/default.php');
			break;
	}
?>