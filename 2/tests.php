<?php

/**
 * Файл тестов для функций.
 */

assert(-7 === getDiscriminant(2 , 1, 1));
assert(-39 == getDiscriminant(6, -3, 2));

assert('male' === checkGender('Саша'));
assert('male' === checkGender('Дима'));
assert('female' === checkGender('Настя'));
assert('female' === checkGender('Маша'));