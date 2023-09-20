<?php
// Получаем значения из формы
$username = $_POST['username'];
$password = $_POST['password'];

// Создаем новый объект SimpleXMLElement
$xml = new SimpleXMLElement('<user></user>');
$xml->addChild('username', $username);
$xml->addChild('password', $password);

// Сохраняем данные в файл
$xml->asXML('user.xml');

// Выводим сообщение об успешном сохранении
echo "Your login information has been saved.";
?>
