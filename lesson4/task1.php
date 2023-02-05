<?php

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$check = function ($item) {
    return ($item % 2 == 0) ? "четное" : "нечетное";
};

$res = array_map($check, $arr);

print_r($res);
