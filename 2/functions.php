<?php

/**
 * @param bool|int $a
 * @param bool|int $b
 * @param string $operator
 * @return ?int
 */
function checkTruth(bool|int $a, bool|int $b, string $operator) : ?int
{
    switch ($operator) {
        case 'xor':
            if ($a xor $b) {
                return 1;
            } else {
                return 0;
            }
        case '&&':
            if ($a and $b) {
                return 1;
            } else {
                return 0;
            }
        case '||':
            if ($a or $b) {
                return 1;
            } else {
                return 0;
            }
        default:
            return null;
    }
}

/**
 * Функция вычисления дискриминанта
 *
 * @param int $a
 * @param int $b
 * @param int $c
 * @return float|int
 */
function getDiscriminant(int $a, int $b, int $c): float|int
{
    return ($b*$b) - (4*$a*$c);
}

/**
 * Функция вычисления первого корня.
 *
 * @param int $b
 * @param int $d
 * @param int $a
 * @return float|int
 */
function getFirstSquare(int $b, int $d, int $a) : float|int
{
    return (-$b + sqrt($d)) / (2 * $a);
}

/**
 * Функция вычисления второго корня.
 * @param int $b
 * @param int $d
 * @param int $a
 * @return float|int
 */
function getSecondSquare(int $b, int $d, int $a) : float|int
{
    return (-$b - sqrt($d)) / (2 * $a);
}