<?php
require_once "../config/main.php";
require_once ENGINE_DIR . "db.php";

function displayGallery()
{
    $dir = PUBLIC_DIR . "img/small/";
    $products = queryAll("SELECT id, name, image, short_description, description, price, category_id FROM product");
    foreach ($products as $info) {
        if (file_exists($dir . $info['path'])) {
            // Вывод товаров
            echo "<div><a href='view.php?id={$info["id"]}'>
            <img src = '{$dir}{$info["image"]}' alt='product' title='Кликните для получения подробной информации'><br>{$info["name"]}</div></a><hr>";
        }
    }
}
