<?php
include "header.php";
include "php-connect/connect.php";
$products = mysqli_query($connect, "SELECT * FROM products_kids_cloth");
?>
<main>
    <div class="container hero__container-catalog">
        <ul class="breadcrumb">
            <li><a href="index.php">Главная</a></li>
            <li><a href="kids.php">детям</a></li>
            <li>Одежда</li>
        </ul>
    </div>
    <section class="catalog">
        <div class="container container__catalog">
        <h2 class="visually-hidden">Детская одежда 2023</h2>
            <div class="catalog-content">
                <div class="catalog-filter-cloth">
                    <div class="catalog-filters">
                        <button class="hide-filters btn-resert">скрыть фильтр</button>

                        <div class="catalog-filter">
                            <div class="catalog-filter__top">
                                <div class="catalog-filter__caption">
                                    <h3 class="catalog-filter__title">сезон</h3>
                                </div>
                                <div class="catalog-filter__toggle"></div>
                            </div>
                            <div class="catolog-filter__bottom catalog-filter__bottom">
                                <ul class="catalog-filter__items">
                                    <li class="catalog-filter__item">
                                        <label class="custom-ckeckbox">
                                            <input type="checkbox" class="custom-ckeckbox__input visually-hidden">
                                            <span class="custom-ckeckbox__text">Лето</span>
                                        </label>
                                    </li>
                                    <li class="catalog-filter__item">
                                        <label class="custom-ckeckbox">
                                            <input type="checkbox" class="custom-ckeckbox__input visually-hidden">
                                            <span class="custom-ckeckbox__text">зима</span>
                                        </label>
                                    </li>
                                    <li class="catalog-filter__item">
                                        <label class="custom-ckeckbox">
                                            <input type="checkbox" class="custom-ckeckbox__input visually-hidden">
                                            <span class="custom-ckeckbox__text">Весна/осень</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="catalog-filter">
                            <div class="catalog-filter__top">
                                <div class="catalog-filter__caption">
                                    <h3 class="catalog-filter__title">цвет</h3>
                                </div>
                                <div class="catalog-filter__toggle"></div>
                            </div>
                            <div class="catolog-filter__bottom catalog-filter__bottom">
                                <ul class="catalog-filter__items">
                                    <li class="catalog-filter__item">
                                        <label class="custom-ckeckbox">
                                            <input type="checkbox" class="custom-ckeckbox__input visually-hidden">
                                            <span class="custom-ckeckbox__text">красный</span>
                                        </label>
                                    </li>
                                    <li class="catalog-filter__item">
                                        <label class="custom-ckeckbox">
                                            <input type="checkbox" class="custom-ckeckbox__input visually-hidden">
                                            <span class="custom-ckeckbox__text">синий</span>
                                        </label>
                                    </li>
                                    <li class="catalog-filter__item">
                                        <label class="custom-ckeckbox">
                                            <input type="checkbox" class="custom-ckeckbox__input visually-hidden">
                                            <span class="custom-ckeckbox__text">черный</span>
                                        </label>
                                    </li>
                                    <li class="catalog-filter__item">
                                        <label class="custom-ckeckbox">
                                            <input type="checkbox" class="custom-ckeckbox__input visually-hidden">
                                            <span class="custom-ckeckbox__text">белый</span>
                                        </label>
                                    </li>   
                                    <li class="catalog-filter__item">
                                        <label class="custom-ckeckbox">
                                            <input type="checkbox" class="custom-ckeckbox__input visually-hidden">
                                            <span class="custom-ckeckbox__text">серый</span>
                                        </label>
                                        </li>  
                                </ul>
                            </div>
                        </div>


                        <div class="catalog-filter">
                            <div class="catalog-filter__top">
                                <div class="catalog-filter__caption">
                                    <h3 class="catalog-filter__title">размер</h3>
                                </div>
                                <div class="catalog-filter__toggle"></div>
                            </div>
                            <div class="catolog-filter__bottom catalog-filter__bottom">
                                <ul class="catalog-filter__items">
                                    <li class="catalog-filter__item">
                                        <label class="custom-ckeckbox">
                                            <input type="checkbox" class="custom-ckeckbox__input visually-hidden">
                                            <span class="custom-ckeckbox__text">104</span>
                                        </label>
                                    </li>
                                    <li class="catalog-filter__item">
                                        <label class="custom-ckeckbox">
                                            <input type="checkbox" class="custom-ckeckbox__input visually-hidden">
                                            <span class="custom-ckeckbox__text">106</span>
                                        </label>
                                    </li>
                                    <li class="catalog-filter__item">
                                        <label class="custom-ckeckbox">
                                            <input type="checkbox" class="custom-ckeckbox__input visually-hidden">
                                            <span class="custom-ckeckbox__text">110</span>
                                        </label>
                                    </li>
                                    <li class="catalog-filter__item">
                                        <label class="custom-ckeckbox">
                                            <input type="checkbox" class="custom-ckeckbox__input visually-hidden">
                                            <span class="custom-ckeckbox__text">120</span>
                                        </label>
                                    </li>
                                    <li class="catalog-filter__item">
                                        <label class="custom-ckeckbox">
                                            <input type="checkbox" class="custom-ckeckbox__input visually-hidden">
                                            <span class="custom-ckeckbox__text">140</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="catalog-grid">
                    <div class="catalog-grid__contents">
                        <ul class="catalog-grid__content" data-grid-colums="3">
                        <?php
                            while($result = mysqli_fetch_assoc($products))
                                {
                        ?>
                            <li class="catalog-grid__item">
                                <article class="product-catalog">
                                    <div class="product-catalog__image">
                                        <img src="<?php echo $result['name_img'] ?>" alt="p1">
                                    </div>
                                        <h3 class="product-catalog__title">
                                        <?php echo  "<a href='card_kids.php?id_product=".$result['id_product']."'>";?><?php echo $result['name'] ?></a>
                                        </h3>
                                    <span class="product-catalog__price">
                                        <?php echo $result['price'] ?> rub
                                    </span>
                                </article>
                            </li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>
                    <ul class="pereklyuchatel-stranits"> 
                    <li><a href="#"><i></i></a></li> 
                    <li><a href="#"><i></i></a></li> 
                    <li><a href="#"><i></i></a></li> 
                    <li><a href="#"><i></i></a></li> 
                    <li><a href="#"><i></i></a></li> 
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php $sale = mysqli_query($connect, "SELECT * FROM products_kids_cloth LIMIT 3");?>
<section class="catalog-sale">
    <img src="../img/sale_blue.png" alt="">
    <div class="container container__catalog-sale">
        <ul class="catalog-grid__content" data-grid-colums="3">
        <?php
    while($sale_result = mysqli_fetch_assoc($sale))
    {
  ?>
            <li class="catalog-grid__item">
                <article class="product-catalog">
                    <div class="product-catalog__image">
                    <img src="<?php echo $sale_result ['name_img'] ?>" alt="p1">
                    </div>
                    <h3 class="product-catalog__title">
                    <?php echo  "<a href='card_kids.php?id_product=".$sale_result ['id_product']."'>";?><?php echo $sale_result ['name'] ?></a>
                    </h3>
                    <span class="product-catalog__price"><?php echo $sale_result ['price'] ?> rub</span>
                </article>
            </li>

            <?php
   }
  ?>
        </ul>
    </div>
</section>

<?php $slider = mysqli_query($connect, "SELECT * FROM products_kids_cloth");?>
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
    <?php echo  "<a href='card_kids.php?id_product=".$slider_result['id_product']."'>";?><img src="<?php echo $slider_result['name_img'] ?>"></a>
    </div>
    <?php
   }
  ?>
  </div>
</div>
</div>
</section>
</main>
<?php
include "footer.php";
?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script type="text/javascript" src="../js/catalog.js"></script>
<script type="text/javascript" src="../js/main-slider.js"></script>
</html>