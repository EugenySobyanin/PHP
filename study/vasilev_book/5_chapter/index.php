<!--Функции-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter_5</title>
</head>
<body>
    <?php 
        # declare(strict_types=1); // для режима жесткой типизации
        // Простая функция для вывода массива
        function print_arr($arr) {
            foreach($arr as $key=>$value){
                echo "$key - $value<br>";
            }
        }

        $arr_1 = [
            "Чай"=>"Tea",
            "Кофе"=>"Cofee",
            2=>"Juice",
            "CocaCola",
            "Fanta"
        ];
        print_arr($arr_1);

        
        // Функция, которя ожидает параметры определенных типов
        // И возвращает определенное значение
        function type_func(string $name, int | float $salary): string {
            return "$name зарабатывает - $salary <br>";
        }
        print(type_func("Макар", 199));
        print(type_func("Олег", 199.55)); // будет предупреждение - передали неверный тип данных
        print(type_func(1234, 500));


        // Передача аргументов по ссылке
        $a = 100;
        $b = 500;

        function swap(&$a, &$b){
            echo "Вызов swap<br>";
            $x = $a;
            $a = $b;
            $b = $x;
        }

        echo("\$a - $a, \$b - $b<br>");
        swap($a, $b);
        echo("\$a - $a, \$b - $b<br>");


        



    ?>
    
</body>
</html>