<?php

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];

echo 'Имя пользователя - ' . $name . '</br>';
echo 'Номер телефона - ' . $phone . '</br>';


// Подключаем библиотеку PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exeption;
require 'phpMailer/PHPMailer.php';
require 'phpMailer/SMTP.php';
require 'phpMailer/Exception.php';
 
// Создаем письмо
$mail = new PHPMailer();
$mail->isSMTP();                   // Отправка через SMTP
$mail->Host   = 'smtp.mail.ru';  // Адрес SMTP сервера
$mail->SMTPAuth   = true;          // Enable SMTP authentication
$mail->Username   = 'xxxxxxx';       // ваше имя пользователя (без домена и @)
$mail->Password   = 'xxxxxxx';    // ваш пароль
$mail->SMTPSecure = 'ssl';         // шифрование ssl
$mail->Port   = 465;               // порт подключения
 
$mail->setFrom('xxxx@xxx', 'xxxx xxx');    // от кого
$mail->addAddress('xxxxx@xxx.xx', 'xxxx xxx'); // кому
 

$mail->Subject = 'Тест';
/*$mail->Body ="";*/
$mail->msgHTML("<html><body>
                <h1>Здравствуйте!</h1>
                <p>Это тестовое письмо.</p>
                <p>Имя введенное в форму - $name</p> 
                <p>Номер телефона - $phone</p>
                </html></body>");
// Отправляем
/*$mail->SMTPDebug = 1;//Информация*/
if ($mail->send()) {
  echo 'Письмо отправлено!';
  /*header("location: thanks.html");*/
} else {
  echo 'Ошибка: ' . $mail->ErrorInfo;

}

?>