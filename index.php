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
        <form-component></form-component>
        <!-- <footer-component></footer-component> -->
    </div>

    <script type="text/x-template" id="header-template">
        <header id="header">
            <nav class="navbar navbar-expand-lg navbar-light py-4 bk big">
                <div class="container">
                    <a class="navbar-brand massive" href="#" id="logo-container">
                        <img class="gear-container" id="logo" src="public/images/logo/Logotipo Horizontal-04-modified.png">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse d-flex" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link fs-4" href="#">
                                    {{ homeTitle }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-4" href="#">
                                    {{ productsTitle }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-4" href="#">
                                    {{ aboutTitle }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-4" href="#">
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

    <script type="text/x-template" id="carousel-template" data-bs-ride="carousel">
        <div id="carousel_" class="bk-rd">
            <div id="carouselExample" class="carousel rounded slide">
                <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                        <img src="public/images/products/M1T.png" class="d-block w-100" alt="..." style="top: 30%;left: 50%;">
                    </div>
                    <div class="carousel-item">
                        <img src="public/images/products/B2.png" class="d-block w-100" alt="..." style="top: 50%;left: 50%;">
                    </div>
                    <div class="carousel-item rounded">
                        <img src="public/images/products/A1T.jpg" class="d-block w-100" alt="..." style="top: 70%;left: 50%;">
                    </div>
                    <div class="carousel-item rounded">
                        <img src="public/images/products/P2T.jpeg" class="d-block w-100" alt="..." style="top: 70%;left: 50%;">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </script>

    <script type="text/x-template" id="main-template">
        <div class="container mx-auto text-black my-5 presentation fs-5"  id="item">
            <div v-for="(item, key) in items" class="" :key="item.id">
                <div class='row' :style="item.styles">
                    <div class="col-3 massive mt-5">
                        <img src="public\images\logo\Icone 02.jpg" class="icon" alt="">
                        {{ item.title }}
                    </div>
                    <div class="col-9 mt-5">
                        {{ item.empty }}
                    </div>
                </div>
            </div>  
            <div class='row border-top rd my-0'></div>
            <div class="mx-auto text-black d-flex">
                <div class='row'>
                    <div class="col-9">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos delectus voluptate ullam error harum. Voluptas harum culpa dolore odit quasi explicabo, cum possimus doloremque at itaque? Nostrum eos eius quo.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos delectus voluptate ullam error harum. Voluptas harum culpa dolore odit quasi explicabo, cum possimus doloremque at itaque? Nostrum eos eius quo.
                    </div>  
                    <div class="col-3 massive">
                        <img src="public\images\logo\Icone-01.jpg" class="icon" alt="">
                    </div>
                </div>
            </div>
            <div class='row border-top rd my-0'></div>
            <div class="mx-auto text-black d-flex">
                <div class='row'>
                    <div class="col-3 massive">
                        <img src="public\images\logo\Icone 02.jpg" class="icon" alt="">
                    </div>
                    <div class="col-9">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos delectus voluptate ullam error harum. Voluptas harum culpa dolore odit quasi explicabo, cum possimus doloremque at itaque? Nostrum eos eius quo.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos delectus voluptate ullam error harum. Voluptas harum culpa dolore odit quasi explicabo, cum possimus doloremque at itaque? Nostrum eos eius quo.
                    </div>  
                </div>
            </div>

            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <img src="public\images\logo\Icone-01.jpg" class="rounded me-2 small-icon" alt="...">
                            <strong class="me-auto">{{ toast.title }}</strong>
                            <small>{{ toast.time }}</small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            {{ toast.body }}
                        </div>
                    </div>
                </div>
            </div>
    </script>

    <script type="text/x-template" id="form-template">
        <div class="bk py-5 rounded">
            <div class="d-flex">
                <div class="row mt-5 mx-auto col-12">
                    <div class="btn btn-danger mx-auto col-3 fs-4" data-bs-toggle="modal" data-bs-target="#budgetModal">
                        {{ formBtn }}
                    </div>
                </div>
            </div>

            <div class="modal fade" id="budgetModal" tabindex="-1" aria-labelledby="budgetModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="budgetModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-3 mx-auto fs-3 justify-content-center red-btn">
                                {{ formQuestion }}
                            </div>
                            <div class="row mt-2 mx-auto justify-content-center red-btn"">
                                <div class="btn btn-outline-danger col-6 fs-5" @click="showResponse(1)">
                                    {{ translation.yes }}
                                </div>
                                <div class="btn btn-outline-danger col-6 fs-5"  @click="showResponse(2)">
                                    {{ translation.no }}
                                </div>
                            </div>
                            <div class="row mt-2 mx-auto justify-content-center" :class="{ fade: hideResponse, dNone: hideResponse }">
                                <div class="btn btn-danger col-12 fs-5">
                                    {{ translation.response }}
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn btn-danger">
                                Save changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </script>
</body>
</html>

