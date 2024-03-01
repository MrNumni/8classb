<?php
session_start();

// Проверяем, авторизован ли пользователь
if (!isset($_SESSION['username'])) {
    header("Location: login.html"); // Перенаправляем на страницу входа
    exit();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обучающиеся</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="pictures\md.png" type="image/png">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=dad69d4e-73e8-4c08-8209-503d5eb71e67&lang=ru_RU" type="text/javascript"></script>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <img src="pictures\c95e44778afa02fd062722881a92e215.png" alt="Логотип школы">
                <h1 font-family="Comic Sans MS"><?php echo $_SESSION['username']; ?></h1>
            </div>
            <nav>
                <ul>
                    <a href="main.php" class="animated-button-menu">Главная</a>
                    <a href="https://11sch.edusite.ru/" class="animated-button-menu">Сайт школы</a>
                    <a href="news.php" class="animated-button-menu">Новости</a>
                    <a href="students.php" class="animated-button-menu">Обучающиеся</a>
                </ul>
            </nav>
        </header>
        <main>
            <section id="students">
                <h2>Обучающиеся 8Б класса</h2>
                <div class="main-content">
                <h3>В разработке...</h3>
                </div>
            </section>
        </main>
        <footer>
            <p>&copy; 2024 Школьный класс 8Б. Все права защищены.</p>
        </footer>
    </div>
</body>
</html>
