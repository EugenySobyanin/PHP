<?php
// Получение диапазона и количества элементов массива через POST-запрос
$min = $_POST['min'];
$max = $_POST['max'];
$count = $_POST['count'];

// Создание пустого массива
$array = array();

// Заполнение массива рандомными значениями
for ($i = 0; $i < $count; $i++) {
    $array[] = rand($min, $max);
}

// Вывод массива
print_r($array);
?>
<form action="your_php_script.php" method="post">
    <label for="min">Минимальное значение:</label>
    <input type="number" name="min" id="min">
    <br>
    <label for="max">Максимальное значение:</label>
    <input type="number" name="max" id="max">
    <br>
    <label for="count">Количество элементов:</label>
    <input type="number" name="count" id="count">
    <br>
    <input type="submit" value="Создать массив">
</form>