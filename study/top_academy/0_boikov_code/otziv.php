<?php
$reviews = [];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $message = $_POST['message'];

    $reviews[] = ['name' => $name, 'message' => $message];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Форма с отзывом</title>
</head>
<body>
    <h1>Форма с отзывом</h1>
    <form method="post" action="">
        <input type="text" name="name" placeholder="Ваше имя" required><br>
        <textarea name="message" placeholder="Ваш отзыв" required></textarea><br>
        <input type="submit" name="submit" value="Отправить">
    </form>
    <?php foreach($reviews as $review): ?>
        <div>
            <h3>Автор: <?php echo $review['name']; ?></h3>
            <p><?php echo $review['message']; ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>