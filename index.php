<?php
echo <<<task1
            <h3><a href="1.php">Задача 1:</a></h3>
            <p>Объявить две целочисленные переменные \$a и \$b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:</p>
            <ul>
                <li>если \$a и \$b положительные, вывести их разность;</li>
                <li>если \$а и \$b отрицательные, вывести их произведение;</li>
                <li>если \$а и \$b разных знаков, вывести их сумму.</li>
            </ul>
            <p>Ноль можно считать положительным числом.</p>
task1;
echo <<<task2
            <h3><a href="2.php">Задача 2:</a></h3>
            <p>Присвоить переменной \$а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от \$a до 15.</p>
task2;
echo <<<task3
            <h3><a href="3.php">Задача 3:</a></h3>
            <p>Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.</p>
task3;
echo <<<task4
            <h3><a href="4.php">Задача 4:</a></h3>
            <p>Реализовать функцию с тремя параметрами: function mathOperation(\$arg1, \$arg2, \$operation), где \$arg1, \$arg2 – значения аргументов,
\$operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций
(использовать функции из пункта 3) и вернуть полученное значение (использовать switch).</p>
task4;
echo <<<task5
            <h3><a href="5.php">Задача 5:</a></h3>
            <p>Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.</p>
task5;
echo <<<task6
            <h3><a href="6.php">Задача 6:</a></h3>
            <p>*С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power(\$val, \$pow), где \$val – заданное число, \$pow – степень.</p>
task6;
echo <<<task7
            <h3><a href="7.php">Задача 7:</a></h3>
            <p>*Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например: 22 часа 15 минут, 21 час 43 минуты.</p><br><br><br>
task7;

//$date = '2020-02-02';
////$time = time();
//$time = strtotime($date);
////echo $time . ' ';
////echo date('d F Y', $time);
//echo date('d.m.Y', $time);

// if, switch
//$payment = '1';
////switch ($payment) {
////    default:
////        echo 'Ошибка';
////        break;
////    case '1':
////        echo 'Наличка';
////        break;
////    case '2':
////        echo 'По карте';
////        break;
////    case '3':
////        echo 'С телефона';
////        break;
////}
//if ('1' == $payment) {
//    echo 'Наличка';
//} elseif ('2' == $payment) {
//    echo 'По карте';
//} else {
//    echo 'Ошибка';
//}

// фукнции
//say1(); // попытка вызвать неопределенную функцию - Fatal error: Uncaught Error: Call to undefined function say1() in E:\Geekbrains\Distr\OpenServer\OSPanel\domains\gbphp\index.php:34 Stack trace: #0 {main} thrown in E:\Geekbrains\Distr\OpenServer\OSPanel\domains\gbphp\index.php on line 34
//$say = '123';
////$a = 1;
//function say($say, $word = 'World'):string // void //ничего не возвращает - тогда echo //:string //Fatal error: Uncaught TypeError: Return value of say() must be of the type string, none returned in E:\Geekbrains\Distr\OpenServer\OSPanel\domains\gbphp\index.php:38 Stack trace: #0 E:\Geekbrains\Distr\OpenServer\OSPanel\domains\gbphp\index.php(43): say() #1 {main} thrown in E:\Geekbrains\Distr\OpenServer\OSPanel\domains\gbphp\index.php on line 38
//{
////    $a = 456;
////    echo "Hello World" . '<hr>';
//    return "{$say} {$word}" . '<hr>';
//}
//// пытаемся переопределить функцию - Fatal error: Cannot redeclare say() (previously declared in E:\Geekbrains\Distr\OpenServer\OSPanel\domains\gbphp\index.php:36) in E:\Geekbrains\Distr\OpenServer\OSPanel\domains\gbphp\index.php on line 41
////function say() {
////    echo "Hello World" . '<hr>';
////}
//echo say('Hi');
//echo say('Hello', 'John');
//$say = '321';
////echo say($say);
////echo $a;

//$a = 0;
//function inc(&$a) // & - передача данных по ссылке
//{
////    $a = $a + 1;
//    return $a++; // увеличивается только внутри функции
////    echo $a;
//}
////$a = inc($a);
//inc($a);
//inc($a);
//inc($a);
//echo $a;
//echo '<br>';
//echo '<br>';
//    // передача данных по ссылке
//    $a = 2;
//    $b = $a;
//    echo $b; // 2
//    echo '<br>';
//    $b =& $a;
//    $a = 10;
//    echo $b; // 10!

// global позволяет менять переменную в функции глобально, как извне
//$a = 0;
//function inc() // global - здесь передавать ничего не нужно
//{
//    global $a; // не рекомендуется, т.к. можно случайно переопределить, потерять данные
//    return $a++;
//}
//inc();
//inc();
//inc();
//echo $a;
//echo '<br>';

// константа
//const ADMIN_USER_ID = 3.14;
//$a = 0;
//function inc() // global - здесь передавать ничего не нужно
//{
//    echo ADMIN_USER_ID + 1;
//}
//inc();
//echo '<br>';
//inc();
//echo '<br>';
//inc();
//echo '<br>';

//// static позволяет сохранять данные, а потом к ним обращаться
//$a = 0;
//function inc()
//{
//    static $a = 0; //меняется переменная только внутри функции, значение сохраняется
//    $a = $a + 1;
//    echo $a;
////    echo ++$a;
//}
//inc(); //1
//inc(); //2
//inc(); //3
//echo $a; //0 т.е. переменная в итоге не меняется глобально!
//echo '<br>';

//// рекурсия
//function payment($sum, $paymentId)
//{
//    if (isNotPayment($sum)) { // локально вызывается глобальная функция
//        return 'Маленькая сумма для доставки';
//    }
//    if ('1' == $paymentId) {
//        return 'Наличка';
//    }
//    if ('2' == $paymentId) {
//        return 'По карте';
//    }
//    return 'Ошибка';
//}
//function isNotPayment($sum)
//{
//    return 1200 > $sum;
//}
//echo payment(100, 2);
////вывод числел от a до b
//function inc($a, $b)
//{
//    echo $a++ . ' ';
//    if ($a <= $b) {
//        inc($a, $b); // показывает значок, что функция вызывает сама себя
//    }
//}
//inc(3, 50);

//// получить содержимое файла
//$title = 'HI';
//$year = date('Y') . ' год';
//$str = file_get_contents('5.html');
////$str = file_get_contents('https://www.sberbank.ru/ru/person');
////echo $str;
//$str = str_replace('{TITLE}', $title, $str);
//$str = str_replace('{YEAR}', $year, $str);
//echo $str;
