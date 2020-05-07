<?php
require_once "../config/main.php";
require_once ENGINE_DIR . "upload.php";
require_once ENGINE_DIR . "auth.php";
require_once ENGINE_DIR . "category.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];
}

echo "<div><h2>Админка</h2>";

if (authentication($login, $password)) {
    uploadImg();
    // Форма загрузки нового товара
    echo '
    <form enctype="multipart/form-data" method = "post">
        Название: <input name="name" type="text"/><br>
        <p>Краткое описание: </p>
        <textarea name="short_description" cols="30" rows="5"></textarea><br> 
        <p>Описание: </p>
        <textarea name="description" cols="30" rows="10"></textarea><br>
        Цена: <input name="price" type="text"/><br>
        Категория: ' . selectCategory() . '<br>
        <p>Изображение: </p>
        <input name="file" type="file"/><br>
        <input name="login" type="hidden" value="' . $login . '"/>
        <input name="password" type="hidden" value="' . $password . '"/>
        <input value="Записать в БД" type="submit"/>
    </form>';
} else {
    // Форма аутентификации
    echo "Введите логин и пароль для входа в админку (admin, 123)";
    echo '<form method = "post">
    Логин: <input name="login" type="text"/><br>
    Пароль: <input name="password" type="password"/><br>
    <input value="Войти" type="submit"/>
    </form>';
}

closeConnection();

?>

<a href="index.php">Посмотреть весь каталог</a><br>
<a href="admin.php">Вход в админку</a>
</div>
