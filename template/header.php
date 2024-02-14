<!-- /*
* Bootstrap 5
* Template Name: book
*/ -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="teerataranga.com">
    <link rel="shortcut icon" href="favicon.png" sizes="512x512" type="image/x-icon">

    <title class="notranslate"><?php echo $title; ?></title>
    <meta property="og:type" content="company" />
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="keywords" content="<?php echo $keywords; ?>" />
    <meta property="og:title"content="<?php echo $og_title; ?>" />
    <meta name="twitter:title" content="<?php echo $twitter_title; ?>" />
    <meta property="og:url" content="https://teerataranga.com" />
    <link rel="canonical" href="teerataranga.com" />
    <meta property="og:description" content="<?php echo $og_description;  ?>" />
    <meta property="twitter:description" content="<?php echo $twitter_description; ?>" />
    <meta property="og:keywords" content="<?php echo $og_key; ?>" />

 
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    

</head>

<body>

    <!-- Start Header/Navigation -->
    <div class="nav-container">
        <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Book navigation bar">

            <div class="container">
                <a class="navbar-brand nav-log-cont" href="index">
                    <img src="images/logo.png" alt="website logo">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsBook"
                    aria-controls="navbarsBook" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsBook">
                    <?php
                    $front_page = basename($_SERVER['REQUEST_URI']);
                    // echo "<script> console.log('$front_page')</script>";
                    ?>

                    <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0" id="custom-navbar-nav">
                        <li
                            class="<?php echo ($front_page == "book" || $front_page == "index") ? 'head-menu active' : 'head-menu'; ?>">
                            <a class="nav-link" href="index">Home</a></li>
                        <li class="<?php echo ($front_page == "about") ? 'head-menu active' : 'head-menu'; ?>"><a
                            class="nav-link" href="about">About us</a></li>
                        <li class="<?php echo ($front_page == "shop") ? 'head-menu active' : 'head-menu'; ?>"><a
                            class="nav-link" href="shop">Shop</a></li>
                        <li class="<?php echo ($front_page == "services") ? 'head-menu active' : 'head-menu'; ?>"><a
                            class="nav-link" href="services">Services</a></li>
                        <!-- <li class="<?php echo ($front_page == "blog") ? 'head-menu active' : 'head-menu'; ?>"><a class="nav-link" href="blog">Blog</a></li> -->
                        <li class="<?php echo ($front_page == "contact") ? 'head-menu active' : 'head-menu'; ?>"><a
                            class="nav-link" href="contact">Contact us</a></li>
                    </ul>
                </div>
                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li><a class="nav-link" href="#"><img src="images/user.svg"></a></li>
                    <li><a class="nav-link" href="cart"><img src="images/cart.svg"></a></li>
                </ul>
            </div>

        </nav>

    </div>
    <!-- End Header/Navigation -->

    <main class="main-container">