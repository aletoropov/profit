<?php

/**
 * Составьте функцию, которая на вход будет принимать имя человека, а возвращать его пол,
 * пытаясь угадать по имени (null - если угадать не удалось).
 * Вам придется самостоятельно найти нужные вам строковые функции. Начните с написания тестов для функции.
 */

include __DIR__ . DIRECTORY_SEPARATOR . 'functions.php';
include __DIR__ . DIRECTORY_SEPARATOR . 'tests.php';

echo checkGender('Дима');

?>

<br>

<?php

echo checkGender('Маша');

?>

<br>

<?php

echo checkGender('Александр');

?>

<br>

<?php

echo checkGender('Андрей');

?>

<br>

<?php

echo checkGender('Наталья');
