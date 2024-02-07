<?php

$imageId = (int) filter_input(INPUT_GET, 'id');
$imageList = include __DIR__ . DIRECTORY_SEPARATOR . 'images.php';

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Просмотр изображения</title>
</head>
<body>

<?php

if (array_key_exists($imageId, $imageList)) {
    echo '<div><img src="' . $imageList[$imageId] . '" alt=""><p>Изображение: '. $imageList[$imageId] . '</p></div>';
} else {
    echo 'Изображение не найдено!';
}

?>

</body>
</html>