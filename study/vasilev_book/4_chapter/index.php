<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Объявление массива
        $arr_1 = array(5, 10, 15, 20, "Двадцать пять");
        $arr_1[5] = "30";
        $arr_1[10] = "Джон Сина";
        print_r($arr_1);
        echo("<br>");
        echo('Длина массива $arr_1 - '. sizeof($arr_1). "<br>");

        // Создание ассоциативного массива (словаря)
        $dict_1 = ["RED" => "Красный", "BLUE" => "Голубой", "GREEN" => "Зеленый"];
        echo($dict_1["RED"]. " ". $dict_1["BLUE"]. "<br>");
        $dict_1[] = "Новый элемент массива.";
        $dict_1[] = "Еще один новый эл.т массива.";
        print_r($dict_1);
        echo("<br>");

        // Удаление элемента массива
        unset($dict_1["BLUE"], $dict_1[0]);
        print_r($dict_1);
        echo("<br>");


    ?>
    
</body>
</html>