<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <iink rel="stylesheet" type="text/css" href="styles.css">
    <title>Simple_CMS</title>
    
</head>
<body style="heigth: 100vh;">
    <?php
      echo '<link rel="stylesheet" type="text/css" href="styles.css">';
    ?>
  <header>
  </header>
  <div class="main-window border">
    <nav class="border">
      <div class="nav-el">
        <a href="">Список постов</a>
      <div>
      <div class="nav-el">
        <a href="">Создать статью</a>
      <div>
    </nav>
    <main class="">
      <div class="container border">
        <?php
          // Подключение к БД
          try {
              $conn = new PDO("mysql:host=localhost", "root", "probel1999");
              echo "Database connection established";
          }
          catch (PDOException $e) {
              echo "Connection faild: ". $e->getMessage();
          }
        ?>
      </div>


    </main>
  </div>    
</body>
</html>