<?php
while (true) {
    echo "В каком году распался СССР? \n";
    echo "1) 1990 \n2) 1991 \n3) 1992 \n";
    echo "В ответе указать число! \n";
    $answer = readline("Ваш ответ: ");
    if ($answer == 2) {
        echo "Верно! \n";
        break;
    } elseif ($answer == 1 || $answer == 3) {
        echo "Неверно! \n";
        break;
    } else {
        echo "Неверный формат ответа!\n";
        continue;
    }
}
