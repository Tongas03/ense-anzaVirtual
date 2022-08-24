<?php
$httpProtocol = !isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on' ? 'http' : 'https';

$base = $httpProtocol . '://' . $_SERVER['HTTP_HOST'] . '/';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Enseñanza Virtual</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-dark navbar-dark py-1 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="display-4 text-white text-uppercase m-0">Enseñanza Virtual</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <a href="index.html" class="navbar-brand bg-primary px-4 mx-3 d-none d-lg-block">
                <h1 class="display-4 text-white text-uppercase m-0">Enseñanza Virtual</h1>
            </a>
            <div class="navbar-nav ml-auto py-0">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?php include __DIR__ . '/views/stages/stage1.php'; ?>" id="navbarDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false">TRABAJO PRACTICO 1</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                    </ul>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="./stages/stage2.php" id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false">TRABAJO PRACTICO 2</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="./stages/stage3.php" id="navbarDropdownMenuLink3" role="button" data-bs-toggle="dropdown" aria-expanded="false">TRABAJO PRACTICO 3</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                    </ul>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="./stages/stage4.php" id="navbarDropdownMenuLink4" role="button" data-bs-toggle="dropdown" aria-expanded="false">TRABAJO PRACTICO 4</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink4">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="./stages/stage5.php" id="navbarDropdownMenuLink5" role="button" data-bs-toggle="dropdown" aria-expanded="false">TRABAJO PRACTICO 5</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink5">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                    </ul>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="./conclusions.php" id="navbarDropdownMenuLink6" role="button" data-bs-toggle="dropdown" aria-expanded="false">CONCLUSIONES</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink6">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->