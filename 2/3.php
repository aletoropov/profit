<?php
//Оператор include возвращает значение FALSE в случае возникновения ошибки и выдаёт предупреждение E_WARNING
var_dump(include(__DIR__ . DIRECTORY_SEPARATOR . 'nothing.php')); //bool(false)

//Успешное включения возвращают значение 1
var_dump(include(__DIR__ . DIRECTORY_SEPARATOR . 'functions.php')); //int(1)

//Можно получить значения из включаемых файлов если во включаемом файле использовать return
var_dump(include(__DIR__ . DIRECTORY_SEPARATOR . 'hello.php')); // string(13) "Hello, World!"

?>

<br>

<?php

echo include(__DIR__ . DIRECTORY_SEPARATOR . 'hello.php'); //выведет "Hello, World!"

?>

<br>

<?php

echo include __DIR__ . DIRECTORY_SEPARATOR . 'hello2.php'; //выведет 1
