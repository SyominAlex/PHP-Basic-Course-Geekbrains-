<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <style>
        .galleryWrapper__screen {
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #222;
            opacity: 0.8;
            position: fixed;
            top: 0;
            z-index: 100;
            display: block;
            text-align: center;
        }
        .galleryWrapper__image {
            max-height: 80%;
            max-width: 80%;
            z-index: 101;
            position: absolute;
            margin: auto;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
        }
        .galleryWrapper__close {
            z-index: 101;
            position: absolute;
            top: 0;
            right: 0;
            width: 3%;
        }
        .galleryPreviewsContainer {
            margin: 0 auto;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .gallery {
            width: 150px;
            margin: 30px;
        }
        .gallery:hover {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="galleryPreviewsContainer">
        {GALLERY}
    </div>
    <div class="galleryPreviewsContainer">
        <form enctype="multipart/form-data" method="POST">
            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
            <input type="file" name="photo" accept="image/*" required>
            <input type="submit" value="Добавить фото">
        </form>
    </div>
    <script src="gallery/js.js"></script>
</body>
</html>
