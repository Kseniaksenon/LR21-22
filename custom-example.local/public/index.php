<?php
// index.php

// Включаем файлы
include('header.php');  

// Устанавливаем часовой пояс UTC
date_default_timezone_set('UTC');

// Выводим текущую дату
echo "Текущая дата: " . date("m/d/Y") . "<br>";

// Цикл для вывода фамилии и имени
$firstName = "Ксения";
$lastName = "Леута";


// Номер варианта
$variantNumber = 14;

// Количество повторений (номер варианта + 5)
$repeatCount = $variantNumber + 5;

// Выводим Фамилию и Имя нужное количество раз
for ($i = 0; $i < $repeatCount; $i++) {
    echo $firstName . " " . $lastName . "<br>";
}
// Сформируем массив из 7 целых элементов
$array = [12, 35, 7, 42, 5, 18, 9];

// Найдем максимальный элемент в массиве
$maxValue = max($array);
echo "Максимальный элемент массива: " . $maxValue . "<br>";

// Переставим первый и последний элементы местами
$temp = $array[0];
$array[0] = $array[count($array) - 1];
$array[count($array) - 1] = $temp;

// Выведем исходный массив
echo "Исходный массив: [12, 35, 7, 42, 5, 18, 9]<br>";  // Т.к. мы сразу не выводили исходный массив, выводим его вручную

// Выведем измененный массив
echo "Измененный массив: ";
print_r($array);


// 1. Создание строковых переменных
$sI = "Я люблю Беларусь";
$s2 = "Я учусь в Политехническом колледже";

// 2. Определение длины строки S2
$length_s2 = strlen($s2);
echo "Длина строки S2: " . $length_s2 . "\n";

// 3. Выделить 14-й символ в строке S1 (вариант 14)
$p = 14; // 14-й символ
$char = $sI[$p - 1]; // Индексация с 0, поэтому p-1
echo "14-й символ в строке S1: " . $char . "\n";

// 4. Определить ASCII-код этого символа
$ascii_code = ord($char);
echo "ASCII код 14-го символа: " . $ascii_code . "\n";

// 5. Заменить в строке S1 слово "Беларусь" на "Минск"
$sI = str_replace("Беларусь", "Минск", $sI);
echo "Обновленная строка S1: " . $sI . "\n";


// Функция вычисления F по заданным условиям
function calculateF($a, $b, $c, $x) {
    if ($a < 0 && $c != 0) {
        // F = ax² + bx + c
        return $a * pow($x, 2) + $b * $x + $c;
    } elseif ($a > 0 && $c == 0) {
        // F = -a / (x - c) с проверкой деления на ноль
        if ($x - $c == 0) {
            return "Ошибка: деление на ноль!";
        }
        return -$a / ($x - $c);
    } else {
        // F = a(x + c), но проверяем корень из отрицательного числа
        $result = $a * ($x + $c);
        if ($result < 0) {
            return "Ошибка: корень из отрицательного числа!";
        }
        return sqrt($result);
    }
}

// Тестирование функции
echo "Результат при a=-2, b=3, c=1, x=4: " . calculateF(-2, 3, 1, 4) . "<br>"; // Ожидаемое значение F = -2(4)² + 3(4) + 1
echo "Результат при a=2, b=3, c=0, x=5: " . calculateF(2, 3, 0, 5) . "<br>"; // Ожидаемое значение F = -2 / (5 - 0)
echo "Результат при a=1, b=3, c=2, x=4: " . calculateF(1, 3, 2, 4) . "<br>"; // Ожидаемое значение F = sqrt(1(4 + 2))
echo "Результат при a=1, b=3, c=-10, x=4: " . calculateF(1, 3, -10, 4) . "<br>"; // Проверка корня из отрицательного числа
?>
