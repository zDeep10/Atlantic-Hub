<?php
$current_page =  $_SERVER['REQUEST_URI'];
$root = $_SERVER['DOCUMENT_ROOT'];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="description" content=""> -->
    <link rel="shortcut icon" href="../assets/icons/fav-icon.png" type="image/x-icon">
    <title>Atlantic Hub</title>

    <!-- Bootstrap CSS -->
    <link href="../assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="../assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SPLINE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" integrity="sha256-5uKiXEwbaQh9cgd2/5Vp6WmMnsUr3VZZw0a8rKnOKNU=" crossorigin="anonymous">

    <script defer src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js" integrity="sha256-FZsW7H2V5X9TGinSjjwYJ419Xka27I8XPDmWryGlWtw=" crossorigin="anonymous"></script>

    <!-- STYLE -->
    <link rel="stylesheet" href="../assets/css/compressed/style.min.css">
    <link rel="stylesheet" href="../assets/font.css">
    <link rel="stylesheet" href="../assets/custom.css">

    <!-- Google Fonts Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <!-- HEADER -->
    <header id="cotacao">
        <div class="container px-4 px-sm-0 px-md-3 px-lg-4 py-2">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-between justify-content-lg-end gap-4 px-lg-0">
                    <div class="taxa">
                        <strong class="small text-white me-1 fw-bold">
                            € Cotação
                        </strong>
                        R$5,56489
                    </div>

                    <div class="horario text-center text-white px-md-3 px-3 py-1 rounded">
                        <strong class="small">
                            HORÁRIO DE LISBOA
                        </strong>
                        14:50
                    </div>
                </div>
            </div>
        </div>
    </header>

    <header id="header" class="position-fixed w-100">
        <div class="px-lg-5 px-3 mt-2">
            <nav class="navbar navbar-light navbar-expand-lg bg-white py-0" aria-label="First navbar example">
                <div class="container-fluid px-3 px-md-3 px-lg-4 px-xl-5">
                    <div class="row justify-content-between align-items-center w-100 mx-0">
                        <a class="navbar-brand col-lg-2 px-lg-0 col-5 me-0" href="/">
                            <img class="d-block img-fluid" src="../assets/images/atlantic_logo.png" alt="Logo Atlantic Hub">
                        </a>

                        <button class="navbar-toggler border-0 col-3 text-end" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-symbols-outlined" style="font-size: 40px; font-weight: 300;">
                                menu
                            </span>
                        </button>

                        <div class="collapse navbar-collapse px-4 px-md-0 col-6" id="menu">
                            <ul class="navbar-nav ms-lg-auto me-lg-0 ms-0 me-auto text-end mb-lg-0 mb-2 gap-xl-2 gap-xxl-3 gap-md-1 align-items-lg-center">

                                <button class="navbar-toggler border-0 text-end pe-1 my-4 w-25 ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="material-symbols-outlined text-white" style="font-size: 42px; font-weight: 200;">
                                        close
                                    </span>
                                </button>
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/pages/quem-somos.php">Quem somos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/pages/atlantic-marketfit.php">Estudo de Mercado</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link pe-3 dropdown-toggle" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Momento</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                        <li><a class="dropdown-item pe-lg-2 pe-3" href="#">Quero conhecer</a></li>
                                        <li><a class="dropdown-item pe-lg-2 pe-3" href="#">Já decidi e quero avançar</a></li>
                                        <li><a class="dropdown-item pe-lg-2 pe-3" href="#">Já estou em portugal e quero tracionar</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pe-3" href="/pages/ecossistema.php">Ecossistema</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pe-3" href="/pages/blog.php">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pe-3" href="/pages/contato.php">Contato</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pe-3" href="/pages/vagas.php">Vagas</a>
                                </li>
                                <li class="nav-item d-lg-block d-none">
                                    <a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#search-modal">
                                        <img src="../assets/icons/icon-search-blue.svg" alt="">
                                    </a>
                                </li>
                            </ul>
                            <form class="search-form mb-5 pb-5 col-lg-2 d-lg-none d-flex">
                                <input class="form-control search-form-input" type="text" placeholder="Pesquisar" aria-label="Pesquisar">
                                <img src="../assets/icons/icon-search-white.svg" alt="">
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Modal -->
    <div class="modal fade" id="search-modal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form class="search-form-modal mb-5 pb-5 d-flex">
                        <input class="form-control search-form-input-modal" type="text" placeholder="Escreva aqui..." aria-label="Pesquisar">
                        <img src="../assets/icons/icon-search-blue.svg" alt="">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <main id="main">