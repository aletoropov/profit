<?php

$imageId = (int) filter_input(INPUT_GET, 'id');
$imageList = include __DIR__ . DIRECTORY_SEPARATOR . 'images.php';

if (array_key_exists($imageId, $imageList)) {
    echo '<div><img src="' . $imageList[$imageId] . '"><p>Изображение: '. $imageList[$imageId] . '</p></div>';
} else {
    echo 'Изображение не найдено!';
}