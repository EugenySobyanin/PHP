<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter_2</title>
</head>
<body>
    <?php
        $number = rand(1, 100);
        // Обрати внимание на кавычки
        print('Переменная $number: ');
        print("значение $number.<br>");

        // Константы
        define("WEIGHT", 125);
        print WEIGHT. "<br>";
        print defined("WEIGHT"). "<br>";
      
        // Работа с типами данных
        print gettype(WEIGHT). "<br>";
        echo gettype(WEIGHT), " конец строки.<br>";
        echo is_numeric($number), "проверка is_numeric()<br>";
        echo is_numeric("1245"), "проверка is_numeric()<br>";
        $str_number = "12354";
        echo (int)($str_number), "тип - ", gettype((int)($str_number)), "<br>";
        echo (bool)($str_number), "тип - ", gettype((bool)($str_number)), "<br>";
      
        $null_var = TRUE;
        echo isset($null_var), "<br>";

        // Операции с текстом
        $str_var = "Это человек ничего не понимает...понимает";
        $str_var2 = "Это Человек Ничего не Понимает..";
        echo("Полный\tчеловек.<br>"); // не работает на веб странице
        echo("Результат сложения чисовых строк '1' и '2' = ". "1" + "2". "<br>");
        echo("Длина строки \"$str_var\" - ". strlen($str_var). " символов.<br>");

        // Сравенение строк почему-то работает некорректно
        echo("Сравнение строк с учетом регистра: ". strcmp($str_var, $str_var2). "<br>");
        echo("Сравнение строк без учета регистра: ". strcasecmp($str_var, $str_var2). "<br>");

        // Срезы и замена подстроки
        echo(substr($str_var, 10, 20). "<br>");
        echo(str_replace("понимает", "может", $str_var). "<br>");
    ?>
    
</body>
</html>