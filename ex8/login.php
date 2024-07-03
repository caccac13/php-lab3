<?php
    session_start();

    if($_SERVER['request_method'] = 'post'){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if(empty($username) && empty($password)){
            echo 'Vui long dien day du thong tin';
        } else {
            if($username == 'admin' && $password == 'password') {
                $_SESSION['username'] = $username;
                header('location: welcome.php');
                exit();
            }
            else {
                echo 'Invalid username or password.';
            }
        }
    }
    else {
        header('location: index.php');
        exit();
    }
?>