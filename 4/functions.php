<?php

/**
 * Функция чтения сообщений гостевой книги из файла.
 *
 * @param string $file
 * @return array
 */
function getGbMessage(string $file = 'db.txt'): array
{
  $dataFile = __DIR__ . DIRECTORY_SEPARATOR . $file;

  if (is_readable($dataFile)) {
    $fn = fopen($dataFile, 'r');
    while (!feof($fn)) {
        $data[] = fgets($fn);
    }
  } else {
      $data[] = 'Файл с сообщениями отсутствует или недоступен :(';
  }
  return $data;

}

/**
 * Функция добавления нового сообщения в гостевую книгу
 *
 * @param string $message
 * @param string $file
 * @return void
 */
function addGbMessage(string $message, string $file = 'db.txt'): void
{
    $dataFile = __DIR__ . DIRECTORY_SEPARATOR . $file;
    $message = trim($message);
    $message = $message . PHP_EOL;
    file_put_contents($dataFile, $message, FILE_APPEND | LOCK_EX);
}

/**
 * Функция сканирования папки в поиске изображений
 *
 * @param string $directory
 * @return array
 */
function getAllImages(string $directory = __DIR__ . '/images/'): array
{
    $images = [];
    $ignoreFiles = ['.', '..', '.gitkeep'];
    $files = scandir($directory);

    foreach ($files as $file) {
        if (in_array($file, $ignoreFiles)) {
            continue;
        }
        $images[] = $file;
    }

    return $images;
}