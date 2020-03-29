<?php
/* 9. *Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену
пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах). */
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
function translit($str, $direction) {
    if ($direction == 'ru-en') {
        return strtr($str, array_flip(getTranslitArray()));
    }
    return strtr($str, getTranslitArray());
}
function replace($str) {
    return str_replace(" ", "_", $str);
}
function translitAndReplace($str, $direction) {
    return replace(translit($str, $direction));
}
echo <<<text
        <form action="#" method="post">
            <label for="in">Введите текст для транслитерации и замены пробелов на символы нижнего подчеркивания: </label>
            <input type="text" name="str" placeholder="текст">
            <select name="direction" id="direction">
                <option value="ru-en">ru-en</option>
                <option value="en-ru">en-ru</option>
            </select>
            <input type="submit" value="Транслит + замена!">
        </form>
text;
echo 'Результат: ' . translitAndReplace(urldecode(htmlspecialchars($_POST['str'])), $_POST['direction']);
echo '<p><a href="index.php">...на главную</a></p>';
