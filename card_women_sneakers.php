<?php
include 'header.php';
include 'pop-up/login.php';
include "php-connect/connect.php";

$id_product = $_GET['id_product'];
$select_product = "SELECT * FROM products_women_sneakers WHERE id_product= '$id_product';";
$select_img = "SELECT img_product_women_sneakers.id_product, img_women_sneakers.name_img 
FROM img_product_women_sneakers
JOIN products_women_sneakers ON products_women_sneakers.id_product = img_product_women_sneakers.id_product
JOIN img_women_sneakers ON img_product_women_sneakers.id_img = img_women_sneakers.id_img
WHERE img_product_women_sneakers.id_product = '$id_product';";
$img_result = mysqli_query($connect, $select_img) or die(mysqli_error($connect));
$product_result = mysqli_query($connect, $select_product) or die(mysqli_error($connect));
$product_rows = mysqli_fetch_array($product_result);
$img_rows = mysqli_fetch_array($img_result);
echo"
<section class='card__content'>
    <div class='card-top'>
        <div class='container container-narrow'>
            <div class='card-top__left'>
                <div class='card-slider'>
                    <div class='card-slider__thumbs'>
                    <div class='card-slider__thumb'>
                    <img src=".$img_rows['name_img'].">
                    </div>
                        <div class='card-slider__thumb'>
                        <img src=".$img_rows['name_img'].">
                        </div>
                        <div class='card-slider__thumb'>
                    <img src=".$img_rows['name_img'].">
                    </div>
                        <div class='card-slider__thumb'>
                        <img src=".$img_rows['name_img'].">
                        </div>
      
                    </div>
                    <div class='card-slider__main img'>
                    <img src=".$img_rows['name_img'].">
                        <div class='swiper-wrapper'>
                            <div class='swiper-slide'>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='card-top__right'>
                <div class='card-info'>
                    <span class='card-info__prop'>скидка 30%</span>
                    <h3 class='card-info__title'>".$product_rows['name']."</h3>
                    <div class='card-info__rate'>
                        <img src='../img/stars.png' alt='Rate 4 of 5'>
                    </div>
                    <div class='card-info__price info-price'>
                        <div class='info-price__current'>".$product_rows['price']." rub</div>
                        <div class='info-price__old'>6 599 rub</div>
                    </div>
                    <p class='card-info__art'>
                        Арт. ".$product_rows['id_product']."
                    </p>
                    <p class='card-info__color'>
                        Цвет: White/Blue
                    </p>
                    <div class='card-info__select size-select'>
                        <p class='size-select__selected'>Выберите размер</p>
                        <ul class='size-select__list'>
                            <li class='size-select__item'><button class='size-select__btn  btn-reset' aria-label='17 size'>17</button></li>
                            <li class='size-select__item'><button class='size-select__btn btn-reset' aria-label='18,5 size'>18,5</button></li>
                            <li class='size-select__item'><button class='size-select__btn btn-reset' aria-label='18,5 size'>19,5</button></li>
                            <li class='size-select__item'><button class='size-select__btn btn-reset' aria-label='18,5 size'>21</button></li>
                            <li class='size-select__item'><button class='size-select__btn btn-reset' aria-label='18,5 size'>22</button></li>
                            <li class='size-select__item'><button class='size-select__btn btn-reset' aria-label='18,5 size'>23,5</button></li>
                            <li class='size-select__item'><button class='size-select__btn btn-reset' aria-label='18,5 size'>24</button></li>
                            <li class='size-select__item'><button class='size-select__btn btn-reset' aria-label='18,5 size'>25</button></li>
                            <li class='size-select__item'><button class='size-select__btn btn-reset' aria-label='18,5 size'>26</button></li>
                        </ul>
                    </div>
                    <div class='card-info__stepper stepper'>
                        <button class='btn-reset stepper__btn stepper__btn--minus' aria-label='minus'>
                            <img src='../img/minus.svg' alt=''>
                      
                        </button>
                        <input type='text' class='stepper__input' value='1' maxlength='5'>
                        <button class='btn-reset stepper__btn stepper__btn--plus' aria-label='plus'>
                        <img src='../img/plus.svg' alt=''>
                        </button>
                    </div>
                    <button class='btn-ens-action btn-ens-style card-info__btn card-info__btn--tocart' data-rel='73c10d14330149'>
                    Добавить в корзину
</button>
                </div>
            </div>
        </div>
    </div>

    <div class='card-content__bottom'>
        <div class='card-bottom-content'>
            <div class='container container-narrow'>
                <div class='card-description'>
                    <div class='card-description__left' data-simplebar>
                        <ul class='card-description__navigation'>
                            <li class='card-description__item'><a href='#' class='card-description__link card-description__link--active'>о товаре</a></li>
                            <li class='card-description__item'><a href='#' class='card-description__link'>Доставка и оплата</a></li>
                            <li class='card-description__item'><a href='#' class='card-description__link'>наличие в магазинах</a></li>
                        </ul>
                    </div>
                    <div class='card-description__right'>
                        <div class='card-description__content card-description__content--active'>
                            <p>".$product_rows['description']."</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class='card-link'>
            <div class='container'>
                <ul class='card-link__navigation'>
                    <li class='card-link__item'><a href='#' class='card-link__link'>обувь</a></li>
                    <li class='card-link__item'><a href='#' class='card-link__link'>распродажа</a></li>
                    <li class='card-link__item'><a href='#' class='card-link__link'>nike</a></li>
                    <li class='card-link__item'><a href='#' class='card-link__link'>кроссовки nike</a></li>
                    <li class='card-link__item'><a href='#' class='card-link__link'>кроссовки со скидкой</a></li>
                    <li class='card-link__item'><a href='#' class='card-link__link'>кроссовки низкие</a></li>
                    <li class='card-link__item'><a href='#' class='card-link__link'>кроссовки nike низкие</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
";


?>

<main>


<section class='catalog-sale'>
    <img src='../img/sale_card.png' alt=''>
</section>
<?php $slider = mysqli_query($connect, "SELECT * FROM products_women_sneakers");?>
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
    <?php echo  "<a href='card_women_sneakers.php?id_product=".$slider_result['id_product']."'>";?><img src="<?php echo $slider_result['name_img'] ?>"></a>
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
include 'footer.php';
?>
</body>

<script src='https://code.jquery.com/jquery-3.5.1.slim.min.js'></script>
<script type='text/javascript' src='../js/cardslider.js'></script>
<script type='text/javascript' src='../js/main-slider.js'></script>
<!--Библиотека jQuery-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!--Готовый скрипт корзины-->
<script defer src="https://lk.easynetshop.ru/frontend/v5/ens-73c10d14.js"></script>

<!--Стили элементов для корзины-->
<link href="https://lk.easynetshop.ru/frontend/v5/ens-73c10d14.css" rel="stylesheet">
</html>


<style>
/* Кнопки Перейти в корзину, Перейти к заказу и Оформить заказ */
.easynetshop-gotocart, 
.easynetshop-goorder, 
.easynetshop-doorder {   
	background-color: var(--color-blue);    /* Цвет фона */   
	color: var(--color-white);  /* Цвет текста */
	border-color: var(--color-blue);   /* Цвет рамки */
}

.easynetshop-gotocart:hover,  
.easynetshop-goorder:hover, 
.easynetshop-doorder:hover {  
	background-color:var(--color-black); 	/* Цвет фона */    
	color: var(--color-white); 	/* Цвет текста */
	border-color: var(--color-black); 	/* Цвет рамки */
}

.powered {display:none} 
</style>