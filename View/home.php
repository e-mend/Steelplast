
<body>
    <div id="app">
        <header-component></header-component>
        <carousel-component></carousel-component>
        <main-component></main-component>
        <form-component></form-component>
    </div>

    <script type="text/x-template" id="header-template">
        <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light py-4 bk big">
    <div class="container-fluid">
        <a class="navbar-brand massive" href="#" id="logo-container">
            <img class="gear-container" id="logo" src="public/images/logo/Logotipo Horizontal-04-modified.png">
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
                <img src="public\images\icon\icons8-brasil-48.png"  alt="">
            </div>

            <div class="" class="lang" @click="changeLanguage('en_US')">
                <img src="public\images\icon\icons8-eua-48.png" alt="">
            </div>

            <div class="" class="lang"  @click="changeLanguage('es_ES')">
                <img src="public\images\icon\icons8-espanha-2-48.png" alt="">
            </div>

            <div class="" class="lang"  @click="changeLanguage('fr_FR')">
                <img src="public\images\icon\icons8-frança-48.png" alt="">
            </div>
        </div>
    </div>
</nav>

        </header>
    </script>

    <script type="text/x-template" id="carousel-template" data-bs-ride="carousel">
        <div id="carousel_" class="bk-rd rounded-bottom">
            <div id="carouselExample" class="carousel rounded slide">
                <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                        <img src="public/images/products/M1T.png" class="d-block w-100" alt="..." style="top: 40%;left: 50%;">
                        <a href="#item">
                            <div class="carousel-inner-inner rounded text-center" @click="changeItens('metal')">
                                {{ translate.metal }}
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <img src="public/images/products/rubber/C9.png" class="d-block w-100" alt="..." style="transform: scaleX(-1);">
                        <a href="#item">
                            <div class="carousel-inner-inner text-center" @click="changeItens('rubber')">
                                {{ translate.rubber }}
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item rounded">
                        <img src="public/images/products/A1T.jpg" class="d-block w-100" alt="..." style="top: 70%;left: 50%;">
                        <a href="#item">
                            <div class="carousel-inner-inner text-center" @click="changeItens('steel')">
                                {{ translate.steel }}
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item rounded">
                        <img src="public/images/products/plast2/P5.jpg" class="d-block w-100 mirrored-image" alt="..." style="top: -15%;left: 0%;">
                        <a href="#item">
                            <div class="carousel-inner-inner text-center" @click="changeItens('plastic')">
                                {{ translate.plastic }}
                            </div>
                        </a>
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
        <div class="container mx-auto text-black presentation fs-4" id="item">
            <div v-for="(item, key) in activeItens" class="mt-1" :class="item.class">
                <div v-if="item.body != ''" class='row mt-5' :style="item.styles" :class="item.rowClass">
                    <div class="col-12 col-md-3 massive mt-5 text-center">
                        <img :src="item.src" v-if="item.src != '' " :style="item.img.styles" 
                        class="icon rounded" alt="">
                        <button v-if="!item.btn" @click="loadProdukt(key, item.type)" :class="{disabled: item.disabled}" class="btn btn-danger-play w-100">{{ item.title }}</button>
                        <p v-else>{{ item.title }}</p>
                    </div>
                    <div class="col-12 col-md-9 mt-3" :class="item.bodyClass">
                        {{ item.body }}
                    </div>
                </div>

                <div v-if="item.extra" class='row mx-auto text-center text-black presentation fs-4 justify-content-center'>
                   <div class="row my-2">
                        <div class="col-12 col-md-3  mt-2 py-3 rounded shadow-lg bg-light" v-if="item.extra['bars']">
                        <img src="public/images/icon/Barra.png"
                            class="icony" alt="">
                         {{ item.extra['barsTitle'] }} {{ item.extra['bars'] }}
                        </div>
                        <div class="col-12 col-md-3  mt-2 py-3 rounded shadow-lg bg-light" v-if="item.extra['tubes']">
                            <img src="public/images/icon/Tubos.png"
                            alt="" class="icony" style="transform: scaleX(-1) !important;"> {{ item.extra['tubesTitle'] }} {{ item.extra['tubes'] }}
                        </div>
                        <div class="col-12 col-md-3  mt-2 py-3 rounded shadow-lg bg-light" v-if="item.extra['plate']">
                        <img src="public/images/icon/plate-flat-bar.jpg" style="transform: scaleX(-1) !important;" alt=""
                        class="icony">
                            {{ item.extra['plateTitle'] }} {{ item.extra['plate'] }}
                        </div>
                        <div class="col-12 col-md-3  mt-2 py-3 rounded shadow-lg bg-light" v-if="item.extra['coil']">
                            <img src="public/images/icon/Bobina.png"
                            class="icony" alt="">
                            {{ item.extra['coilTitle'] }} {{ item.extra['coil'] }}
                        </div>
                   </div>
                   <div class="col-12 mt-2">
                        {{ item.extra['workWith'] }}
                    </div>
                    <div class="col-12" class="col-12 mt-1">
                        {{ item.extra['norms'] }}
                    </div>
                    <div v-if="item.extra['normsLoop']" class="mt-3 row">
                        <img src="public/images/icon/round-wall-flange.webp" class="col-3" style="max-height: 138px; object-fit: cover" alt="">
                        <div class="col-9">
                            <aa v-for="a in item.extra['normsLoop']">
                                {{ a }}
                                <br>
                            </aa>
                        </div>
                    </div>
                    <div class="col-12 mt-1">
                        {{ item.extra['connectionsTitle'] }}
                    </div>
                    <div v-if="item.extra['connections']" class="mt-3 row">
                        <img src="public/images/icon/flg.png" alt="" class="col-3">
                        <div class="col-9">
                            <aa class="" v-for="b in item.extra['connections']">
                            {{ b }}
                            <br>
                            </aa>
                        </div>
                    </div>
                </div>

                <div v-if="!item.noLine" class='row border-top rd my-0'></div>
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
</body>
</html>

