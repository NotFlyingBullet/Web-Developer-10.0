<?php
$phone = $_POST['phone'];
$fd = fopen('Tel.php', w);
fwrite($fd, $phone);
echo "Файл записан  <a href='index.php'>Перейти на главную</a>"
?>