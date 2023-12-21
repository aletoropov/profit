<?php

/**
 * Функция чтения сообщений гостевой книги из файла.
 *
 * @param $file
 * @return array
 */
function getGbMessage($file): array
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