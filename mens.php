<?php
include "header.php";
include "pop-up/login.php";
include "php-connect/connect.php";
?>

<main>
<div class="container hero__container-catalog">
    <ul class="breadcrumb">
        <li><a href="index.php">Главная</a></li>
        <li>Мужчинам</li>
    </ul>
</div>
<section class="catalog">
    <div class="container">
        <div class="content">
            <div class="content__catalog-img">
                <a href="catalog-men-cloth.php"><img src="../img/mensclo.png" alt="" width="650px"></a>
            </div>
            <div class="content__catalog-img">
                <a href="catalog-men-sneak.php"><img src="../img/mens.png" alt="" width="650px"></a>
            </div>
        </div>
    </div>
</section>
</main>
<?php $slider = mysqli_query($connect, "SELECT * FROM products_men_sneakers");?>
<section class='mens-slider'>
  <div class='container slider__container'>
    <h2>Популярное</h2>
  <div class='carousel-container'>
  <div class='carousel_items'>
  <?php
    while($slider_result = mysqli_fetch_assoc($slider))
    {
  ?>
    <div class='carousel_item item1'>
    <?php echo  "<a href='card_men_sneakers.php?id_product=".$slider_result['id_product']."'>";?><img src="<?php echo $slider_result['name_img'] ?>"></a>
    </div>
    <?php
   }
  ?>
  </div>
</div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script type="text/javascript" src="../js/main-slider.js"></script>


<?php

include "footer.php";
?>
</body>
</html>