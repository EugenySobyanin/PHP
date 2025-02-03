<!--Массивы-->
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
        echo('Длина массива $arr_1 - '. count($arr_1). "<br>");

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

        // Цикл foreach
        foreach($dict_1 as $key=>$value){
            echo("$key - $value <br>");
        }

        // Задание - создаем массив и удаляем строковые элементы массива
        $arr_2 = [5=>100, "Двести", 300, 400];
        echo("Массив \$arr_2: ");
        print_r($arr_2);
        echo("<br>");
        foreach($arr_2 as $key=>$value){
            print("\$arr_2[$key] - $value");

            if (gettype($value) == "string"){
                print(" - удаляем<br>");
                unset($arr_2[$key]);
            }
            else{
                print(" - оставляем<br>");
            }
        }
        print_r($arr_2);
        echo("<br>");

        // Изменение значение массива в цикле и передача по ссылке
        foreach($arr_2 as &$value){
            $value += 10;
        }
        print_r($arr_2);
        echo("<br>");

        // Многомерные массивы. Создание и перебор
        $arr_3 = [
            [1, 11, 22, 33, 45, ],
            ["Кошка", "Собака", "Человек"],
            [true, true, "лох", 4.15, 22]
        ];
        foreach($arr_3 as &$arr){
            foreach($arr as &$value){
                echo("$value ");
                if ($value == 22){
                    $value = "SNOOP DOGG";
                }
            }
            echo("<br>");
        }
        print_r($arr_3);
        echo("<br>");

        // Сложение массивов
        // При сложении важны ключи, при одинавых ключах значение берется из первого операнда
        $arr_4 = ["GET", "POST", "PUT"];
        $arr_5 = ["Alik", "Timote", "лох", "DEL"];
        $arr_6 = [4=>"Alik", 5=>"Timote", 6=>"лох", 3=>"DEL"];
        $arr_res = $arr_4 + $arr_5;
        $arr_res_2 = $arr_4 + $arr_6;
        print_r($arr_res);
        echo "<br>";
        print_r($arr_res_2);
        echo "<br>";

        // Сравнение массивов
        // При использовании операторов === и ==! для ключений применяется автоматическое приведение типов, а для значений нет
        $arr_7 = ["EN", "5"=>"RU", 6=>"лох", 123];
        $arr_8 = ["EN", 5=>"RU", "лох", 123];
        if ($arr_7 === $arr_8)
            echo "Масссивы равны!<br>";
        else
            echo "Массивы разные<br>";

        // Функция list()
        // Присваивает переменным значения массива
        $arr_9 = [1, 2, 3, 4, 5, 6,];
        list($a, ,$b, $c) = $arr_9;
        print("\$a - $a<br>");
        print("\$b - $b<br>");
        print("\$c - $c<br>");

        // Функция array_keys()
        // Возвращает массив с ключами переданного массива
        $arr_10 = array_keys($arr_7);
        print_r($arr_10);
        echo "<br>";

        // Функция array_combine()
        // Принимет 2 массива. Один определяет ключи(его значения становятся ключами), второй значения
        $arr_11 = array_combine([5, 7, 9], ["пять", "семь", "девять"]);
        print_r($arr_11);
        echo "<br>";

        // Функция range()
        // Создает массив со значениями в диапазоне
        print("<br>Функция range()<br>");
        $arr_12 = range(5, 10);
        print_r($arr_12);
        echo "<br>";

        // Функция array_pop()
        // Удаляет последний элемент из массива
        array_pop($arr_12);
        print_r($arr_12);
        echo "<br>";

        // Функция array_push()
        // Добавляет элемент(или элементы) в конец массива
        array_push($arr_12, "Добавили", "Еще добавили");
        print_r($arr_12);
        echo "<br>";

        // Функция array_slice()
        // Срез массива
        // 1ый аргумент - массив, 2ой арг - начало среза (может быть отрицательный), 3ий арг - кол.во эл.тов в срезе
        $array_slice = array_slice($arr_12, 2, 3);
        print_r($array_slice);
        echo "<br>";
        
    ?>
    
</body>
</html>