<?php

require __DIR__ . DIRECTORY_SEPARATOR . 'functions.php';

$images = getAllImages();

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Галерея изображений</title>
</head>
<body>

<?php
foreach ($images as $image) {
    echo '<img src="' . __DIR__ . DIRECTORY_SEPARATOR , 'images' . DIRECTORY_SEPARATOR . $image . '">';
}
?>

<form name="uploadimage" action="upload.php" enctype="multipart/form-data" method="POST">
    <div>
        <input name="image" type="file">
    </div>
    <div>
        <input type="submit" value="Загрузить">
    </div>
</form>
</body>
</html>