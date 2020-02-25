<?php 
require("config/page_config.php");
?>
<!doctype html>
<html lang="en">

<head>
    <title><?php echo $pageTitle; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="#">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <!-- header start -->
    <header>
        <!-- section top_nav start -->
        <section class="top_navbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex float-right mt-2">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="cloud.php" class="nav_item1 pr-3"><i
                                            class="fa fa-cloud" aria-hidden="true"></i>&nbsp;| Cloud</a></li>
                                <li class="list-inline-item"><a href="business_email.php" class="nav_item2 pr-3"><i
                                            class="fa fa-envelope" aria-hidden="true"></i>&nbsp;| Email</a></li>
                                <li class="list-inline-item"><a href="ssl_certifiaction.php" class="nav_item3"><i
                                            class="fa fa-lock" aria-hidden="true"></i>&nbsp;| Security</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section top_nav end -->

        <!-- section logo start -->
        <section class="logo my-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/logo.gif" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>
        </section>
        <!-- section logo end -->


        <section class="main_nav">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="container">
                    <ul class="navbar-nav">
                        <li class="nav-item active home_nav">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active pl-5">
                            <a class="nav-link" href="cloud.php">Cloud</a>
                        </li>
                        <li class="nav-item dropdown active pl-5">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Email
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="business_email.php">Business Email</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="g_suite.php">G Suite</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown active pl-5">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Security
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="ssl_certifiaction.php">SSl Security</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="site_lock.php">Site Lock</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="codeguard.php">Code Guard</a>
                            </div>
                        </li>
                        <li class="nav-item active pl-5">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
        </section>
    </header>
    <!-- header end -->