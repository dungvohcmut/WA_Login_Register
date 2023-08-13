<?php
    require '../Controller/signupController.php'
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta viewport="width=device-width,initial-scale=1">
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="../Views/assets/nike_favicon.png">   
    </head>
    <body>
        <?php include('header.php') ?>
        <div class="container" style="margin-bottom: 150px; margin-top:100px;">
            <img src="assets/Logo_NIKE.svg.png" alt="logo" class="mx-auto d-block" style="width: 50px; margin-bottom: 20px;">
            <h5 class="text-center mt-3">BECOME A NIKE MEMBER</h5>
            <p class="text-center" style="opacity:50%">Create your Nike Member profile and get first access <br> to the very best of Nike products, inspiration and community.</p>
                <div class="row justify-content-center">
                    <div class="col-md-4">   
                        <form action="" method="post" onsubmit="formValidate();" name="myform">  
                            <div class="mt-3 mb-3">
                                <input type="text" class="form-control" placeholder="Full Name" name="fullName">
                            </div>
                            <p id="fullNameError" style="color: red; font-size:13px"></p>
                            <div class="mb-3">
                                <input class="form-control" placeholder="Username" name="userName">
                            </div>
                            <p id="userNameError" style="color: red; font-size:13px"></p>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <p id="passwordError" style="color: red; font-size:13px"></p>
                            <p class="text-center" style="font-size: 12px; opacity: 50%">
                            By creating an account, you agree to Nike's Privacy Policy and Terms of Use.
                            </p>

                            <!-- Submit button -->
                            <div class="d-grid gap-3">
                                <button name="signUpBtn" type="submit" class="btn btn-block text-white" style="background-color:black"><b>JOIN US</b></button>
                            </div>
                        </form>
                        <div class="mt-2 d-flex justify-content-between" style="font-size: 13px;">
                            <div>Forgot Password</div>
                            <div>Log In with Phone Number</div>   
                        </div>
                    </div>  
                </div>
        </div>
        <?php include('footer.php') ?>
        
        <!-- Client side validation -->
        <script>
            function formValidate() {
                
                var fullName = document.forms.myform.fullName;
                var userName = document.forms.myform.userName;
                var password = document.forms.myform.password;
                if (fullName.value == "") {
                    document.getElementById("fullNameError").innerHTML = "Please enter your full name";
                    fullName.focus(); 
                    event.preventDefault();
                }
                else { document.getElementById("fullNameError").innerHTML = ""; }
                
                if (/[\d]/.test(fullName.value)) {
                    document.getElementById("fullNameError").innerHTML = "Full name should not contain numbers";
                    fullName.focus();
                    event.preventDefault();
                } else {
                    document.getElementById("fullNameError").innerHTML = "";
                }
                
                if (userName.value == "") {
                    document.getElementById("userNameError").innerHTML = "Please enter your username";
                    if (!(fullName.value == "")) { userName.focus(); }
                    event.preventDefault();
                }
                else { document.getElementById("userNameError").innerHTML = ""; }

                if (password.value == "") {
                    document.getElementById("passwordError").innerHTML = "Please enter your password";
                    if (!(fullName.value == "") && !(userName.value == "")) { password.focus(); }
                    event.preventDefault();
                }
                else { document.getElementById("passwordError").innerHTML = ""; }
            }
        </script>

        <!-- Server side validation -->
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $fullName = $_POST['fullName'];
                $userName = $_POST['userName'];
                $password = $_POST['password'];
                if ($fullName == '') {
                    echo '<script>
                            document.getElementById("fullNameError").innerHTML = "Please enter your full name";
                            document.forms.myform.fullName.focus(); 
                            event.preventDefault();
                        </script>';
                }
                if ($userName == '') {
                    echo '<script>
                            document.getElementById("userNameError").innerHTML = "Please enter your username";
                            if (!(document.forms.myform.fullName.value == "")) { document.forms.myform.userName.focus(); }
                            event.preventDefault();
                        </script>';
                }
                if ($password == '') {
                    echo '<script>
                            document.getElementById("passwordError").innerHTML = "Please enter your password";
                            if (!(document.forms.myform.fullName.value == "") && !(document.forms.myform.userName.value == "")) { document.forms.myform.password.focus(); }
                            event.preventDefault();
                        </script>';
                }
            }
        ?>
    </body>
</html>