<?php
$errors = [];

// Проверка, была ли отправлена форма
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получение данных из формы
    $name = $_POST['name'] ?? '';
    $surname = $_POST['surname'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirm_password'] ?? '';

    // Валидация полей
    if (empty($name)) {
        $errors['name'] = 'Пожалуйста, введите ваше имя.';
    }
    if (empty($surname)) {
        $errors['surname'] = 'Пожалуйста, введите вашу фамилию.';
    }
    if (empty($phone)) {
        $errors['phone'] = 'Пожалуйста, введите ваш телефон.';
    }
    if (empty($login)) {
        $errors['login'] = 'Пожалуйста, введите ваш логин.';
    }
    if (empty($password)) {
        $errors['password'] = 'Пожалуйста, введите ваш пароль.';
    }
    if (empty($confirmPassword)) {
        $errors['confirm_password'] = 'Пожалуйста, повторите ваш пароль.';
    } elseif ($password !== $confirmPassword) {
        $errors['confirm_password'] = 'Пароли не совпадают.';
    }

    // Если нет ошибок, пользователь авторизован
    if (empty($errors)) {
        // Действия при успешной авторизации
        // Например, сохранение данных в базе данных или установка сессии
        $message = 'Вы успешно авторизовались.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Форма авторизации</title>
    <style>
        .error {
            color: red;
        }
        .success {
            color: green;
        }
    </style>
</head>
<body>
    <?php if (isset($message)) : ?>
        <p class="success"><?php echo $message; ?></p>
    <?php endif; ?>

    <form method="post" action="">
        <div>
            <label for="name">Имя:</label>
            <input type="text" name="name" id="name" placeholder="Введите ваше имя" value="<?php echo $name ?? ''; ?>">
            <?php if (isset($errors['name'])) : ?>
                <p class="error"><?php echo $errors['name']; ?></p>
            <?php endif; ?>
        </div>
        <div>
            <label for="surname">Фамилия:</label>
            <input type="text" name="surname" id="surname" placeholder="Введите вашу фамилию" value="<?php echo $surname ?? ''; ?>">
            <?php if (isset($errors['surname'])) : ?>
                <p class="error"><?php echo $errors['surname']; ?></p>
            <?php endif; ?>
        </div>
        <div>
            <label for="phone">Телефон:</label>
            <input type="text" name="phone" id="phone" placeholder="Введите ваш телефон" value="<?php echo $phone ?? ''; ?>">
            <?php if (isset($errors['phone'])) : ?>
                <p class="error"><?php echo $errors['phone']; ?></p>
            <?php endif; ?>
        </div>
        <div>
            <label for="login">Логин:</label>
            <input type="text" name="login" id="login" placeholder="Введите ваш логин" value="<?php echo $login ?? ''; ?>">
            <?php if (isset($errors['login'])) : ?>
                <p class="error"><?php echo $errors['login']; ?></p>
            <?php endif; ?>
        </div>
        <div>
            <label for="password">Пароль:</label>
            <input type="password" name="password" id="password" placeholder="Введите ваш пароль">
            <?php if (isset($errors['password'])) : ?>
                <p class="error"><?php echo $errors['password']; ?></p>
            <?php endif; ?>
        </div>
        <div>
            <label for="confirm_password">Повторите пароль:</label>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Повторите ваш пароль">
            <?php if (isset($errors['confirm_password'])) : ?>
                <p class="error"><?php echo $errors['confirm_password']; ?></p>
            <?php endif; ?>
        </div>
        <button type="submit">Войти</button>
    </form>
</body>
</html>