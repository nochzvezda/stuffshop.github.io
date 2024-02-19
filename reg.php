<?php 
    session_start();
    include "./php-connect/connect.php";

    if(isset($_POST['email'])){
        $email = $_POST['email'];
        if($email ===''){
            unset($email);
        }
    }

    if(isset($_POST['password'])){
        $password = $_POST['password'];
        if($password ===''){
            unset($password);
        }
    }

    if(isset($_POST['conpassword'])){
        $conpassword = $_POST['conpassword'];
        if($conpassword ===''){
            unset($conpassword);
        }
    }

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $conpassword = trim($_POST['conpassword']);

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $check_login_user = "SELECT * FROM `users` WHERE `email`='$email'";

    $result_check = mysqli_query($connect, $check_login_user);
    $check_login = mysqli_fetch_array($result_check);

    if(!empty($check_login['id_user'])){
        $_SESSION['message'] = 'Неправильный телефон или пароль';
        header("location: index.php");
    } else{
        $reg_user = "INSERT INTO users (email, password) VALUES ('$email', '$hash')";
        var_dump($reg_user);
        if($password === $conpassword){
            $result = mysqli_query($connect, $reg_user);
            header("location: index.php");
        } else{
            $_SESSION['message'] = 'Пароли не совпадают';
            header("location: index.php");
        }
    }

    
?> 




