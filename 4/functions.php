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
      $data[] = 'Файл с сообщениями отсутсвует или недоступен :(';
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
function addGbMessage(string $message, string $file = 'db.txt')
{
    $dataFile = __DIR__ . DIRECTORY_SEPARATOR . $file;
    $message = trim($message);
    $message = $message . PHP_EOL;
    file_put_contents($dataFile, $message, FILE_APPEND | LOCK_EX);
}