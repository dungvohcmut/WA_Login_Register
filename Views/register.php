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
    </head>
    <body>
        <?php include('header.php') ?>
        <div class="container" style="margin-bottom: 150px; margin-top:100px;">
            <img src="assets/Logo_NIKE.svg.png" alt="logo" class="mx-auto d-block" style="width: 50px; margin-bottom: 20px;">
            <h5 class="text-center mt-3">BECOME A NIKE MEMBER</h5>
            <p class="text-center" style="opacity:50%">Create your Nike Member profile and get first access <br> to the very best of Nike products, inspiration and community.</p>
                <div class="row justify-content-center">
                    <div class="col-md-4">   
                        <form action="#" method="post" onsubmit="formValidate();" name="myform">  
                            <div class="mt-3 mb-3">
                                <input type="text" class="form-control" placeholder="Full Name" name="fullName">
                            </div>
                            <p id="fullNameError" style="color: red; font-size:13px"></p>
                            <div class="mb-3">
                                <input class="form-control" placeholder="Email address" name="userName">
                            </div>
                            <p id="userNameError" style="color: red; font-size:13px"></p>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <p id="pwdError" style="color: red; font-size:13px"></p>
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
                        <hr>
                        <div class="mt-3 d-flex justify-content-between">
                            <button type="Submit" class="btn btn-outline-secondary">Facebook</button>
                            <button type="Submit" class="btn btn-outline-secondary">Google</button>
                        </div>
                    </div>  
                </div>
        </div>
        <?php include('footer.php') ?>
        <script>
            function formValidate() {
                var regex = /^[A-Za-z\s]+$/;
                var fullName = document.myform.fullName.value.trim();
                
                if (fullName == "") {
                    document.getElementById("fullNameError").innerHTML = "Please enter a valid full name";
                    document.myform.firstName.focus();
                    event.preventDefault();
                } else if (!regex.test(fullName)) {
                    document.getElementById("fullNameError").innerHTML = "Full name must contain only letters and spaces";
                    document.myform.firstName.focus();
                    event.preventDefault();
                }

                var userName = document.myform.userName.value;
                if (userName == "") {
                    document.getElementById("userNameError").innerHTML = "Please enter your email address";
                    if (!lastName == "" && !firstName == "") {
                        document.myform.userName.focus();
                    }
                    event.preventDefault();
                }

                var pwd = document.myform.pwd.value;
                if (pwd == "") {
                    document.getElementById("pwdError").innerHTML = "Please enter a valid password";
                    if (!userName == "" && !lastName == "" && !firstName == "") {
                        document.myform.pwd.focus();
                    }
                    event.preventDefault();
                }
            }
        </script>
    </body>
</html>