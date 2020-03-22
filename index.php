<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ДЗ №1</title>
</head>
<body>

    <h1><b>Задача 1: проверить, что всё работает (+ см. файл Задача1.docx)</b></h1>
    <?php
    // Hello!
    echo "Hello, World!";
    ?>

    <h1><b>Задача 2: выполнить примеры из методичек</b></h1>
    <?php
    // Использование переменных
    $name = "GeekBrains user";
    echo "Hello, $name!";
    ?>

    <?php
    // Как правильно называть переменные:
    $variable = '';
    $myVariable = 'sdf123_12jkoLkJ9*&^';
    $_variableWithDigits = 1234567890;
    ?>

    <?php
    // Константы
    define('MY_CONST', 100);
    echo MY_CONST;
    ?>

    <?php
    // Типы данных
    $int10 = 42;
    $int2 = 0101010;
    $int8 = 052;
    $int16 = 0x2A;
    echo "Десятеричная система $int10 <br>";
    echo "Двоичная система $int2 <br>";
    echo "Восьмеричная система $int8 <br>";
    echo "Шестнадцатеричная система $int16 <br>";
    ?>

    <?php
    // Числа, в т.ч. с плавающей точкой
    $precise1 = 1.5;
    $precise2 = 1.5e4;
    $precise3 = 6E-8;
    echo "$precise1 | $precise2 | $precise3";
    ?>

    <?php
    $a = 1;
    echo "$a";
    echo '$a';
    ?>

    <?php
    // Приведение типов можно провести и вручную
    $a = 10;
    $b = (boolean) $b;
    ?>

    <?php
    // Операции со строками
    $a = 'Hello,';
    $b = 'world';
    $c = $a . $b;
    echo $c;
    ?>

    <?php
    // Математические операции
    $a = 4;
    $b = 5;
    echo $a + $b . '<br>';    // сложение
    echo $a * $b . '<br>';    // умножение
    echo $a - $b . '<br>';    // вычитание
    echo $a / $b . '<br>';  // деление
    echo $a % $b . '<br>'; // остаток от деления
    echo $a ** $b . '<br>'; // возведение в степень
    ?>

    <?php
    // Инкременты и т.п.
    $a = 4;
    $b = 5;
    $a += $b;
    echo 'a = ' . $a;
    $a = 0;
    echo $a++;    // Постинкремент
    echo ++$a;    // Преинкремент
    echo $a--;    // Постдекремент
    echo --$a;    // Предекремент
    ?>

    <?php
    // Операции сравнения и функция var_dump
    $a = 4;
    $b = 5;
    var_dump($a == $b);  // Сравнение по значению
    var_dump($a === $b); // Сравнение по значению и типу
    var_dump($a > $b);    // Больше
    var_dump($a < $b);    // Меньше
    var_dump($a <> $b);  // Не равно
    var_dump($a != $b);   // Не равно
    var_dump($a !== $b); // Не равно без приведения типов
    var_dump($a <= $b);  // Меньше или равно
    var_dump($a >= $b);  // Больше или равно
    ?>

    <h1><b>Задача 3: объяснить</b></h1>
    <?php
    $a = 5;
    $b = '05';
    var_dump($a == $b);                       // Почему true?
    // работает динамическое приведение типов в php и нестрогое равенство: число строка '05' преобразована к числу 5
    var_dump((int)'012345');                            // Почему 12345?
    // явное преобразование строки '012345' к числу 12345
    var_dump((float)123.0 === (int)123.0);    // Почему false?
    // вещественное число 123.0 сравнивается с учетом типа === с целым числом 123, поэтому нет точного совпадения по типу и равенства
    var_dump((int)0 === (int)'hello, world'); // Почему true?
    // строка 'hello, world' преобразована к целому числу, а поскольку в начале строки нет цифр, то это 0, а целочисленный 0 = 0, отсюда true
    ?>

    <p><b>В дополнение к методичкам почитаk документацию и поэкспериментировал</b></p>
    <?php
    //    phpinfo();
        echo "<p>{$_SERVER['HTTP_USER_AGENT']}</p>";
    ?>

    <?php
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE ||
        strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) {
        ?>
        <h3>strpos(), должно быть, вернул не false</h3>
        <p>Вы используете Internet Explorer</p>
        <?php
    } else {
        ?>
        <h3>strpos() вернул false</h3>
        <p>Вы не используете Internet Explorer</p>
        <?php
    }
//    die('ok');
    ?>

    <h1><a href="./4.php">Задача 4: вывод переменных в разметку</a></h1>

    <h1>Задача 5: меняем значения 2 переменных местами</h1>
    <h2>Вариант 1</h2>
    <p>$a+=+$b-$b=$a</p>
    <?php
        $a = 1;
        $b = 2;

        echo('<p><b>Было</b>: ');
        var_dump($a);
        var_dump($b);
        echo('</p>');

        $a+=+$b-$b=$a;

        echo('<p><b>Стало</b>: ');
        var_dump($a);
        var_dump($b);
        echo('</p>');
    ?>
    <h2>Вариант 2</h2>
    <p>list($a, $b) = [$b, $a]</p>
    <?php
    $a = 1;
    $b = 2;

    echo('<p><b>Было</b>: ');
    var_dump($a);
    var_dump($b);
    echo('</p>');

    list($a, $b) = [$b, $a];

    echo('<p><b>Стало</b>: ');
    var_dump($a);
    var_dump($b);
    echo('</p>');
    ?>
    <h2>Вариант 3</h2>
    <p>Сложение и вычитание $b = $b - $a;
        $a = $a + $b;</p>
    <?php
    $a = 1;
    $b = 2;

    echo('<p><b>Было</b>: ');
    var_dump($a);
    var_dump($b);
    echo('</p>');

    $a = 1;
    $b = 2;
    $b = $b - $a;
    $a = $a + $b;
    // есть ограничения: 1) в переменных должны быть числа, 2) числа не должны выходить за диапазоны типа данных

    echo('<p><b>Стало</b>: ');
    var_dump($a);
    var_dump($b);
    echo('</p>');
    ?>

</body>
</html>
