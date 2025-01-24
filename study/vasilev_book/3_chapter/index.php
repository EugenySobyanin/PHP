<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str_var = "Это человек ничего не понимает...понимает";
        // Альтернативный синтаксис if else
        if(strlen($str_var) >= 30):
            $str_var.= " - огромная строка.";
        else:
            $str_var.= " - очень маленькая строка.";
        endif;
        echo($str_var. "<br>");

        // Посчитаем сумму диапазона от 1 до 100
        $n = 100;
        $result = 0;
        while($n > 0){
            $result += $n--;
        }
        echo("Сумма чисел от 1 до 100 = $result.<br>");

        // Посчитаем сумму первых нечетных 50 натуральных чисел и проверим, что он ровна 50 ** 2
        $n = 50;
        for($sum = 0, $k = 1; $k <=  $n; $k++){
            $sum += $k * 2 - 1;
        }
        echo("Сумма 1 + 3 + 5 ... + ". ($n * 2 - 1). " = ". $sum. "<br>");
        print("$n в квадрате = ". ($n ** 2). "<br>");

        // Вывод n количества чисел Фибоначи
        $n = 25;
        $a = 0;
        $b = 1;
        echo("$a $b");
        for($k = 3; $k <= $n; $k++){
            $b = $a + $b;
            $a = $b - $a;
            echo(" ". $b);
        }
        echo("<br>");

        // Инструкция goto на примере простого цикла
        $n = 15;
        $k = 0;
        start:
        echo((++$k). " ");
        if ($k < $n){
            goto start;
        }
        echo("<br>");

        // Оператор выбор match
        // Посмотрим 2 разные реализации
        define("HOURS", 24);
        // Вариант 1
        echo("<br> Вариант 1.<br>");
        for($i = 1; $i <= HOURS; $i++){
            $res = match($i){
                1, 2, 3, 4, 5, 23, 24 => "Ночь",
                6, 7, 8, 9, 10, 11 => "Утро",
                12, 13, 14, 15, 16, 17 => "День",
                default => "Вечор"
            };
            echo("[$i] - $res.<br>");
        }

        // Вариант 2
        echo("<br> Вариант 2.<br>");
        for($i = 1; $i <= HOURS; $i++){
            $res = match(true){
                ($i > 0 and $i < 6 or $i > 22) => "Ночь",
                ($i < 12) => "Утро",
                ($i < 18) => "День",
                default => "Вечор"
            };
            echo("[$i] - $res.<br>");
        }
        
    ?>
</body>
</html>