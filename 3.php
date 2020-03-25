<?php
// 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
echo '<h3>Дано: </h3>';
$a = rand(-100, 100);
$b = rand(-100, 100);
var_dump($a);
var_dump($b);

echo '<h3>Результат: </h3>';
function sum($a, $b) {
    return $a + $b;
}
function minus($a, $b) {
    return $a - $b;
}
function mult($a, $b) {
    return $a * $b;
}
function devide($a, $b) {
    return $a / $b;
}
echo 'Сумма: ' . sum($a, $b) . '<br>';
echo 'Разность: ' . minus($a, $b) . '<br>';
echo 'Произведение: ' . mult($a, $b) . '<br>';
echo 'Частное: ' . devide($a, $b) . '<br>';
echo '<p><a href="index.php">...на главную</a></p>';
