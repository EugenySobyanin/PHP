<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter_5</title>
</head>
<body>
    <?php
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

    ?>
    
</body>
</html>