<?php

var_dump(3 / 1); // int(3)

var_dump(1 / 3); // float(0.3333333333333333)

//Warning: A non-numeric value encountered
var_dump('20cats' + 40); // int(60) - PHP выбирал из строки числа пока не встретил первое не численное "c"

var_dump(18 % 4); // int(2) - Получили целочисленный остаток от деления 18 на 4