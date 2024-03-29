<?php

/**
 * Создайте примитивную фотогалерею из двух страниц
 * Пусть на главной странице галереи выводятся 3-4 изображения
 * Каждое из них пусть будет ссылкой вида /image.php?id=42, где 42 - условный номер изображения
 * На странице image.php вы по номеру понимаете, какое изображение вывести в браузер и выводите его.
 * Я ожидаю, что для этого пункта программы вы создатите массив вида [1 => 'cat.jpg', 2=>'dog.jpg', ... ],
 * однако вы можете предложить и другое решение. Кстати, этот же массив вы используете и в пункте 1 - для вывода изображений!
 */

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

$imageList = include __DIR__ . DIRECTORY_SEPARATOR . 'images.php';

foreach ($imageList as $id => $oneImage) {
    echo '<div style="margin: 20px;"><a href="image.php?id=' . $id .'"><img src="'. $oneImage . '" alt=""></a></div>';
}

?>

</body>
</html>