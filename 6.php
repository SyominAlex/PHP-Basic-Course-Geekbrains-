<?php
/* 6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP. Необходимо представить пункты меню
как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать. */
function getMenu()
{
    $menu = [
        'Главная' => [
            'href' => '/index.php',
        ],
        'Новости' => [
            'href' => '/news.html',
            'dopMenu' => [
                'Новости спорта' => '/news_sport.html',
                'Новости о политике' => '/news_politics.html',
                'Новости науки' => '/news_science.html',
            ]
        ],
        'О нас' => [
            'href' => '/about.html',
        ],
        'Контакты' => [
            'href' => '/contacts.html',
        ],
    ];
    $str = '';
    foreach ($menu as $key => $value) {
        if (empty($value['dopMenu'])) {
            $str .= "<div><a href='{$value['href']}'><span>$key</span></a></div>";
            continue;
        }

        $str .= "<div><a><span>$key</span></a><div>";
        foreach ($value['dopMenu'] as $name => $val) {
            $str .= "<a href='{$val}'>$name</a>";
        }
        $str .= "</div></div>";
    }

    return $str;
}

$html = file_get_contents('6.html');
echo str_replace('MENU', getMenu(), $html);
