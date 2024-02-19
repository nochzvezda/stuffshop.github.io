<?php
    include "header.php";
    include "./php-connect/connect.php"; 
    session_start();

	$id = $_SESSION['id_user'];
	$email = $_SESSION['email'];

    $queryService = "UPDATE `users` SET `email` = '$email' WHERE id_user='$id'";
    addslashes($queryService);
    $resService = mysqli_query($connect, $queryService) or die (mysqli_error($connect));

?>

<div class="container container__lk">
    <div class="data__user">
        <h6>Профиль</h6>
        <form action="" method="POST">
            <div class="input_profile">
                <input class="input email" name="email" value="<?= $_SESSION['email'] ?>">
                <input class="sub__profile" type="submit" name="submit" value="изменить">
            </div>
            <div class="input_profile">
                <input class="input email" name="email" value="" placeholder="Имя">
                <input class="sub__profile" type="submit" name="submit" value="Добавить">
            </div>
            <div class="input_profile">
                <input class="input email" name="email" value="" placeholder="Телефон">
                <input class="sub__profile" type="submit" name="submit" value="Добавить">
            </div>
        </form>
    </div>
    <h6>Заказы</h6>
    <div class="order">
    <div class="order__user">
        <div class="flex__status">
            <p>Активные заказы</p>
            <p>Статус</p>
        </div>
        <div class="flex__span">
        <span> <?php     
        $sql = "SELECT * FROM `orders` WHERE `id_status`='1' and id_user='$id'";
        $result = mysqli_query($connect, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $id_order = $row["id_order"];
            // echo "#" . $id_order . "<p>В пути</p></br>";
            echo "<div class=\"flex__status\"<p>#$id_order</p><p>Принят</p> </div>";
        }
    } else {
        echo "<p class=\"noorder\">Нет заказов</p>";
    }?>
    </div>
    </div>
<div class="history__user">
        <div class="flex__status">
            <p>История заказов</p>
            <p>Статус</p>
        </div>
        <div class="flex__span">
        <span> <?php     
        $s = "SELECT * FROM `orders` WHERE `id_status`='2' and id_user='$id'";
        $result = mysqli_query($connect, $s);
    
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $id_noorder = $row["id_order"];
            echo "<div class=\"flex__status\"<p>#$id_noorder</p><p>Принят</p> </div>";

            // echo "#" . $id_noorder ;
            // echo "<p>Прибыл</p></br>";
            // echo '<tr>' .
            //  "<td> #" . $id_noorder . "<p>Прибыл</p></td>" .
            //  '</tr>';
        }
    } else {
        echo "<p class=\"noorder\">Нет заказов</p>";
    }?>
    </span> 
        </div>
        
    </div>

</div>
</div>
<?php
include "footer.php";
?>
