<?php

require __DIR__ . DIRECTORY_SEPARATOR . 'functions.php';

$message = filter_input(INPUT_POST, 'message');
addGbMessage($message, 'db.txt');
header('Location: guestbook.php');
exit();