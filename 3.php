<?php
/*  Создать галерею фотографий. Она должна состоять всего из одной странички, на которой пользователь видит все картинки в уменьшенном виде и форму для загрузки
        нового изображения. При клике на фотографию она должна открыться в браузере в новой вкладке. Размер картинок можно ограничивать с помощью свойства width.
        При загрузке изображения необходимо делать проверку на тип и размер файла.
        Строить фотогалерею, не указывая статичные ссылки к файлам, а просто передавая в функцию построения адрес папки с изображениями.
        Функция сама должна считать список файлов и построить фотогалерею со ссылками в ней.
        При клике по миниатюре нужно показывать полноразмерное изображение в модальном окне (JavaScript). */
const DIR_IMG = 'img';
function renderGallery()
{
    $images_tmp = scandir(__DIR__ . DIRECTORY_SEPARATOR . DIR_IMG);
    $tmp = '';
    foreach ($images_tmp as $value) {
        if (strlen($value) > 2) {
            $dirValue = DIR_IMG . DIRECTORY_SEPARATOR . $value;
            $tmp .= "<img src='{$dirValue}' class='gallery' data-full_image_url='{$dirValue}' alt='Картинка{$dirValue}'>";
        }
    }
    $temp = file_get_contents('3_template.tpl');
    $temp = str_replace('{GALLERY}', $tmp, $temp);
    echo $temp;
}
renderGallery();
