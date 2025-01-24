<?php

// Задача 1
$name = "Юджин";
echo "Меня зовут $name! <br>";

// Задача 2
$a = 2342424;
$b = -34234;
echo "$a + $b =". $a + $b. "<br>";

// Задача 3
$num = 45;
if ($num % 2 == 0)
    echo "$num - четное число. <br>";
else
    echo "$num - нечетное число. <br>";

// Альтернативнй синтаксис
$num2 = 2349 - $num;
if ($num2 % 2 == 0):
    echo "$num2 - четное число. <br>";
else:
    echo "$num2 - нечетное число. <br>";
endif;

// match
$num3 = 100 + 1;
$operation = match($num3){
    100 => "соточка",
    default => "не соточка <br>",
};
echo $operation;

// Задача 4
for ($i = 0; $i < 10; $i++):
    echo "$i <br>";
endfor;

// Задача 5
$arr1 = ["Математика", "Физика", "Химия", "Биология"];
foreach ($arr1 as $key => $value){
    echo "$key - $value <br>";
}

// Ассоциативные массивы
$asoc_arr = array("one" => "один", "two" => "два", "three" => "три", "four" => "один");
foreach ($asoc_arr as $key => $value){
    echo "$key - $value <br>";
}

$arr2 = [1, 2, "Три", "Четыре"];
echo "<hr>";
foreach ($arr2 as $el){
    echo "$el <br>";
}
?>