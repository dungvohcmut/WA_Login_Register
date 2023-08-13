<?php
    require '../Model/loginModel.php';
    require_once '../Database/config.php';

    session_status() === PHP_SESSION_ACTIVE ? TRUE : session_start();
    $objConfig = new config();
    $login = new loginModel($objConfig);
    $login->detectPage();
    $check = true;

    $currentUser = null;

    if (isset($_POST['loginBtn'])) {
        $userName = $_POST['userName'];
        $password = $_POST['password'];

        $user = $login->login($userName, $password);
        if ($user && $userName != '' && $password != '') {
            $_SESSION['userName'] = $user['username'];
            $_SESSION['fullName'] = $user['fullname'];
        }
        else {
            $check = false;
        }
        if (isset($_SESSION['userName'])) {
            $currentUser = $login->getUser($_SESSION['userName']);
            if ($currentUser['role'] == 'admin') {
                $_SESSION['role'] = 'admin';
                header('Location: admin.php');
                exit();
            }
            else if ($currentUser['role'] == 'customer') {
                $_SESSION['role'] = 'customer';
                header('Location: index.php');
                exit();
            } 
        }
    }
?>