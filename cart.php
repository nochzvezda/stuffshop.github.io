<?php
include "header.php";
include "pop-up/login.php";
?>
<div class="container__cart container">
  <div class="carts">
    <div class="basket col-md-6 col-md-offset-1">
      <div class="product ux-card">
        <img src="../img/p1.png" height="50" width="50" />
        <span class="title"><a href="/product/{id}">Кроссовки Nike Air Jordan 1 low</a></span>
        <span class="price">
        15 299 rub
        </span>
        <button class="btn btn-canvas btn-xs remove" href="product/remove"><span class="uxicon uxicon-trash"></span>Убрать</button>
      </div>


      <!-- <div class="product ux-card">
        <img src="../img/p2.png" height="50" width="50" />
        <span class="title"><a href="/product/{id}">Кроссовки Nike Dunk PRO</a></span>
        <span class="price">15 299 rub</span>
        <button class="btn btn-canvas btn-xs remove" href="product/remove"><span class="uxicon uxicon-trash"></span>Убрать</button>
      </div>
      <div class="product ux-card">
        <img src="../img/p3.png" height="50" width="50"/>
        <span class="title"><a href="/product/{id}">Кроссовки Nike Jordan “utillity black”</a></span>
        <span class="price">15 299 rub</span>
        <button class="btn btn-canvas btn-xs remove" href="product/remove"><span class="uxicon uxicon-trash"></span>Убрать</button>
      </div> -->
    </div>


    <div class="summary col-md-4">
      <dl class="subtotal">
        <dt>Подытог</dt>
        <dd>45 897 rub</dd>
      </dl>
      <dl class="total">
        <dt>Всего</dt>
        <dd>45 897 rub</dd>
      </dl>
      <dl class="support">
        <dt><a href="/promocode/add">Есть промокод?</a></dt>
      </dl>
      <div class="payment">
        <a href="payment/add">Добавить</a>
        <h4 class="headline-primary">Платежная система</h3>
        <div class="ux-card">
          <a href="/payment/{id}"><img src="https://img1.wsimg.com/fos/react/sprite.svg#visa" height="32" width="50" />Romanova Anna</a>
        </div>
      </div>
      <div class="terms">
        <h4 class="headline-primary">Правила и условия</h3>
        <p class="review">Нажатие на "Я согласен" означает, что вы соглашаетесь с <a href="terms/show">Правилами и условиями</a>.</p>
        <button type="button" class="btn btn-purchase review">Я согласен</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script>
<script type="text/javascript" src="../js/cart.js"></script>

</main>
<?php
include "footer.php";
?>
</body>
</html>