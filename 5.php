<?php
// 5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.
$title = 'HI';
$year = date('Y') . ' год';
$str = file_get_contents('5.html');
$str = str_replace('{TITLE}', $title, $str);
$str = str_replace('{YEAR}', $year, $str);
echo $str;
echo '<p><a href="index.php">...на главную</a></p>';
