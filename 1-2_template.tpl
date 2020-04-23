<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <style>
        .content {
            margin: 0 auto;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        img {
            width: 150px;
            margin: 30px;
        }
    </style>
</head>
<body>
    <div class="content">
        {GALLERY}
    </div>
    <div class="content">
        <form enctype="multipart/form-data" method="POST">
            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
            <input type="file" name="photo" accept="image/*" required>
            <input type="submit" value="Добавить фото">
        </form>
    </div>
</body>
</html>
