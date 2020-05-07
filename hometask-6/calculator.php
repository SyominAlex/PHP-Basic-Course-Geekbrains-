<?php

/*
 * 1. Создать форму-калькулятор с операциями: сложение, вычитание, умножение, деление.
 * Не забыть обработать деление на ноль! Выбор операции можно осуществлять с помощью тега <select>.
 *
 * 2. Создать калькулятор, который будет определять тип выбранной пользователем операции,
 * ориентируясь на нажатую кнопку.
 */

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
    $reset = $_POST['reset'];

    if ($reset) {
        $view = 0;
        $number1 = 0;
        $number2 = 0;
        $operation = false;
    }

    if ($operation) {
        if ($operation == "+") {
            $result = $number1 + $number2;
        }
        if ($operation == "-") {
            $result = $number1 - $number2;
        }
        if ($operation == "*") {
            $result = $number1 * $number2;
        }
        if ($operation == "/") {
            $result = ($number2 != 0) ? $number1 / $number2 : "Infinity";
        }
        $view = "$number1 $operation $number2 = " . $result;
    }
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Lesson 6 - Calculator</title>
</head>
<body style="width:50%; margin:0 auto;">
<h2>Calculator</h2><hr>
<form method="post">
    <input name="number1" type="text" value="<?= $number1 ?>">
    <input name="number2" type="text" value="<?= $number2 ?>">
    <input name="result" type="text" value="<?= $view ?>" disabled/><hr>
    <select name="operation" onchange="submit()">
        <option value="">Select operation</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input name="operation" value="+" type="submit"/>
    <input name="operation" value="-" type="submit"/>
    <input name="operation" value="*" type="submit"/>
    <input name="operation" value="/" type="submit"/>
    <input name="reset" value="Reset" type="submit"/>
</form>
</body>
</html>
