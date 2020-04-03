<?php
echo <<<lesson3
            <h1>Урок 3. Циклы и массивы</h1>
            <h3><a href="1.php">Задача 1:</a></h3>
            <p>С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.</p>
            <h3><a href="2.php">Задача 2:</a></h3>
            <p>С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:</p>
                <ul>
                    <li>0 – ноль.</li>
                    <li>1 – нечетное число.</li>
                    <li>2 – четное число.</li>
                    <li>3 – нечетное число.</li>
                    <li>…</li>
                    <li>10 – четное число.</li>
                </ul>
            <h3><a href="3.php">Задача 3:</a></h3>
            <p>Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:</p>
            <p>Московская область:</p>
            <p>Москва, Зеленоград, Клин</p>
            <p>Ленинградская область:</p>
            <p>Санкт-Петербург, Всеволожск, Павловск, Кронштадт</p>
            <p>Рязанская область … (названия городов можно найти на maps.yandex.ru)</p>
            <h3><a href="4.php">Задача 4:</a></h3>
            <p>Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания
            (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
            Написать функцию транслитерации строк.</p>
            <h3><a href="5.php">Задача 5:</a></h3>
            <p>Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.</p>
            <h3><a href="6.php">Задача 6:</a></h3>
            <p>В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP. Необходимо представить пункты меню
как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.</p>
            <h3><a href="7.php">Задача 7*:</a></h3>
            <p>Вывести с помощью цикла for числа от 0 до 9, не используя тело цикла. Выглядеть должно так: for (…){ // здесь пусто}</p>
            <h3><a href="8.php">Задача 8*:</a></h3>
            <p>Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».</p>
            <h3><a href="9.php">Задача 9*:</a></h3>
            <p>Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену
пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).</p>
lesson3;

// таблица умножения
//for ($i = 0, $z = 0 ; $i <= 3; $i++){
//    echo $z++ . ' ';
//    for ($j = 1; $j <= 3; $j++){
//        $factor = ($i == 0) ? 1 : $i;
//        echo ($factor * $j) . ' ';
//    }
//    echo "<br>";
//}

// МАССИВЫ
//$user = [
//    'role' => ['admin', 'user', 'vip', 'vip'],
//    'login' => 'admin',
//    'password' => '123',
////    'role' => [
////        't1' =>'admin',
////        't2' =>'user',
////        't3' =>'vip',
////        't4' =>'vip',
////    ],
//];
// WHERE good_id IN (12,45,45,65);
//var_dump($user);
//for ($i = 0; $i <= count($user['role']); $i++) {
//    echo $user['role']['t' . $i] . '<br>';
//}
// вывод массива верхнего уровня
//foreach ($user as $key => $value) {
//    if (is_array($value)) {
//        continue;
//    }
//    echo "{$key}  ==> $value <br>";
//}
// вывод последнего элемента
//$array = array(1,2,3);
//$end_element = array_pop($array);
//foreach ($array as $value) {
//    echo $value.' - !<br>';
//}
//echo $end_element.' - Последний элемент<br>';
//через implode
//$tag_list = [1,2,3,4,5];
//$tag_list = implode(',', $tag_list);
//echo $tag_list; // tag1, tag2, ...., tagN
// комбинированный вывод внешнего и вложенных массивов
//foreach ($user as $key => $value) {
//    if (!is_array($value)) {
//        echo "{$key}:<br>$value<br>";
//        continue;
//    }
//    echo "{$key}: <br>";
//    foreach ($value as $keyRole => $role) {
//        $str .= "{$role}, ";
//    }
//    echo trim($str, ', ') . '<br>';
//    $str = '';
//}
// комбинированный вывод внешнего и вложенных массивов - решение c implode()
//foreach ($user as $key => $value) {
//    echo "{$key}:<br>";
//    if (is_array($value)) {
//        echo implode(', ', $value) . '<br>';
//        continue;
//    }
//    echo "{$value}<br>";
//}

//echo count($user['role']); // считает количество элементов в массиве

//удаление массива или элементов
//unset ( mixed $var [, mixed $... ] ) : void
//unset() удаляет перечисленные переменные.
//unset($user['role'][0]);
//var_dump($user);
//function destroy_foo()
//{
////    global $foo;
//    unset($foo);
//}
//$foo = 'bar';
//destroy_foo();
//echo $foo;
//// удаляем одну переменную
//unset($foo);
//// удаляем один элемент массива
//unset($bar['quux']);
//// удаляем несколько переменных
//unset($foo1, $foo2, $foo3);

//in_array() - поиск в массиве
//$os = array("Mac", "NT", "Irix", "Linux");
//if (in_array("Irix", $os)) {
//    echo "Нашел Irix";
//}
//if (in_array("mac", $os)) {
//    echo "Нашел mac";
//}

// empty() проверяет быстрее!

// array_flip() - чтобы несколько раз не использовать in_array(), переворачивает массив: ключи и значения меняются местами
//значения массива должны быть корректными ключами, то есть они должны иметь тип integer или string
//$input = array("oranges", "apples", "pears");
//$flipped = array_flip($input);
//
//print_r($flipped);
//$roles = array_flip($user['role']);
//if (isset($roles['admin'])) {
//    echo 'Он есть';
//}

// сортировка массива (много функций сортировки)
//$fruits = array("lemon", "orange", "banana", "apple");
//sort($fruits);
//foreach ($fruits as $key => $val) {
//    echo "fruits[" . $key . "] = " . $val . "\n";
//}

// array_map()
//$user = [
//    'login' => 'admin',
//    'password' => '123',
//    'role' => [
//        ['key' =>'admin', 'name' => 'admin1'],
//        ['key' =>'user', 'name' => 'user2'],
//        ['key' =>'vip', 'name' => 'vip3'],
//    ],
//];
//var_dump($user);
//$roles = array_map(
//    function ($item) {
//        return $item['name'];
//    },
//    $user['role']
//);
//var_dump($roles);
// более понятный пример из дока
//function cube($n)
//{
//    return ($n * $n * $n);
//}
//
//$a = [1, 2, 3, 4, 5];
//$b = array_map('cube', $a);
//print_r($b);

// разбирает строку на массив explode ( string $delimiter , string $string [, int $limit = PHP_INT_MAX ] ) : array
// Пример 1
//$pizza  = "кусок1 кусок2 кусок3 кусок4 кусок5 кусок6";
//$pieces = explode(" ", $pizza);
//echo $pieces[0]; // кусок1
//echo $pieces[1]; // кусок2
//// Пример 2
//$data = "foo:*:1023:1000::/home/foo:/bin/sh";
//list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
//echo $user; // foo
//echo $pass; // *
///* Строка, которая не содержит разделителя, будет
//   просто возвращать массив с одним значением оригинальной строки.*/
//$input1 = "hello";
//$input2 = "hello,there";
//$input3 = ',';
//var_dump( explode( ',', $input1 ) );
//var_dump( explode( ',', $input2 ) );
//var_dump( explode( ',', $input3 ) );

// strtr ( string $str , string $from , string $to ) : string Преобразует заданные символы или заменяет подстроки
// strtr ( string $str , array $replace_pairs ) : string
////В этой форме strtr() осуществляет побайтное преобразование
////Таким образом, здесь подразумевается однобайтная кодировка:
//$addr = strtr($addr, "aao", "aao");
//$trans = array("h" => "-", "hello" => "hi", "hi" => "hello");
//echo strtr("hi all, I said hello", $trans); //hello all, I said hi
// Сравнение поведения функции strtr()
//echo strtr("baab", "ab", "01"),"\n"; //1001
//$trans = array("ab" => "01");
//echo strtr("baab", $trans); //ba01

// наоборот - склеивает массив в строку с разделителями implode ( string $glue , array $pieces ) : string
//$array = array('имя', 'почта', 'телефон');
//$comma_separated = implode(",", $array);
//echo $comma_separated; // имя,почта,телефон
//// Пустая строка при использовании пустого массива:
//var_dump(implode('hello', array())); // string(0) ""

// СУПЕРГЛОБАЛЬНЫЕ ПЕРЕМЕННЫЕ
//var_dump($_GET);
//var_dump($GLOBALS);
//var_dump($_SERVER);

// строка как массив
//// Получение первого символа строки
//$str = 'This is a test.';
//$first = $str[0];
//// Получение третьего символа строки
//$third = $str[2];
//// Получение последнего символа строки
//$str = 'This is still a test.';
//$last = $str[strlen($str)-1];
//// Изменение последнего символа строки
//$str = 'Look at the sea';
//$str[strlen($str)-1] = 'e';

// нюанс по строкам и кодировкам
//$str = 'Test';
//var_dump($str);
//echo $str[0] . '<br>';
//$str = 'Тест';
//var_dump($str);
//echo $str[0];
//echo $str[0] . $str[1] . '<br>';
//function getTranslitArray()
//{
//    return [
//        'A' => 'А', 'a' => 'а', 'B' => 'Б', 'b' => 'б',
//        'V' => 'В', 'v' => 'в', 'G' => 'Г', 'g' => 'г',
//        'D' => 'Д', 'd' => 'д', 'E' => 'Е', 'e' => 'е',
//        'YO' => 'Ё', 'yo' => 'ё', 'ZH' => 'Ж', 'zh' => 'ж',
//        'Z' => 'З', 'z' => 'з', 'I' => 'И', 'i' => 'и',
//        'J' => 'Й', 'j' => 'й', 'K' => 'К', 'k' => 'к',
//        'L' => 'Л', 'l' => 'л', 'M' => 'М', 'm' => 'м',
//        'N' => 'Н', 'n' => 'н', 'O' => 'О', 'o' => 'о',
//        'P' => 'П', 'p' => 'п', 'R' => 'Р', 'r' => 'р',
//        'S' => 'С', 's' => 'с', 'T' => 'Т', 't' => 'т',
//        'U' => 'У', 'u' => 'у', 'F' => 'Ф', 'f' => 'ф',
//        'KH' => 'Х', 'kh' => 'х', 'H' => 'Х', 'h' => 'х',
//        'CZ' => 'Ц', 'cz' => 'ц', 'C' => 'Ц', 'c' => 'ц',
//        'CH' => 'Ч', 'ch' => 'ч', 'SH' => 'Ш', 'sh' => 'ш',
//        'SHH' => 'Щ', 'shh' => 'щ', '``' => 'Ъ',
//        'Y' => 'Ы', 'y' => 'ы', '`' => 'Ь',
//        'E`' => 'Э', 'e`' => 'э', 'YU' => 'Ю', 'yu' => 'ю',
//        'YA' => 'Я', 'ya' => 'я'
//    ];
//}
//$translit = getTranslitArray();
////for ($i = 0; $i <= strlen($str); $i += 2) {
//////    $char = substr($str, $i, 2);
////    $char = $str[$i] . $str[$i + 1];
////    echo $translit[$char];
////}
//for ($i = 0; $i <= mb_strlen($str); $i++) {
//    $ch = mb_substr($str, $i, 1);
//    echo $translit[$ch];
//}
