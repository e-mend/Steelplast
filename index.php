<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steelplast | Revenda de Materiais</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="public/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="public/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="public/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">

    <!-- Javascript -->
    <script defer src="public/js/main.js"></script>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="public/css/colors.css">
    <link rel="stylesheet" href="public/css/animate.css">
</head>
<body>
    <div id="app">
        <header-component></header-component>
        <carousel-component></carousel-component>
        <main-component></main-component>
    </div>

    <script type="text/x-template" id="header-template">
        <header id="header">
            <nav class="navbar navbar-expand-lg navbar-light py-4 bk big">
                <div class="container">
                    <a class="navbar-brand massive" href="#" id="logo-container">
                        <img class="gear-container" id="logo" src="public/images/logo/Logotipo Horizontal-04-modified.png">
                    </a>
                        <div id="gear-container">
                            <i class="bi bi-gear-wide spin gear" id="gear"></i>
                        </div>
                        <div class="gear-container shine" id="gear-2-container">
                            <i class="bi bi-gear-wide-connected spin-reverse gear" id="gear-2"></i>
                        </div>
                        <div class="gear-container" id="gear-5-container">
                            <i class="bi bi-gear-wide-connected spin-slow" id="gear-5"></i>
                        </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse d-flex" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    {{ homeTitle }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    {{ productsTitle }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    {{ aboutTitle }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    {{ contactTitle }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex" id="lang-container">
                        <div class="" class="lang" @click="changeLanguage('pt_BR')">
                            <img src="public\images\icon\icons8-brasil-48.png"  alt="">
                        </div>

                        <div class="" class="lang" @click="changeLanguage('en_US')">
                            <img src="public\images\icon\icons8-eua-48.png" alt="">
                        </div>

                        <div class="" class="lang"  @click="changeLanguage('es_ES')">
                            <img src="public\images\icon\icons8-espanha-2-48.png" alt="">
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </script>

    <script type="text/x-template" id="carousel-template">
        <div id="carousel_" class="d-flex">
            <div class="slidee bk-rd col" v-for="(image, key) in images"  :class="{ transitioning: image.transitioning }">
                <div class="inner bk bk-an mx-auto rounded">
                    <img class="img mirrored-image rounded blur" :src="image.src" :style="image.styles" alt="">
                    <div class="inner-label text-center py-3 text-white fs-5" @click="nextImage(image)">
                    {{ image.m + image.sub + image.plus }} - {{ materials[image.m][image.sub] }}
                    <i class="arrow bi bi-arrow-down-short"></i>
                    </div>
                </div>
            </div>
        </div>
    </script>

    <script type="text/x-template" id="main-template">
        <div class="container mx-auto text-black my-5" id='presentation_'>
            <div v-for="(item, key) in items" :key="item.id">
                <div class='row' :style="item.styles">
                    <div class="col-3 massive my-5">
                    <img src="public\images\logo\Icone 02.jpg" class="icon" alt="">
                        {{ item.title }}
                    </div>
                    <div class="col-9 my-5">
                        {{ item.empty }}
                    </div>
                </div>
            </div>
            <!-- <div v-for="(item, key) in items" :key="item.id">
                <div class='row' :style="item.styles" v-else>
                    <div class="col-9">
                        {{ item.empty }}
                    </div>
                    <div class="col-3 massive">
                        {{ item.title }}
                        <img src="public\images\logo\Icone-01.jpg" class="icon" alt="">
                    </div>
                </div>
            </div> -->
        </div>
    </script>
</body>
</html>