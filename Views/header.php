<head>
    <style>
        .navbar { padding-left:  0; padding-right: 0; }
        .navbar-brand img { width: 58.85px; height: 20.54px; margin-left: 4rem; }
        .navbar-brand img:hover { opacity: 0.5; }
        .navbar-brand { padding: 0 0 0 0; }
        #collapsebtn .options { margin-bottom: 10px; margin-top: 10px; }
        .nav-link { color: black; margin: 0 0.7rem 0 0.7rem; }
        .nav-link:hover { color: black; font-weight: 700; }
        i { margin-left: 5px; }
        i:hover { cursor: pointer; font-size: 25px; }
    </style>
</head>
<div class="container-fluid d-flex justify-content-end bg-light" id="sign"> 
    <?php if (isset($_SESSION['userName'])) { ?>
        <?php echo "<b class='m-2'>Welcome " .$_SESSION["fullName"]; echo "</b>" ?>
    <?php } else { ?>  
        <a href="register.php" class="m-2 text-dark"><b>Join us</b></a>
        <a href="login.php" class="m-2 text-dark"><b>Sign in</b></a>
    <?php } ?>
</div>
<nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid">
        <a href="index.php" class="navbar-brand"><img src="assets/Logo_NIKE.svg.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsebtn" aria-controls="collapsebtn" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="collapsebtn"> 
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="shoes.php" class="nav-link">Shoes</a>
                </li>
                <li class="nav-item">
                    <a href="clothing.php" class="nav-link">Clothing</a>
                </li>
                <li class="nav-item">
                    <a href="accessory.php" class="nav-link">Accessories</a>
                </li>
            </ul>
            <div class="d-md-none options"> <!-- Corrected class name -->
                <i class="fas fa-heart fa-lg" title="Favorites"></i> <!-- Corrected class name and icon prefix -->
                <i class="fas fa-shopping-bag fa-lg" title="Bag items"></i> <!-- Corrected class name and icon prefix -->
                <i class="fas fa-user fa-lg" title="User"></i> <!-- Corrected class name and icon prefix -->
            </div>
        </div>

        <div class="d-none d-md-block" id="searchbar">
            <form class="form-inline">
                <input class="form-control mr-md-2" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>

        <div class="d-none d-md-block options">
            <i class="far fa-heart fa-lg" title="Favorites"></i> <!-- Corrected class name and icon prefix -->
            <i class="fas fa-shopping-bag fa-lg" title="Bag items"></i>
            <?php if (isset($_SESSION['userName'])) { ?>
                    <i id="user" class="far fa-user fa-lg" title="User" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="user">
                        <a class="dropdown-item" href="profile.php">Account</a>
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Orders</a>
                        <a class="dropdown-item" href="#">Favourites</a>
                        <a class="dropdown-item" href="#">Inbox</a>
                        <a class="dropdown-item" href="#">Experiences</a>
                        <a class="dropdown-item" href="#">Account Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.php?action=logout">Log Out</a>
                    </div>
            <?php } ?>
        </div>
    </div>
</nav>  
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 