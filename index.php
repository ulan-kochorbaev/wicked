<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wicked</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0; /* Светло-серый фон */
    color: #333; /* Темный текст для контраста */
    margin: 0;
    padding: 0;
}

.container {
    max-width: 400px; /* Максимальная ширина */
    margin: 100px auto; /* Центрирование по горизонтали и отступ сверху */
    text-align: center; /* Выравнивание текста по центру */
    background-color: white; /* Белый фон для контейнера */
    padding: 20px; /* Внутренние отступы */
    border-radius: 8px; /* Закругленные углы */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Тень для контейнера */
}

.title {
    font-size: 36px; /* Размер заголовка */
    margin-bottom: 20px; /* Отступ снизу */
}

.links {
    margin-top: 20px; /* Отступ сверху для ссылок */
}

.link {
    display: inline-block; /* Установка в одну линию */
    margin: 10px 20px; /* Отступы вокруг ссылок */
    padding: 10px 20px; /* Внутренние отступы */
    background-color: #4CAF50; /* Зеленый фон для ссылок */
    color: white; /* Белый цвет текста */
    text-decoration: none; /* Убираем подчеркивание */
    border-radius: 5px; /* Закругленные углы */
    transition: background-color 0.3s; /* Плавное изменение цвета */
}

.link:hover {
    background-color: #45a049; /* Более темный зеленый при наведении */
}

    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Wicked</h1>
        <div class="links">
            <a href="registr.php" class="link">Регистрация</a>
            <a href="avtor.php" class="link">Авторизация</a>
        </div>
    </div>
</body>
</html>
