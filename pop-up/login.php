<div class="login">
<div class="login__container">
    <a class="btn-close">
        <img src="../img/close-bt.svg" alt="Закрыть" class="close-bt">
    </a>
    <form action="auth.php" method="post" id="form">
            <h5>Войдите, чтобы продолжить</h5>
            <input class="input" type="email" name="email" placeholder="Ваш e-mail" required><br>
            <input class="input" type="password" name="password" placeholder="Ваш пароль" required><br>
            <input class="button" type="submit" name="submit" value="Войти">
            <span>Нажимая кнопку, вы соглашаетесь с <span class="colortext">офертой</span> и <span class="colortext">политикой конфиденциальности</span> и становитесь участником программы лояльности</span>
            <a class="to-register">
                <p class="text-to-register">зарегистрироваться</p>
            </a>
    </form>
</div>
</div>

<div class="register">
<div class="login__container">
    <a class="btn-close">
        <img src="../img/close-bt.svg" alt="Закрыть" class="close-bt_2">
    </a>
    <form method="POST" action="reg.php">
            <h5>зарегистрируйтесь, чтобы продолжить</h5>
            <input class="input" type="email" name="email" placeholder="Ваш e-mail" required><br>
            <input class="input" type="password" name="password" placeholder="Ваш пароль"required><br>
            <input class="input" type="password" name="conpassword" placeholder="Повторите пароль"required><br>
            <input class="button" type="submit" name="submit" value="Продолжить">
            <span>Нажимая кнопку, вы соглашаетесь с <span class="colortext">офертой</span> и <span class="colortext">политикой конфиденциальности</span> и становитесь участником программы лояльности</span>
            <a class="to-register">
                <p class="text-to-login">войти</p>
            </a>
    </form>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script type="text/javascript" src="../js/form.js"></script>
