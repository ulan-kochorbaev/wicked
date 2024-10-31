<!DOCTYPE html>
<html>
<head>
  <title>Магазин кроссовок</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    header {
      background-color: #fff;
      padding: 20px;
      text-align: center;
    }

    header h1 {
      margin: 0;
    }

    nav {
      background-color: #333;
      color: #fff;
      padding: 10px 0;
      text-align: center;
    }

    nav ul {
      list-style: none;
      margin: 0;
      padding: 10px;  
    }

    nav li {
      display: inline-block;
      margin: 0 10px;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      padding: 5px 10px;
    }

    nav a:hover {
      background-color: #555;
    }

    main {
      padding: 20px;
    }

    .section {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    .section h2 {
      margin-top: 0;
    }

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      padding: 20px;
    }

    .product-card {
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 20px;
      width: 250px; /* Измените ширину по своему желанию */
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .product-card img {
      max-width: 100%;
      height: auto;
      margin-bottom: 10px;
    }

    .product-card h3 {
      margin-bottom: 5px;
    }

    .product-card p {
      margin-bottom: 10px;
    }

    .buy-button {
      background-color: #4CAF50; /* Зеленый */
      border: none;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }

    .glav {
    font-size: 36px; /* Размер шрифта заголовка */
    color: black; /* Цвет текста */
    margin: 0; /* Убираем отступы */
}

.glav a {
    text-decoration: none; /* Убираем подчеркивание у ссылки */
    color: black; /* Цвет ссылки */
    transition: transform 0.3s ease; /* Плавный переход */
}

.glav a:hover {
    transform: scale(1.2); /* Увеличение ссылки при наведении */
}

.info > img{
    float: left;
    margin-top: -210px;
    margin-right: 40px;
}

.info > h1{
    font-size: 100px;
    margin-top: 100px;
}

.pic {
    width: 800px;
    padding-top: 100px;
}
  </style>
</head>
<body>

  <header>
    <h1 class="glav"><a href="">Wicked</a></h1>
  </header>

  <nav>
    <?php 
    session_start();
    if  (empty($_SESSION['login']) or empty($_SESSION['id'])) {
    ?>
    <a href="index.php">Зарегистрируйтесь</a>
    <?php 
    }
    else {
    ?>
    <ul>
      <li><a href="cotalog.php">Каталог</a></li>
      <li><a href="remarks.php">Отзывы</a></li>
      <li><a href="exit.php">Выйти</a></li>
      <li><a href="cart.php">Корзина</a></li>
    </ul>
  </nav>
  <div class="info">
    <img src="picglav1.png" alt="" class="pic">
    <h1>Магазин современной красивой обуви</h1>
  </div>
<?php
    }
    ?>
</body>
</html>