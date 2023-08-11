<?php 
    require '../Model/signupModel.php';
    require_once '../Database/config.php';

    session_status() === PHP_SESSION_ACTIVE ? TRUE : session_start();
    $objConfig = new config();
    $signup = new signupModel($objConfig);
    $signup->detectPage();

    $checks = true;

    if (isset($_POST['signUpBtn'])) {
        $fullName = $_POST['fullName'];
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $checks = $signup->checkUser($userName);

        if ($checks) {
            $res = $signup->createUser($fullName, $userName, $password);
            if ($res) {
                header('Location: ./login.php');
                exit();
            }
        }
    }
?>