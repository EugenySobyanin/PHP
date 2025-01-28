<?php
if(isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    
    switch($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Ошибка: деление на ноль!";
            }
            break;
        default:
            $result = "Ошибка: некорректный оператор!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Калькулятор на PHP</title>
</head>
<body>
    <h2>Калькулятор на PHP</h2>
    <form method="post" action="">
        <input type="number" name="num1" required>
        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" required>
        <input type="submit" name="calculate" value="Посчитать">
    </form>
    <?php if(isset($result)) { ?>
        <h4>Результат: <?php echo $result; ?></h4>
    <?php } ?>
</body>
</html>