<?php     
     include "../php-connect/connect.php";
     session_start();

    if(isset($_GET['idA'])){
        $product = $_GET['idA'];
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
        }else{
            $name = trim($_POST['name']);
            $price = trim($_POST['price']);
            $description = trim($_POST['description']);
            $img = trim($_POST['name_img']);
        }


        $img = $_FILES['img'];
        
        $uploaddir = 'img/';
        $uploaddir2 = 'img/';
        $apend=date('YmdHis').rand(100,1000).'.jpg';
        $uploadfile = "$uploaddir$apend";
        $uploadfile2 = "$uploaddir2$apend";
        

            $queryProduct= "UPDATE `products` SET `name` = '$nameProduct',`price` = '$priceProduct', `description` = '$descriptionProduct' WHERE id_product='$product'";
            addslashes($queryProduct);
            $resProduct = mysqli_query($connect, $queryProduct) or die (mysqli_error($connect));
            header("location: products.php");

            move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
            $queryProductImg= "UPDATE img, img_product
            SET img.name_img = '$uploadfile2', img_product.id_product = '$product'
            WHERE img.id_img = img_product.id_img AND img_product.id_product = '$product';";
            addslashes($queryProductImg);
            $resProductImg = mysqli_query($connect, $queryProductImg) or die (mysqli_error($connect));
  

            header("location: ./products.php");
 


?>
