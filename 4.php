<?php
    $title = 'Задача 4';
    $content = "Задача 4: вывод переменных в разметку";
    $today = date("d F Y") . " год";
    $html = <<<marking
            <!DOCTYPE html>
            <html lang="ru">
            <head>
                <meta charset="UTF-8">
                <title>{$title}</title>
            </head>
            <body>
                <h2>{$content}</h2>
                <h3>{$today}</h3>
                <p><a href="./index.php">... вернуться на Главную</a></p>
            </body>
            </html>
marking;
    echo $html;
