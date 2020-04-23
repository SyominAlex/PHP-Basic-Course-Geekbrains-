<?php
/*  Создать галерею фотографий. Она должна состоять всего из одной странички, на которой пользователь видит все картинки в уменьшенном виде и форму для загрузки
        нового изображения. При клике на фотографию она должна открыться в браузере в новой вкладке. Размер картинок можно ограничивать с помощью свойства width.
        При загрузке изображения необходимо делать проверку на тип и размер файла. Информация об изображениях должна храниться в массиве. */
const DIR_IMG = 'img';
function renderGallery()
{
    $images_tmp = scandir(__DIR__ . DIRECTORY_SEPARATOR . DIR_IMG);
    $tmp = '';
    foreach ($images_tmp as $value) {
        if (strlen($value) > 2) {
            $dirValue = DIR_IMG . DIRECTORY_SEPARATOR . $value;
            $tmp .= <<<a
                    <a href="$dirValue" target="_blank">
                        <img src="$dirValue" alt="image">
                    </a>
a;
        }
    }
    $temp = file_get_contents('1-2_template.tpl');
    $temp = str_replace('{GALLERY}', $tmp, $temp);
    echo $temp;
}
renderGallery();

