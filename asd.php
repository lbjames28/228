<?php
if ($_POST['']);
$file=fopen('mes.txt','a+');
fputs($file,$_POST['name']);
fputs($file,$_POST['email']);
fputs($file,$_POST['mes']);
fclose($file);
echo 'Данные записаны в файл!'; //можно удалить
?>
