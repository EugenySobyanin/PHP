<?php
session_start();

if (isset($_POST['submit'])) {
    $number = $_POST['number'];

    // Создаем массив размером, равным введенному числу
    $array = range(1, $number);

    // Сохраняем массив в сессии
    $_SESSION['array'] = $array;

    // Перенаправляем пользователя на другую страницу
    header("Location: result.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ввод числа</title>
</head>
<body>
    <h1>Ввод числа</h1>
    <form method="post" action="">
        <input type="number" name="number" required>
        <input type="submit" name="submit" value="Создать массив">
    </form>
</body>
</html>