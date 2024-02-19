<?php
include "./header.php";
include "../php-connect/connect.php";
session_start();
?>

<body>
    <div class="container__admin">
        <div class="content">
        <a class="content__back" href="../admin_area.php">назад</a>

        <div class="title_table">
            </div>
            <table class="table">
                <tr class="table_row">
                    <th>Действие</th>
                    <th>Номер</th>
                    <th>Почта</th>
                </tr>
            <?php
           
            $qInfoUser = "SELECT * FROM users";
            addslashes($qInfoUser);
            $resInfoUser = mysqli_query($connect, $qInfoUser) or die(mysqli_error($connect));

            while($InfoUser = mysqli_fetch_object($resInfoUser)){
                echo "
                <tr class=\"table_row\">
                    <td>
                    <a href=\"?idD=$InfoUser->id_user\"><img src=\"./img/info-error.svg\" width=\"10px\"></a>
                    </td>
                    <td>$InfoUser->id_user</td>
                    <td>$InfoUser->email</td>
                    <td> ";

            };
            echo "
                    </td> 
                </tr>
            "
            ?>

<?php

if (isset($_GET['idD'])){
    $userD = $_GET['idD'];
    $qDeleteUser = "DELETE FROM `users` WHERE `id_user` = '$userD'";
    addslashes($qDeleteUser);
    $resDeleteUser= mysqli_query($connect, $qDeleteUser) or die(mysqli_error($connect));
}
?>
            </table>
        </div>
        </div>
    </div>
</body>


