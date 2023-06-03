<?php

/**
 * Напишите программу, которая составит и выведет в браузер таблицу истинности
 * для логических операторов &&, || и xor.
 */

include __DIR__ . DIRECTORY_SEPARATOR . "functions.php";

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Таблица истинности</title>
    <style>
        table {
            text-align: center;
        }
    </style>
</head>
<body>
<h3>Конъюнкция</h3>
<table>
    <tr>
        <th>a</th>
        <th>b</th>
        <th>a xor b</th>
    </tr>
    <tr>
        <td>0</td>
        <td>0</td>
        <td><?=checkTruth(0, 0, 'and');?></td>
    </tr>
    <tr>
        <td>0</td>
        <td>1</td>
        <td><?=checkTruth(0, 1, 'and');?></td>
    </tr>
    <tr>
        <td>1</td>
        <td>0</td>
        <td><?=checkTruth(1, 0, 'and');?></td>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
        <td><?=checkTruth(1, 1, 'and');?></td>
    </tr>
</table>
<h3>Дизъюнкция</h3>
<table>
    <tr>
        <th>a</th>
        <th>b</th>
        <th>a xor b</th>
    </tr>
    <tr>
        <td>0</td>
        <td>0</td>
        <td><?=checkTruth(0, 0, 'or');?></td>
    </tr>
    <tr>
        <td>0</td>
        <td>1</td>
        <td><?=checkTruth(0, 1, 'or');?></td>
    </tr>
    <tr>
        <td>1</td>
        <td>0</td>
        <td><?=checkTruth(1, 0, 'or');?></td>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
        <td><?=checkTruth(1, 1, 'or');?></td>
    </tr>
</table>
    <h3>Сложение по модулю</h3>
    <table>
        <tr>
            <th>a</th>
            <th>b</th>
            <th>a xor b</th>
        </tr>
        <tr>
            <td>0</td>
            <td>0</td>
            <td><?=checkTruth(0, 0, 'xor');?></td>
        </tr>
        <tr>
            <td>0</td>
            <td>1</td>
            <td><?=checkTruth(0, 1, 'xor');?></td>
        </tr>
        <tr>
            <td>1</td>
            <td>0</td>
            <td><?=checkTruth(1, 0, 'xor');?></td>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
            <td><?=checkTruth(1, 1, 'xor');?></td>
        </tr>
    </table>
</body>
</html>
