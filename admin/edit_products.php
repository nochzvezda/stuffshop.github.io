<?php     
  include "../php-connect/connect.php";
  session_start();
?>
    <body>
        <div class="content">
            <div class="title_table ">
                <p>Изменение записи</p>
                <div class="btn_add">
                    <a href="products.php">Вернуться</a>
                </div>
            </div>
       


        <?php
            if(isset($_GET['idA'])){
                $product = $_GET['idA'];
            }

            echo "<form action=\"edit_product.php?idA=$product\" enctype=\"multipart/form-data\" class=\"table_add\" method=\"post\"> ";

            $qInfoProduct = "SELECT * FROM products WHERE id_product='$product'";
            addslashes($qInfoProduct);
            $resInfoProduct = mysqli_query($connect,$qInfoProduct) or die(mysqli_error($connect));
            $InfoProduct = mysqli_fetch_object($resInfoProduct);

            $qInfoImg = "SELECT * FROM img_product, img WHERE img_product.id_product = $InfoProduct->id_product AND img_product.id_img = img.id_img";
            addslashes($qInfoImg);
            $resInfoProductImg = mysqli_query($connect, $qInfoImg) or die(mysqli_error($connect));
            $InfoProductImg = mysqli_fetch_object($resInfoProductImg);
        ?>

        <div class="table_add_row">
            <label>Название</label>
            <input type="text" name="name" value="<?php echo "".$InfoProduct->name.""; ?>">
            <label>Цена</label>
            <input type="text" name="price" value="<?php echo "".$InfoProduct->price.""; ?>">
            <label>Описание</label>
            <input type="text" name="description" value="<?php echo "".$InfoProduct->description.""; ?>">
            <label>Картинка</label>
            <input type="file" name="img" method="post" value="<?php echo "".$InfoProductImg->name_img.""; ?>" enctype="multipart/form-data" >
            <button type="submit">Изменить</button>
        </div>
        </form>
        </div>

    </body>
</body>
</html>