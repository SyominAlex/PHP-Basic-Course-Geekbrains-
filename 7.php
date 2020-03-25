<?php
/* 7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты*/
$time = time();
$H = date('H', $time);
$I = date('i', $time);
function timeToStr($time, $t1 = 'час', $t2 = 'часа', $t3 = 'часов') {
    switch ($time) {
        case $time == 1:
            return $t1;
            break;
        case $time < 5:
            return $t2;
            break;
        default:
            return $t3;
            break;
    }
}
echo $H . ' ' . timeToStr($H)  . ' ' . $I . ' ' . timeToStr($I);
echo '<p><a href="index.php">...на главную</a></p>';
