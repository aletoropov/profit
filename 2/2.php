<?php

/**
 * Составьте функцию вычисления дискриминанта квадратного уравнения.
 * Покройте ее тестами. Используя эту функцию, напишите программу,
 * которая решает квадратное уравнение. Оформите красивый вывод решения.
 */

include __DIR__ . DIRECTORY_SEPARATOR . 'functions.php';
include __DIR__ . DIRECTORY_SEPARATOR . 'tests.php';

$a = -6;
$b = 4;
$c = 2;

$discriminant = getDiscriminant($a, $b, $c);

echo 'Дискриминант = ' . $discriminant . '<br>';

if ($discriminant > 0) {
    echo 'x<sub>1</sub> = ' . getFirstSquare($b, $discriminant, $a) . '<br>';
    echo 'x<sub>2</sub> = ' . getSecondSquare($b, $discriminant, $a) . '<br>';
} elseif (0 === $discriminant) {
    echo 'x = ' . -$b / (2 * $a) . '<br>';
} elseif ($discriminant < 0) {
    echo 'Вещественных корней нет';
}
