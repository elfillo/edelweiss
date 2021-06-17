<?php
	function submitForm(){
		parse_str($_POST['data'], $data);

		print_r($_POST);
		//$sendTo = get_post_meta(get_page_data('contacts')->ID, 'email_tech', true);
		$sendTo = 'filonenko0406@gmail.com';

		$newLine = "<br/>";

		$headers  = "Content-type: text/html; charset=utf-8 \r\n";
		$headers .= "From: Заявка с сайта <from@example.com>\r\n";
		$headers .= "Reply-To: '.$sendTo.'\r\n";

		$to      = $sendTo;

		$subject = 'Заявка с сайта -';
		$message = '';

		$message .= 'Письмо с сайта'.$newLine;

		if(array_key_exists('type', $data)){
			$message .= 'Тема: '.$data['type'].$newLine;
			$message .= 'Имя: '.$data['name'].$newLine;
			$message .= 'Телефон: '.$data['phone'].$newLine;
		}

		mail($to, $subject, $message, $headers);
	}

	add_action('wp_ajax_nopriv_send-form', 'submitForm' );
	add_action('wp_ajax_send-form', 'submitForm' );
?>
