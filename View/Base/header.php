<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steelplast | Revenda de Materiais</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../public/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../public/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../public/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../public/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="../public/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>

    <!-- Javascript -->
    <script defer src="../public/js/main.js"></script>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../public/css/colors.css">
    <link rel="stylesheet" href="../public/css/animate.css">
</head>
<body>

    <script type="text/x-template" id="header-template">
        <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light py-4 bk big">
            <div class="container-fluid">
                <a class="navbar-brand massive" href="/" id="logo-container">
                    <img class="gear-container" id="logo" src="../public/images/logo/Logotipo Horizontal-04-modified.png">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link fs-4" href="#item">
                                {{ homeTitle }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4" href="#item">
                                {{ productsTitle }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4" href="#item" @click="changeItens('about')">
                                {{ aboutTitle }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4" href="#btn" data-bs-toggle="modal" data-bs-target="#budgetModal">
                                {{ contactTitle }}
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex" id="lang-container">
                    <div class="" class="lang" @click="changeLanguage('pt_BR')">
                        <img src="../public/images/icon/icons8-brasil-48.png"  alt="">
                    </div>

                    <div class="" class="lang" @click="changeLanguage('en_US')">
                        <img src="../public/images/icon/icons8-eua-48.png" alt="">
                    </div>

                    <div class="" class="lang"  @click="changeLanguage('es_ES')">
                        <img src="../public/images/icon/icons8-espanha-2-48.png" alt="">
                    </div>

                    <div class="" class="lang"  @click="changeLanguage('fr_FR')">
                        <img src="../public/images/icon/icons8-frança-48.png" alt="">
                    </div>
                </div>
            </div>
        </nav>
        </header>
    </script>