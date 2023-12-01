<?php

$imageId = (int) filter_input(INPUT_GET, 'id');
$imageList = include 'images.php';

if (array_key_exists($imageId, $imageList)) {
    echo '<img src="' . $imageList[$imageId] . '">';
} else {
    echo 'Изображение не найдено!';
}