<?php
include "header.php";
include "pop-up/login.php";
?>

<main>
<div class="container hero__container-catalog">
    <ul class="breadcrumb">
        <li><a href="index.php">Главная</a></li>
        <li>О компании</li>
    </ul>
</div>

<?php
include "menu.php";
?>

<section class="about-catalog">
    <div class="container">
        <div class="content">
            <div class="content__catalog-img">
                <a href="vakansii.php"><img src="../img/vakansi.png" alt=""></a>
            </div>
            <div class="content__catalog-img">
                <a href="contacts.php"><img src="../img/contacts.png" alt=""></a>
            </div>
            <div class="content__catalog-img">
                <a href="aboutus.php"><img src="../img/aboutus.png" alt=""></a>
            </div>
        </div>

        <div class="content">
            <div class="content__catalog-img">
                <a href="menscloth.php"><img class="politics" src="../img/politics.png" alt=""></a>
            </div>
            <div class="content__catalog-img">
                <a href=""><img class="oferta" src="../img/oferta.png" alt=""></a>
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