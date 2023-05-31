<?php

var_dump(3 / 1); // int(3)

var_dump(1 / 3); // float(0.3333333333333333)

//Warning: A non-numeric value encountered
var_dump('20cats' + 40); // int(60) - PHP выбирал из строки числа пока не встретил первое не численное "c"

var_dump(18 % 4); // int(2) - Получили целочисленный остаток от деления 18 на 4

// опыты
var_dump('1017' - '0707');
var_dump('1017' - 0707);
var_dump('707' == '0707'); // true
var_dump('707' == 0707); // false
var_dump(255 === 0b11111111);