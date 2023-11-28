<?php

/**
 * Напишите программу-калькулятор
 * Форма для ввода двух чисел, выбора знака операции и кнопка "равно"
 * Данные пусть передаются методом GET из формы (да, можно и так!) на скрипт,
 * который их примет и выведет выражение и его результат
 * Попробуйте улучшить программу. Пусть данные отправляются на ту же страницу на PHP,
 * введенные числа останутся в input-ах, а результат появится после кнопки "равно"
 */


?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Калькулятор</title>
</head>
<body>

<?php

if (!empty($_GET)) {
    $operand1 = filter_input(INPUT_GET, 'operand1');
    $operand2 = filter_input(INPUT_GET, 'operand2');
    $action = filter_input(INPUT_GET, 'action');

    switch ($action) {
        case '+':
            echo $operand1 . ' + ' . $operand2 . ' = ' . ($operand1 + $operand2);
            break;
        case '-':
            echo $operand1 . ' - ' . $operand2 . ' = ' . ($operand1 - $operand2);
            break;
        case '*':
            echo $operand2 . ' * ' . $operand2 . ' = ' . ($operand1 * $operand2);
            break;
        case '/':
            echo $operand2 . ' / ' . $operand2 . ' = ' . ($operand1 / $operand2);
            break;
        default:
            echo 'Не удалось найти ответ';
    }
}

?>
    <form name="calculator" method="get">
        <label>
            <input type="number" name="operand1">
        </label>
        <label>
            <select name="action">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </label>
        <label>
            <input type="number" name="operand2">
        </label>
        <input type="submit" value="=">
    </form>
</body>
</html>
