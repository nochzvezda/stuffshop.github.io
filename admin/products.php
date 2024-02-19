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
                <!-- <div class="btn_add">
                    <a href="create_products.php">Добавить запись</a>
                </div> -->
            </div>
            <table class="table">
                <tr class="table_row">
                    <th>Действие</th>
                    <th>Номер</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Описание</th>
                    <th>Картинка</th>
                </tr>
            <?php
            $qCom = "SELECT * FROM products";
            $resInfoProduct = mysqli_query($connect, $qCom) or die(mysqli_error($connect));
            
            while($InfoProduct = mysqli_fetch_object($resInfoProduct)){
                $fCmo = "SELECT * FROM img_product, img WHERE img_product.id_product = $InfoProduct->id_product AND img_product.id_img = img.id_img";
                $resInfoProductImage = mysqli_query($connect, $fCmo) or die(mysqli_error($connect));
                echo "
                <tr class=\"table_row\">
                    <td>
                    <a href=\"create_products.php?idA=$InfoProduct->id_product\"><img src=\"./img/plus.svg\" width=\"10px\"></a>
                    <a href=\"edit_products.php?idA=$InfoProduct->id_product\"><img src=\"./img/pencil.svg\" width=\"10px\"></a>
                    <a href=\"?idD=$InfoProduct->id_product\"><img src=\"./img/info-error.svg\" width=\"10px\"></a>
                    </td>
                    <td>$InfoProduct->id_product</td>
                    <td>$InfoProduct->name</td>
                    <td>$InfoProduct->price</td>
                    <td>$InfoProduct->description</td>
                    <td> ";
                    while($InfoProductImage = mysqli_fetch_object($resInfoProductImage)){
                        echo "
                        <img src=\"$InfoProductImage->name_img\">";
                    }
            };
            echo "
                    </td> 
                </tr>
            "
            ?>
            <?php
            if (isset($_GET['idD'])){
                $productD = $_GET['idD'];

                // Удаляем связанные записи из таблицы img_product
                $sql1 = "DELETE FROM img_product WHERE id_product = '$productD'";

                // Удаляем связанные записи из таблицы img
                $sql2 = "DELETE FROM img WHERE id_img IN (SELECT id_img FROM img_product WHERE id_product = '$productD')";

                // Удаляем саму запись из таблицы products
                $sql3 = "DELETE FROM products WHERE id_product = '$productD'";

                // Выполняем запросы к базе данных
                mysqli_query($connect, $sql1);
                mysqli_query($connect, $sql2);
                mysqli_query($connect, $sql3);

            }
            ?>
            </table>
        </div>
        </div>
    </div>
</body>


