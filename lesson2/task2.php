<?php
$name = readline("Как вас зовут? ");

$count = (int)readline("Сколько у вас задач? ");
$arrTasks = array();
$arrTime = array();
$sumTime = 0;

for ($i = 0; $i < $count; $i++) {
    $arrTasks[$i] = readline("Какая задача перед вами сегодня? ");
    $arrTime[$i] = readline("Сколько времени это займет? ");
}

echo "$name, перед вами сегодня следующие задачи:" . PHP_EOL;
for ($i = 0; $i < $count; $i++) {
    echo "- " . $arrTasks[$i] . "($arrTime[$i]ч)" . PHP_EOL;
    $sumTime += $arrTime[$i];
}

echo "Примерное время выполнения плана: $sumTime" . "ч" . PHP_EOL;
