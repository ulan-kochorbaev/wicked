<?php 
session_start();
include "dbconnection.php";
if ($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'add':
            $id=$_GET['id'];
            $query = "SELECT * from products where id = $id";
            $result = $mysqli->query($query);
            $product = $result->fetch_assoc();

            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }

            if (isset($_SESSION['cart'][$id])) {
                $_SESSION['cart'][$id]['quantity']++;
            } else {
                $_SESSION['cart'][$id] = [
                    'name' => $product['name'],
                    'price' => $product['price'],
                    'quantity' => 1 
                ];
            }

            header("Location: cart.php");
            break;
        case 'remove': 
            $id = $_GET['id'];
            if (isset($_SESSION['cart'][$id])) {
                unset($_SESSION['cart'][$id]);
            }

            header("Location: cart.php");
            break;
    }
}

$total_price = 0;

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
    <title>Корзина</title>
    <link rel="stylesheet" href="">
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

.cart {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 20px;
}

table {
  width: 80%;
  max-width: 600px;
  border-collapse: collapse;
  margin-bottom: 20px;
}

th, td {
  text-align: left;
  padding: 8px;
  border: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

a {
  text-decoration: none;
  color: #4CAF50; /* Зеленый цвет ссылки */
}

a:hover {
  text-decoration: underline;
}

.cart p {
  margin-bottom: 10px;
}

.cart a.checkout {
  display: inline-block;
  padding: 10px 20px;
  background-color: #4CAF50; /* Зеленый цвет кнопки */
  color: white;
  border-radius: 5px;
  text-decoration: none;
  transition: background-color 0.3s;
}

.cart a.checkout:hover {
  background-color: #45a049; /* Более темный зеленый при наведении */
}

    </style>
</head>
<body>
    <h1>Ваша корзина</h1>
    <div class="cart">
        <?php if (!empty($_SESSION['cart'])):?>
            <table>
                <thead>
                    <tr>
                        <th>Название</th>
                        <th>Цена</th>
                        <th>Количество</th>
                        <th>Итого</th>
                        <th>Действие</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['cart'] as $id => $item): ?>
                        <tr>
                            <td><?php echo $item['name'];?></td>
                            <td><?php echo $item['price'];?>руб.</td>
                            <td><?php echo $item['quantity']; ?></td>
                            <td><?php echo $item['price'] * $item['quantity']; ?>руб.</td>
                            <td><a href="cart.php?action=remove&id=<?php echo $id; ?>">удалить</a></td>
                        </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
            <p>Общая стоимость: <?php echo $total_price; ?>руб.</p>
            <a href="checkout.php">Оформить заказ</a>
        <?php else: ?>
            <p>Ваша корзина</p>
        <?php endif; ?>
    </div>
    <a href="cotalog.php">Назад</a>
</body>
</html>