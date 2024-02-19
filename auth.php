<?php
    include "./php-connect/connect.php"; 
    session_start();

    if(isset($_POST['submit'])) { 

        if(isset($_POST['password'])) { 
            $password = $_POST['password']; 
            if ($password === '') { 
            unset($password); 
            } 
            } 

    if(isset($_POST['email'])) { 
    $email = $_POST['email']; 
    if ($email === '') { 
    unset($email); 
    } 
    } 
  
    } 

    $email = trim($_POST['email']); 
    $password = trim($_POST['password']); 

    $check_user = "SELECT * FROM `users` WHERE `email` = '$email'"; 
    $result = mysqli_query($connect, $check_user); 
    $info_user = mysqli_fetch_array($result); 

    $check_employee = "SELECT * FROM `employees` WHERE `email` = '$email'"; 
    $result = mysqli_query($connect, $check_employee); 
    $info_employee = mysqli_fetch_array($result); 

    if((empty($info_user['id_user'])) and (empty($info_employee['id_employee']))){ 
        $_SESSION['message'] = 'Неправильный адрес или пароль!'; 
    header("location: index.php"); 
    } elseif((!empty($info_user['id_user'])) and (password_verify($password,$info_user['password']))) { 
        $_SESSION['id_user'] = $info_user['id_user']; 
        $_SESSION['email'] = $info_user['email']; 
        $_SESSION['password'] = $info_user['password']; 
    header("location: lk.php"); 
    } elseif((!empty($info_employee['id_employee'])) and (password_verify($password,$info_employee['password']))) { 
        $_SESSION['id_employee'] = $info_employee['id_employee']; 
        $_SESSION['email'] = $info_employee['email']; 
        $_SESSION['password'] = $info_employee['password']; 
    header("location: admin_area.php"); 
    } else { 
        $_SESSION['message'] = 'Неправильный пароль!'; 
    header("location: index.php"); 
} 

?>