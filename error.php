<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="shortcut icon" href="pictures\md.png" type="image/png">
    <style>
        /* Стили для страницы ошибки */
        body {
            font-family: Arial, sans-serif;
            background-color: #fff; /* белый цвет фона */
            color: #000; /* черный цвет текста */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
        }

        h2 {
            text-align: center;
            font-size: 32px; /* увеличиваем размер шрифта заголовка */
            margin-bottom: 20px; /* добавляем отступ снизу для заголовка */
        }

        .error-message {
            color: red;
            font-size: 24px; /* увеличиваем размер шрифта сообщения об ошибке */
            margin-bottom: 20px; /* добавляем отступ снизу для сообщения об ошибке */
        }

        .error-link {
            font-size: 24px; /* увеличиваем размер шрифта ссылки */
            color: black; /* черный цвет текста ссылки */
            background-color: #fff; /* белый цвет фона кнопки */
            border: 2px solid black; /* черная граница кнопки */
            padding: 10px 20px; /* отступы внутри кнопки */
            text-decoration: none; /* убираем подчеркивание у ссылки */
            transition: background-color 0.3s, color 0.3s; /* плавное изменение цвета при наведении */
        }

        .error-link:hover {
            color: white; /* изменяем цвет текста при наведении */
            background-color: black; /* изменяем цвет фона при наведении */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Ошибка</h2>
        <p class="error-message">Неправильный логин или пароль</p>
        <a href="login.html" class="error-link">Вернуться</a>
    </div>
</body>
</html>
