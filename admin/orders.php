<?php
include "./header.php";
include "../php-connect/connect.php";
session_start();
?>

<body>
    <div class="container__admin">
        <div class="content">
        <a class="content__back" href="../admin_area.php">назад</a>

        <div class="title_table">
            </div>
            <table class="table">
                <tr class="table_row">
                    <th>Действие</th>
                    <th>Номер</th>
                    <th>Пользователь</th>
                    <th>Статус</th>
                    <th>Продукты</th>
                </tr>
            <?php
           
            $qInfoOrder = "SELECT * FROM orders";
            $resInfoOrder = mysqli_query($connect, $qInfoOrder) or die(mysqli_error($connect));


            while($InfoOrder = mysqli_fetch_object($resInfoOrder)){

            $qInfoOrderUsers = "SELECT users.email
            FROM users
            INNER JOIN orders ON users.id_user = orders.id_user
            WHERE orders.id_order = $InfoOrder->id_order;";
            $resInfoOrderUsers = mysqli_query($connect, $qInfoOrderUsers) or die(mysqli_error($connect));

            $qInfoOrderStatus = "SELECT status.status
            FROM status
            INNER JOIN orders ON status.id_status = orders.id_status
            WHERE orders.id_order = $InfoOrder->id_order;";
            $resInfoOrderStatus = mysqli_query($connect, $qInfoOrderStatus) or die(mysqli_error($connect));

            $qInfoOrderProduct = "SELECT products.name
            FROM products
            INNER JOIN orders ON products.id_product = orders.id_product
            WHERE orders.id_order = $InfoOrder->id_order;";
            $resInfoOrderProduct = mysqli_query($connect, $qInfoOrderProduct) or die(mysqli_error($connect));

                echo "
                <tr class=\"table_row\">
                    <td>
                    <a href=\"?idD=$InfoOrder->id_order\"><img src=\"./img/info-error.svg\" width=\"10px\"></a>
                    </td>
                    <td>$InfoOrder->id_order</td>
                    <td> ";
                    while($InfoOrderUsers = mysqli_fetch_object($resInfoOrderUsers)){
                        echo "
                        <td>$InfoOrderUsers->email</td>";
                    }
                    while($InfoOrderStatus = mysqli_fetch_object($resInfoOrderStatus)){
                        echo "
                        <td>$InfoOrderStatus->status</td>";
                    }
                    while($InfoOrderProduct = mysqli_fetch_object($resInfoOrderProduct)){
                        echo "
                        <td>$InfoOrderProduct->name</td>";
                    }

            };
            echo "</tr>"
            ?>

<?php

if (isset($_GET['idD'])){
    $userD = $_GET['idD'];
    $qDeleteUser = "DELETE FROM `orders` WHERE `id_order` = '$userD'";
    addslashes($qDeleteUser);
    $resDeleteUser= mysqli_query($connect, $qDeleteUser) or die(mysqli_error($connect));
}
?>
            </table>
        </div>
        </div>
    </div>
</body>


