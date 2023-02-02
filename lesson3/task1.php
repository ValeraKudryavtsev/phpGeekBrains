<?php
$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
$arr2 = [-1, -2, -3, -4, -5, -6, -7, -8, -9, -10, -11];

$result = [];

if (count($arr1) == count($arr2)) {
    for ($i = 0; $i < count($arr1); $i++) {
        $result[$i] = $arr1[$i] * $arr2[$i];
    }
    print_r($result);
} else {
    echo "Error...";
}
