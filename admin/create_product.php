<?php
// include "./header.php";
include "../php-connect/connect.php";
session_start();

if(isset($_SESSION['id_user'])) {
    $IDuser = $_SESSION['id_user'];
    if($IDuser === '') {
        unset($IDuser);
    }
}

if(isset($_POST['name'])) {
    $nameProduct = $_POST['name'];
    if($nameProduct === '') {
        unset($nameProduct);
    }
}

if(isset($_POST['price'])) {
    $priceProduct = $_POST['price'];
    if($priceProduct === '') {
        unset($priceProduct);
    }
}

if(isset($_POST['description'])) {
    $descriptionProduct = $_POST['description'];
    if($descriptionProduct === '') {
        unset($descriptionProduct);
    }
}

$img = $_FILES['img'];

if(!empty($img))
{
    $qCmo = "INSERT INTO products (name, price, description) VALUES ('$nameProduct','$priceProduct','$descriptionProduct')";
    addslashes($qCmo);
    $resCom = mysqli_query($connect, $qCmo) or die (mysqli_error($connect));
    $id_product = mysqli_insert_id($connect);

    $img_desc = reArrayFiles($img);
    $i = 0;

    foreach($img_desc as $val)
    {
        $uploaddir = 'img/';
        $uploaddir2 = 'img/';
        $apend=date('YmdHis').rand(100,1000).'.jpg';
        $uploadfile = "$uploaddir$apend";
        $uploadfile2 = "$uploaddir2$apend";

        move_uploaded_file($val['tmp_name'], $uploadfile);
        $queryImgUser = "INSERT INTO img (name_img) VALUES ('$uploadfile2')";
        addslashes($queryImgUser);
        $resImgUser = mysqli_query($connect, $queryImgUser) or die (mysqli_error($connect));
        $i++;
    }

    $qSearchRows = "SELECT * FROM img ORDER BY id_img DESC LIMIT $i";
    addslashes($qSearchRows);
    $result = mysqli_query($connect, $qSearchRows);
    while($SearchRows = mysqli_fetch_object($result)){
        $test = $SearchRows->id_img;
        $qCmoImg = "INSERT INTO img_product (id_product, id_img) VALUES ('$id_product', '$test')";
        addslashes($qCmoImg);
        $resCmoImg = mysqli_query($connect, $qCmoImg) or die (mysqli_error($connect));
        header('location: ./products.php');
    }
}
    function reArrayFiles($file)
    {
        $file_ary = array();
        $file_count = count($file['name']);
        $file_key = array_keys($file);

        for($i=0;$i<$file_count;$i++)
        {
            foreach($file_key as $val)
            {
                $file_ary[$i][$val] = $file[$val][$i];
            }
        }
        return $file_ary;
    }


?>