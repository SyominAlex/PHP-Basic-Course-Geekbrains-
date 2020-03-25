<?php
// 6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
echo '<h3>Дано: </h3>';
$val = rand(-100, 100);
$pow = rand(-100, 100);
echo "Основание: $val <br>";
echo "Степень: $pow <br>";
echo '<h3>Результат: </h3>';
function power( $val, $pow ) {
    if ( $pow === 0 ) {
        return 1;
    }
    else {
        return $val * power( $val, $pow - 1);
    }
}
echo power($val, $pow);
echo '<p><a href="index.php">...на главную</a></p>';
