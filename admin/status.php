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
                    <th>Номер</th>
                    <th>Статус</th>
                </tr>
            <?php
           
            $qInfoStatus = "SELECT * FROM status";
            addslashes($qInfoStatus);
            $resInfoStatus = mysqli_query($connect, $qInfoStatus) or die(mysqli_error($connect));

            while($InfoStatus = mysqli_fetch_object($resInfoStatus)){
                echo "
                <tr class=\"table_row\">
                    <td>$InfoStatus->id_status</td>
                    <td>$InfoStatus->status</td>
                    <td> ";

            };
            echo "
                    </td> 
                </tr>
            "
            ?>


            </table>
        </div>
        </div>
    </div>
</body>


