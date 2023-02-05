<?php

//список на отчисление
$getOut = [];
$maxMark = 0;
$bestGroup = '';

$students = [
    'ИКБО-10-20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 3,
        'Смирнов Алексей' => 4,
        'Петрова Карина' => 2
    ],
    'ИКБО-16-20' => [
        'Антонов Антон' => 4,
        'Ходос Максим' => 2,
        'Анучин Геннадий' => 5,
        'Петров Александр' => 2
    ]
];

foreach ($students as $i => $group) {
    if ($maxMark < array_sum($group) / count($group)) {
        $maxMark = array_sum($group) / count($group);
        $bestGroup = $i;
    }
    foreach ($group as $student => $mark) {
        if ($mark < 3) {
            $getOut[] = $i . " " . $student;
        }
    }
}

echo "Лучшая группа: " . $bestGroup . "\n\nСписок на отчисление: \n";
print_r($getOut);
