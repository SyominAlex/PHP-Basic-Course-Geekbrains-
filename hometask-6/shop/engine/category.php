<?php
require_once "../config/main.php";
require_once ENGINE_DIR . "db.php";

function selectCategory()
{
    $html = '<select name="category_id"><option disabled>Выберите категорию</option>';
    $categories = queryAll("SELECT id, name FROM category");
    foreach ($categories as $category) {
        $html .= '<option value="' . $category["id"] . '">' . $category["name"] . '</option>';
    }
    $html .= '</select>';
    return $html;
}

function nameCategory($id)
{
    $info = queryOne("SELECT id, name FROM category WHERE id = {$id}");
    return $info["name"];
}
