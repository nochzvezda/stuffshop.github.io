<?php

include "php-connect/connect.php";


?>

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