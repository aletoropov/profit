<?php

require __DIR__ . DIRECTORY_SEPARATOR . 'functions.php';

$path = __DIR__ . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['image'])) {
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }

        $uploadedFile     = $_FILES['image']['tmp_name'];
        $uploadedFileName = $_FILES['image']['name'];
        $errorCode        = $_FILES['image']['error'];
        $fileInfo         = pathinfo($uploadedFileName);
    }

    $allowUpload = ['jpg', 'jpeg', 'png', 'gif'];

    if (!in_array($fileInfo['extension'], $allowUpload)) {
        trigger_error('Вы загружаете не изображение', E_USER_ERROR);
    }

    if ($errorCode == 0) {
        if (move_uploaded_file($uploadedFile, $path . $uploadedFileName)) {
            echo 'Файл загружен!';
        } else {
            trigger_error($errorCode, E_USER_ERROR);
        }
    }
}