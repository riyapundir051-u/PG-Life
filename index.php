<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | PG Life</title>

    <?php
    include "includes/head_links.php";
    ?>

    <link href="css/home.css" rel="stylesheet" />
</head>

<body>
    <?php include "includes/header.php"; ?>
    <div id="loading">
    </div>

    <div class="banner-container">
    <div class="search-container">
        <h2>Happiness per Square Foot</h2>

    <form method="GET" action="property_list.php">
        <div class="input-group city-search">
            <input type="text" class="form-control" name="city" placeholder="Enter your city to search for PGs">
            <div class="input-group-append">
                <button class="btn btn-warning" type="submit">
                    Search
                </button>
            </div>
        </div>
    </form>
</div>
</div>

<div class="city-container container">
    <h1 class="city-heading">Major Cities</h1>
<div class="row">
    <div class="col-md-3 col-6 text-center city-card">
        <img src="img/delhi.png" class="city-image">
        <p>Delhi</p>
    </div>

    <div class="col-md-3 col-6 text-center city-card">
        <img src="img/mumbai.png" class="city-image">
        <p>Mumbai</p>
    </div>

    <div class="col-md-3 col-6 text-center city-card">
        <img src="img/bangalore.png" class="city-image">
        <p>Bangalore</p>
    </div>

    <div class="col-md-3 col-6 text-center city-card">
        <img src="img/hyderabad.png" class="city-image">
        <p>Hyderabad</p>
    </div>
</div>
</div>

<?php include "includes/signup_modal.php"; ?>

<?php include "includes/login_modal.php"; ?>

<?php include "includes/footer.php"; ?>
    
</body>

</html>
