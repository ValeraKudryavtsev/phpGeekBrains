<?php

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];

function findKey(string $key, array $arr): bool
{
    foreach ($arr as $item) {
        //проверим, является ли $item массивом
        if (is_array($item)) {
            if (findKey($key, $item)) {
                return true;
            }
        } else {
            if ($key === $item) {
                return true;
            }
        }
    }
    return false;
}

$key = "Ключ";
var_dump(findKey($key, $box));
