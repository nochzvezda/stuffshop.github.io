<?php
    include "./php-connect/connect.php"; 
    session_start();

	$id = $_SESSION['id_employee'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Админ-панель</title>
    <link rel="stylesheet" href="../style/main.css">
  </head>
  <body>
    <div class="header">    
    <ul class="navbar">
        <img src="../img/avatar.png" alt="">
    <p>Добро пожаловать, админ </br><?= $_SESSION['email'] ?></p>
      <li><a href="#">Админка</a></li>
      <li><a href="admin/products.php">Продукты</a></li>
      <li><a href="admin/users.php">Пользователи</a></li>
      <li><a href="admin/status.php">Статусы</a></li>
      <li><a href="admin/employees.php">Сотрудники</a></li>
      <li><a href="admin/orders.php">Заказы</a></li>
    </ul>
</div>

</body>
</html>
