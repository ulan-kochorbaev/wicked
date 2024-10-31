<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация - Wicked</title>
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

.input-field {
    width: 90%; /* Полная ширина */
    padding: 10px; /* Внутренние отступы */
    margin: 10px 0; /* Отступы сверху и снизу */
    border: 2px solid #4CAF50; /* Зеленая рамка */
    border-radius: 5px; /* Закругленные углы для полей ввода */
    font-size: 16px; /* Размер шрифта */
}

.submit-button {
    width: 100%; /* Полная ширина */
    padding: 10px; /* Внутренние отступы */
    background-color: #4CAF50; /* Зеленый фон для кнопки */
    color: white; /* Белый цвет текста на кнопке */
    border: none; /* Без рамки */
    border-radius: 5px; /* Закругленные углы для кнопки */
    font-size: 16px; /* Размер шрифта */
    cursor: pointer; /* Курсор при наведении */
    transition: background-color 0.3s; /* Плавное изменение цвета */
}

.submit-button:hover {
    background-color: #45a049; /* Более темный зеленый при наведении */
}

.link {
    color: #4CAF50; /* Зеленый цвет для ссылок */
    text-decoration: none; /* Убираем подчеркивание */
}

.link:hover {
    text-decoration: underline; /* Подчеркивание при наведении */
}

    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Авторизация</h1>
        <form action="test_user.php" method="POST">
            <input type="text" name="login" placeholder="Login пользователя" required class="input-field">
            <input type="password" name="pass" placeholder="Пароль" required class="input-field">
            <input type="submit" value="Войти" class="submit-button">
        </form>
        <p>Нет аккаунта? <a href="registr.php" class="link">Регистрация</a></p>
    </div>
</body>
</html>
