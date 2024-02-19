<?php
include "header.php";
include "pop-up/login.php";
?>

<main>
<div class="container hero__container-catalog">
    <ul class="breadcrumb">
        <li><a href="index.php">Главная</a></li>
        <li>Помощь</li>
    </ul>
</div>

<?php
include "menu.php";
?>

<section class="about-catalog">
    <div class="container">
        <div class="content">
            <div class="content__catalog-img">
                <a href="menscloth.php"><img src="../img/clear.png" alt=""></a>
            </div>
            <div class="content__catalog-img">
                <a href=""><img src="../img/obmen.png" alt=""></a>
            </div>
            <div class="content__catalog-img">
                <a href=""><img src="../img/bonus.png" alt=""></a>
            </div>
        </div>
    </div>
</section>

</main>
<?php
include "footer.php";
?>
</body>
</html>