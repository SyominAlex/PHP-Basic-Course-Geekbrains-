<?php
/* 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов,
$operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций
(использовать функции из пункта 3) и вернуть полученное значение (использовать switch). */
echo '<h3>Дано: </h3>';
$a = rand(-100, 100);
$b = rand(-100, 100);
var_dump($a);
var_dump($b);

echo '<h3>Результат: </h3>';
function sumAction($a, $b) {
    return $a + $b;
}
function minusAction($a, $b) {
    return $a - $b;
}
function multAction($a, $b) {
    return $a * $b;
}
function devideAction($a, $b) {
    return $a / $b;
}
function mathOperation($a, $b, $operation) {
    $operation .= 'Action';              // соль! защита от взлома функции
    if (!function_exists($operation)) {  // проверка на наличие функции
        return "Функции $operation нет";
    }
    return $operation($a, $b);
}
echo 'Сумма: ' . mathOperation($a, $b, 'sum') . '<br>';
echo 'Разность: ' . mathOperation($a, $b, 'minus') . '<br>';
echo 'Произведение: ' . mathOperation($a, $b, 'mult') . '<br>';
echo 'Частное: ' . mathOperation($a, $b, 'devide') . '<br>';
echo '<p><a href="index.php">...на главную</a></p>';
