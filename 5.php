<?php
/* 5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку. */
function replace($str) {
    return str_replace(" ", "_", $str);
}
echo <<<text
        <form action="#" method="post">
            <label for="in">Введите текст для замены пробелов на символы нижнего подчеркивания: </label>
            <input type="text" name="str" placeholder="текст">
            <input type="submit" value="Замена!">
        </form>
text;
echo 'Результат: ' . replace(urldecode(htmlspecialchars($_POST['str'])));
echo '<p><a href="index.php">...на главную</a></p>';
// str_replace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] ) : mixed
//// присваивает <body text='black'>
//$bodytag = str_replace("%body%", "black", "<body text='%body%'>");
//// присваивает: Hll Wrld f PHP
//$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
//$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
//// присваивает: You should eat pizza, beer, and ice cream every day
//$phrase  = "You should eat fruits, vegetables, and fiber every day.";
//$healthy = array("fruits", "vegetables", "fiber");
//$yummy   = array("pizza", "beer", "ice cream");
//$newphrase = str_replace($healthy, $yummy, $phrase);
//// присваивает: 2
//$str = str_replace("ll", "", "good golly miss molly!", $count);
//echo $count;
