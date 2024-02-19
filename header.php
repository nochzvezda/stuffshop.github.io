
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stuff.shop</title>
    <link rel="stylesheet" href="../style/main.css">
</head>
<body>
    <header>
        <div class="sale"><span><a href="">sale</a></span></div>
        <div class="container">
            <a href="index.php" class="logo header__logo">stuff.shop</a>
            <nav class="nav header__nav">
                <ul class="nav__list">
                    <li class="nav__item"><a href="mens.php" class="nav__link">Мужчинам</a></li>
                    <li class="nav__item"><a href="womens.php" class="nav__link">женщинам</a></li>
                    <li class="nav__item"><a href="kids.php" class="nav__link">детям</a></li>
                </ul>
            </nav>
            <ul class="shop-nav header__shop-nav">
                <li class="shop-nav__item">
                    <!-- <form action="#" class="shop-nav__search-form search-form">
                        <button class="search-form__btn btn-reset" arial-label="Find">
                        </button>
       </form> -->



                <div class="cntr">
                <div class="cntr-innr">
                    <label class="search" for="inpt_search">
                    <input id="inpt_search" type="text" />
                    </label>
                </div>
                </div>


                </li>
                <li class="shop-nav__item">
                    <a href="#" class="shop-nav__link user" arial-label="Go to cabinet">
                        <img class="user" src="../img/user.svg" alt="">
                    </a>
                </li>
                <li class="shop-nav__item">
                    <a href="cart.php" class="shop-nav__link cart" id="easynetshop-cart" arial-label="Go to cart">
                    <img src="../img/cart.svg" alt="">
                    <div class="cart_quantity easynetshop-cart-count">
                        <span class="quantity easynetshop-cart-count">3</span>
                    </div>
                </a>
                </li>
            </ul>
        </div>
    </header>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script type="text/javascript" src="../js/search.js"></script>
