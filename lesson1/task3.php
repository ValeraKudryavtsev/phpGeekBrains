<?php
$name = readline("Как вас зовут? ");

$task1 = readline("Какая задача перед вами сегодня? ");
$time1 = readline("Сколько времени это займет? ");
$task2 = readline("Какая еще задача перед вами сегодня? ");
$time2 = readline("Сколько времени это займет? ");
$task3 = readline("Ну и финальная задача? ");
$time3 = readline("Сколько времени это займет? ");

echo "$name, перед вами сегодня следующие задачи:" . PHP_EOL;
echo "-" . $task1 . "($time1)" . PHP_EOL;
echo "-" . $task2 . "($time2)" . PHP_EOL;
echo "-" . $task3 . "($time3)" . PHP_EOL;
