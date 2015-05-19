<?php
	
	if(isset($_POST['name'])) {$name = $_POST['name'];} else {$name = 'Не указано';};
	if(isset($_POST['tel'])) {$tel = $_POST['tel'];} else {$tel = 'Не указано';};
	if(isset($_POST['message'])) {$message = $_POST['message'];} else {$message = 'Не указано';};
	if(isset($_POST['url'])) {$url = $_POST['url'];} else {$url = 'Не указано';};
	if(isset($_POST['opros'])) {

		$opros = '';
		foreach ($_POST['opros'] as $key => $value) {
			$opros = $opros.(++$key).'. '.$value."\n";
		}
		$message = $message."\nДанные опроса: \n".$opros;

	};

	$feedback = $_POST['feedback'];
	$emailFrom = 'info@bezkreditoff.ru';
	$e_sendto =  'seoschka@yandex.ru, info@bezkreditoff.ru';
	$e_subject = 'Сообщение с Безкредитофф. '.$feedback;
	$e_body = "Вы получили сообщение от: "
					.$name								
					. "\n"
					."Телефон: " . $tel								
					. "\n"
					."Сообщение: " . $message								
					. "\n"
					."URL: " . $url						
					. "\n"
					."\r\n\n";

	if(mail($e_sendto, $e_subject, $e_body, "From: $emailFrom\r\nReply-To: $emailFrom\r\nReturn-Path: $emailFrom\r\n"))
	{						 
		echo "Ваша заявка принята, в бижайщее время с Вами свяжется менеджер!";
	} 
	else 
	{
		echo "Ошибка отправки заявки. Повторите отправку позже или позвоните по телефону!";	
	}	

?>