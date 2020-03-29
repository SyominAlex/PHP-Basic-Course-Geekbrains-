<?php
/* 4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания
(‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк. */
function getTranslitArray()
{
    return [
        'A' => 'А', 'a' => 'а', 'B' => 'Б', 'b' => 'б',
        'V' => 'В', 'v' => 'в', 'G' => 'Г', 'g' => 'г',
        'D' => 'Д', 'd' => 'д', 'E' => 'Е', 'e' => 'е',
        'YO' => 'Ё', 'yo' => 'ё', 'ZH' => 'Ж', 'zh' => 'ж',
        'Z' => 'З', 'z' => 'з', 'I' => 'И', 'i' => 'и',
        'J' => 'Й', 'j' => 'й', 'K' => 'К', 'k' => 'к',
        'L' => 'Л', 'l' => 'л', 'M' => 'М', 'm' => 'м',
        'N' => 'Н', 'n' => 'н', 'O' => 'О', 'o' => 'о',
        'P' => 'П', 'p' => 'п', 'R' => 'Р', 'r' => 'р',
        'S' => 'С', 's' => 'с', 'T' => 'Т', 't' => 'т',
        'U' => 'У', 'u' => 'у', 'F' => 'Ф', 'f' => 'ф',
        'KH' => 'Х', 'kh' => 'х', 'H' => 'Х', 'h' => 'х',
        'CZ' => 'Ц', 'cz' => 'ц', 'C' => 'Ц', 'c' => 'ц',
        'CH' => 'Ч', 'ch' => 'ч', 'SH' => 'Ш', 'sh' => 'ш',
        'SHH' => 'Щ', 'shh' => 'щ', '``' => 'Ъ',
        'Y' => 'Ы', 'y' => 'ы', '`' => 'Ь',
        'E`' => 'Э', 'e`' => 'э', 'YU' => 'Ю', 'yu' => 'ю',
        'YA' => 'Я', 'ya' => 'я'
    ];
}
// решение через strtr()
function translit($str, $direction) {
    if ($direction == 'ru-en') {
        return strtr($str, array_flip(getTranslitArray()));
    }
    return strtr($str, getTranslitArray());
}
// решение "в лоб" через for
//function translit($str) { //$direction = 'en-ru'
//    $trans = getTranslitArray();
//    for ($i = 0; $i <= strlen($str); $i += 2) {
//        $char = substr($str, $i, 2);
//        echo $trans[$char];
//    }
//}
echo <<<text
        <form action="#" method="post">
            <label for="in">Введите текст для транслитерации: </label>
            <input type="text" name="str" placeholder="текст">
            <select name="direction" id="direction">
                <option value="ru-en">ru-en</option>
                <option value="en-ru">en-ru</option>
            </select>
            <input type="submit" value="Транслит!">
        </form>
text;
echo 'Результат: ' . translit(urldecode(htmlspecialchars($_POST['str'])), $_POST['direction']);
echo '<p><a href="index.php">...на главную</a></p>';
