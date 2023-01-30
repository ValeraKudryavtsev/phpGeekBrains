<?php
while (true) {
    $num = readline("Следующее число: ");
    print_r("");
    if ($num <= 0) {
        echo "Введено некорректное значение\n";
    } elseif ($num % 10 == 0) {
        $res = "большой";
        echo $res . PHP_EOL;
    } elseif ($num % 10 == 1) {
        $res = "большой";
        echo $res . PHP_EOL;
    } elseif ($num % 10 == 2) {
        $res = "указательный";
        echo $res . PHP_EOL;
    } elseif ($num % 10 == 3) {
        $res = "средний";
        echo $res . PHP_EOL;
    } elseif ($num % 10 == 4) {
        $res = "безымянный";
        echo $res . PHP_EOL;
    } elseif ($num % 10 == 5) {
        $res = "мизинец";
        echo $res . PHP_EOL;
    } elseif ($num % 10 == 6) {
        $res = "мизинец";
        echo $res . PHP_EOL;
    } elseif ($num % 10 == 7) {
        $res = "безымянный";
        echo $res . PHP_EOL;
    } elseif ($num % 10 == 8) {
        $res = "средний";
        echo $res . PHP_EOL;
    } elseif ($num % 10 == 9) {
        $res = "указательный";
        echo $res . PHP_EOL;
    } else {
        echo "Error!\n";
    }
}
