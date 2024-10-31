<?php 
session_start();
include 'dbconnection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach($_SESSION['cart'] as $id => $item) {
        $product_id = $id;
        $quantity = $item['quantity'];
        $total_price = $item['price'] * $quantity;
        $FIO = $_POST['FIO'];
        $adres = $_POST['adres'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $quary = "INSERT INTO orders (product_id, quantity, total_price, FIO, adres, phone, email) values ($product_id, $quantity, $total_price, '$FIO', '$adres', '$phone', '$email')";
        $mysqli->query($quary);
    }

    unset($_SESSION['cart']);
    header('Location: cotalog.php');
}

$total_price=0;
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $total_price += $item['price'] * $item['quantity'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оформление заказа</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
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

.checkout {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 20px;
}

.checkout p {
  margin-bottom: 10px;
}

.checkout form {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 300px;
}

.checkout input[type="text"] {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.checkout button[type="submit"] {
  padding: 10px 20px;
  background-color: #4CAF50; /* Зеленый цвет кнопки */
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.checkout button[type="submit"]:hover {
  background-color: #45a049; /* Более темный зеленый при наведении */
}

    </style>
</head>
<body>
    <h1>Оформление заказа</h1>
    <div class="checkout">
        <?php if (!empty($_SESSION['cart'])): ?>
            <p>Общая стоимость: <?php echo $total_price;?> руб.</p>
            <form action="checkout.php" method="post">
                <p>FIO</p>
                <input type="text" name='FIO'><br>
                <p>Адрес</p>
                <input type="text" name="adres"><br>
                <p>Телефон</p>
                <input type="text" name="phone"><br>
                <p>Email</p>
                <input type="text" name="email"><br>
                <button type='submit'>Подтвердить заказ</button><br>
            </form>
        <?php else: ?>
            <p>Ваша корзина пуста</p>
        <?php endif; ?>
    </div>
    <a href="cotalog.php">Назад</a>
</body>
</html>