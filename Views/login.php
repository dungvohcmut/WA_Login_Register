<?php
    require '../Controller/loginController.php';
    if (isset($_GET['action']) && $_GET['action'] === 'logout') {
        if (isset($_SESSION['userName'])) {
            session_destroy();
            $currentUser = null;
            unset($_SESSION['userName']);
            unset($_SESSION['role']);
            header('Location: login.php');
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta viewport="width=device-width,initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Log In</title>
    <link rel="icon" type="image/x-icon" href="../Views/assets/nike_favicon.png">    
</head>
<body>
    <?php include('header.php'); ?>
    <section class="vh-100 login">
        <div class="container" style="margin-bottom: 150px; margin-top:100px;">
            <img src="assets/Logo_NIKE.svg.png" alt="logo" class="mx-auto d-block" style="width: 50px; margin-bottom: 20px;">
            <h5 class="text-center mt-3">YOUR ACCOUNT FOR EVERYTHING</h5>
            <div class="row justify-content-center">
                <div class="col-md-4">  
                    <p id="serverError" style="color: red; font-size:13px;"></p> 
                    <form action="" method="post" onsubmit="formValidate();" name="myform">
                        <div class="mt-3 mb-3">
                            <input class="form-control" placeholder="Username" name="userName">
                        </div>
                        <p id="userNameError" style="color:red; font-size: 13px; margin-left: 5px"></p>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <p id="passwordError" style="color:red; font-size: 13px; margin-left: 5px"></p>
                        <p class="text-center" style="font-size: 12px; opacity: 50%">
                        By logging in, you agree to Nike's Privacy Policy and Terms of Use.
                        </p>
                        <!-- Login button -->
                        <div class="d-grid gap-3">
                            <button name="loginBtn" type="submit" class="btn btn-block text-white" style="background-color:black"><b>LOG IN</b></button>
                        </div>
                    </form>
                    <div class="mt-2 d-flex justify-content-between" style="font-size: 13px;">
                        <div>Forgot Password</div>
                        <div>Log In with Phone Number</div>   
                    </div>

                    <?php if(!$check && $userName != '' && $password != ''): ?>
                    <div class="alert alert-danger text-center mt-2">
                        <strong>Đăng nhập thất bại!</strong> Tên tài khoản hoặc mật khẩu không chính xác!
                    </div>
                    
                    <?php endif; ?>
                </div>  
            </div>
        </div>
    </section>
    <?php include('footer.php') ?>

    <!-- Client side validation -->
    <script>
        function formValidate() {
            var userName = document.forms.myform.userName;
            var password = document.forms.myform.password;
            
            if (userName.value == "") {
                document.getElementById("userNameError").innerHTML = "Please enter your username";
                userName.focus();
                event.preventDefault();
            }
            else { document.getElementById("userNameError").innerHTML = ""; }

            if (password.value == "") {
                document.getElementById("passwordError").innerHTML = "Please enter your password";
                if (!(userName.value == "")) { password.focus(); }
                event.preventDefault();
            }
            else { document.getElementById("passwordError").innerHTML = ""; }
        }
    </script>

    <!-- Server side validation -->
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $userName = $_POST['userName'];
            $password = $_POST['password'];

            if ($userName == '') {
                echo '<script>
                        document.getElementById("userNameError").innerHTML = "Please enter your username";
                        document.forms.myform.userName.focus(); 
                        event.preventDefault();
                    </script>';
            }
            if ($password == '') {
                echo '<script>
                        document.getElementById("passwordError").innerHTML = "Please enter your password";
                        if (!(document.forms.myform.userName.value == "")) { document.forms.myform.password.focus(); }
                        event.preventDefault();
                    </script>';
            }
        }
    ?>
</body>
</html>