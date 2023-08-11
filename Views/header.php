<head>
    <style>
        .navbar{
            padding-left:  0;
            padding-right: 0;
        }

        .navbar-brand img{
            width: 58.85px;
            height: 20.54px;
            margin-left: 4rem;
            
        }
        .navbar-brand img:hover{
            opacity: 0.5;
        }

        .navbar-brand{
            padding: 0 0 0 0;
        }

        #collapsebtn .options{
            margin-bottom: 10px;
            margin-top: 10px;
            
        }
        .nav-link{
            color: black;
            margin: 0 0.7rem 0 0.7rem;
        }
        .nav-link:hover{
            color: black;
            font-weight: 700;
        }

        .options i{
            margin-left: 5px;
            
        }

        .options i:hover{
            cursor: pointer;
            /* background-color: #b2b2b2; */
            font-size: 25px;
        }
    </style>
</head>
<div class="container-fluid d-flex justify-content-end bg-light" id="sign"> 
    <?php if (isset($_SESSION['userName'])) { ?>
        <?php echo "<b>Welcome " .$_SESSION["userName"]; ?>
        <form action="login.php" method="POST">
            <button name="logoutBtn" type="submit">Log Out</button>
        </form>
    <?php } else { ?>  
        <a href="register.php" class="m-2 text-dark"><b>Join us</b></a>
        <a href="login.php" class="m-2 text-dark"><b>Sign in</b></a>
    <?php } ?>
</div>
<nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid">
        <a href="main.php" class="navbar-brand"><img src="assets/Logo_NIKE.svg.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsebtn" aria-controls="collapsebtn" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="collapsebtn"> <!-- Removed unnecessary classes -->
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
            <i class="far fa-user fa-lg" title="User"></i>
        </div>
    </div>
</nav>   