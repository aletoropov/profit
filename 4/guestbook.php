<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Гостевая книга</title>
</head>
<body>

<?php

require __DIR__ . DIRECTORY_SEPARATOR . 'functions.php';

$gbMessage = getGbMessage('db.txt');

?>

<form method="post" action="add.php">
    <div>
        <textarea name="message"></textarea>
    </div>
    <div>
        <input type="submit" value="Оставить сообщение">
    </div>
</form>

</body>
</html>