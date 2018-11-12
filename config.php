<?php
$host = 'localhost'; // адрес сервера 
$database = 'phpless'; // имя базы данных
$user = 'mysql'; // имя пользователя
$password = ''; // пароль
$db_table = 'review'; //таблица

// подключаемся к серверу
$link = new mysqli($host, $user, $password, $database) 
	or die("Ошибка " . mysqli_error($link));


?>