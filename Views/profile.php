<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta viewport="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Member Profile</title>
    <link rel="icon" type="image/x-icon" href="../Views/assets/nike_favicon.png">
</head> 
<body>
<?php include('header.php'); ?>
<div class="container mt-3 mb-3">
    <div class="row">
        <div class="col-2">
        <label for="profile-image" class="rounded-circle bg-light d-flex justify-content-center align-items-center text-white" style="width: 150px; height: 150px; font-size: 36px; cursor: pointer;">

        </label>
        <form method="post" enctype="multipart/form-data" style="display: none;">
            <input type="file" id="profile-image" name="file" accept="image/*">
            <input type="submit" name="upload" value="Upload">
        </form>
        </div>
        <div class="col d-flex flex-column justify-content-center">
            <h2><?php echo  $_SESSION['fullName']; ?></h2>
            <p class="text-decoration-none">Nike Member Since 2023</p>
        </div>
    </div>
</div>
<div>

</div>
<?php include('footer.php') ?>
</body>

</html>