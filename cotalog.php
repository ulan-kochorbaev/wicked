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

/* Общие стили для страницы */
body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

h1 {
    text-align: center;
    margin-top: 20px;
    color: #333;
}

.products {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 20px;
}

/* Стиль для карточки товара */
.product {
    width: 300px;
    margin: 10px;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: white;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.product img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    margin-bottom: 10px;
    border-radius: 5px;
}

.product h2 {
    margin-top: 0;
    color: #333;
}

.product p {
    margin-bottom: 10px;
    color: #555;
}

.product a {
    display: inline-block;
    padding: 8px 15px;
    background-color: #4CAF50; /* Зеленый цвет кнопки */
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.product a:hover {
    background-color: #45a049; /* Более темный зеленый при наведении */
}
  </style>
</head>
<body>
  <?php
    session_start();
  ?>
  <header>
    <h1 class="glav"><a href="glav.php">Wicked</a></h1>
  </header>

  <nav>
    <div class="reg">
    <?php 
    if  (empty($_SESSION['login']) or empty($_SESSION['id'])) {
    ?>
    <a href="index.php">Зарегистрируйтесь</a>
    <?php 
    }
    else {
    ?>
    </div>
    <ul>
      <li><a href="cotalog.php">Каталог</a></li>
      <li><a href="remarks.php">Отзывы</a></li>
      <li><a href="exit.php">Выйти</a></li>
      <li><a href="cart.php">Корзина</a></li>
    </ul>
  </nav>

  <main>
    <section class="section">
      <h2>Последние новинки</h2>
      <div class="container">
      <?php 
      include("dbconnection.php");

      $query = "SELECT * FROM products";
      $result = $mysqli->query($query);
      ?>
      <div class="products">
        <?php while($row=$result->fetch_assoc()):?>
            <div class="product">
                <img src="images/<?php echo $row['image']; ?>" alt="<?php echo $row['name']?>">
                <h2><?php echo $row['name'];?></h2>
                <p><?php echo $row['description'];?></p>
                <p><?php echo $row['price'];?>руб.</p>
                <a href="cart.php?action=add&id=<?php echo $row['id'];?>">Добавить в корзину</a>
            </div>
        <?php endwhile; ?>
      </div>
        <!-- Добавьте сюда другие карточки товаров -->
      </div>
    </section>

    <section class="section">
      <h2>Популярные модели</h2>
      <div class="container">
      <?php 
      include("dbconnection.php");

      $query = "SELECT * FROM products";
      $result = $mysqli->query($query);
      ?>
      <div class="products">
        <?php while($row=$result->fetch_assoc()):?>
            <div class="product">
                <img src="images/<?php echo $row['image']; ?>" alt="<?php echo $row['name']?>">
                <h2><?php echo $row['name'];?></h2>
                <p><?php echo $row['description'];?></p>
                <p><?php echo $row['price'];?>руб.</p>
                <a href="cart.php?action=add&id=<?php echo $row['id'];?>">Добавить в корзину</a>
            </div>
        <?php endwhile; ?>
      </div>
        <!-- Добавьте сюда другие карточки товаров -->
      </div>
        <!-- Добавьте сюда другие карточки товаров -->
      </div>
      <!-- Здесь будут отображаться популярные товары -->
    </section>

    <section class="section">
      <h2>Акции и скидки</h2>
      <div class="container">
      <?php 
      include("dbconnection.php");

      $query = "SELECT * FROM products";
      $result = $mysqli->query($query);
      ?>
      <div class="products">
        <?php while($row=$result->fetch_assoc()):?>
            <div class="product">
                <img src="images/<?php echo $row['image']; ?>" alt="<?php echo $row['name']?>">
                <h2><?php echo $row['name'];?></h2>
                <p><?php echo $row['description'];?></p>
                <p><?php echo $row['price'];?>руб.</p>
                <a href="cart.php?action=add&id=<?php echo $row['id'];?>">Добавить в корзину</a>
            </div>
        <?php endwhile; ?>
      </div>
        <!-- Добавьте сюда другие карточки товаров -->
      </div>
        <!-- Добавьте сюда другие карточки товаров -->
      </div>
      <!-- Здесь будут отображаться текущие акции -->
    </section>
  </main>
<?php
    }
    ?>
</body>
</html>