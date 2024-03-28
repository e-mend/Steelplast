    <div id="app">
        <header-component></header-component>
        <main>
        <div>
            <div class="container mx-auto text-black presentation fs-4" id="item">
            <div class="mt-1">
                <div class='row mt-5'>
                    <div class="col-12 col-md-3 massive mt-5 text-center">
                        <img class="icon rounded" alt=""
                        src="<?php echo '../../'. $img[$product]['path']; ?>"
                        style="<?php echo $img[$product]['style']; ?>">
                        <p><?php echo $general[$product]; ?></p>
                    </div>
                    <div class="col-12 col-md-9 mt-3">
                        <?php echo $general[$product . 'Body']; ?>
                    </div>
                </div>

                <div class='row mx-auto text-center text-black presentation fs-4 justify-content-center'>
                   <div class="row my-2">
                        <?php if($products[$product]['bars']): ?>
                            <div class="col-12 col-md-3  mt-2 py-3 rounded shadow-lg bg-light">
                                <img src="../../public/images/icon/Barra.png"
                                    class="icony" alt="">
                                <?= $products[$product]['barsTitle']; ?>
                                <?= $products[$product]['bars']; ?>
                            </div>
                        <?php endif; ?>

                        <?php if($products[$product]['tubes']): ?>
                            <div class="col-12 col-md-3  mt-2 py-3 rounded shadow-lg bg-light">
                                <img src="../../public/images/icon/Tubos.png"
                                alt="" class="icony" style="transform: scaleX(-1) !important;"> 
                                <?php echo $products[$product]['tubesTitle']; ?>
                                <?php echo $products[$product]['tubes']; ?>
                            </div>
                        <?php endif; ?>

                        <?php if($products[$product]['plate']): ?>
                            <div class="col-12 col-md-3  mt-2 py-3 rounded shadow-lg bg-light">
                                <img src="../../public/images/icon/plate-flat-bar.jpg" style="transform: scaleX(-1) !important;" alt=""
                                class="icony">
                                <?php echo $products[$product]['plateTitle']; ?>
                                <?php echo $products[$product]['plate']; ?>
                            </div>
                        <?php endif; ?>

                        <?php if($products[$product]['coil']): ?>
                            <div class="col-12 col-md-3  mt-2 py-3 rounded shadow-lg bg-light">
                                <img src="../../public/images/icon/Bobina.png"
                                class="icony" alt="">
                                <?php echo $products[$product]['coilTitle']; ?>
                                <?php echo $products[$product]['coil']; ?>
                            </div>
                        <?php endif; ?>
                   </div>
                   <div class="col-12 mt-2">
                        <?php echo $products[$product]['norms']; ?>
                    </div>

                <?php if($product === 'flanges'): ?>
                    <div class="mt-3 row">
                        <img src="../../public/images/icon/round-wall-flange.webp" class="col-3" 
                        style="max-height: 138px; object-fit: cover" alt="">
                        <div class="col-9">
                            <?php foreach ($products[$product]['normsLoop'] as $value): ?>
                                <aa>
                                    <?php echo $value; ?>
                                </aa>
                                <br>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-12 mt-1">
                        <?php echo $products[$product]['connectionsTitle']; ?>
                    </div>
                    <div class="mt-3 row">
                        <img src="../../public/images/icon/flg.png" alt="" class="col-3">
                        <div class="col-9">
                            <?php foreach ($products[$product]['connections'] as $value): ?>
                                <aa>
                                    <?php echo $value; ?>
                                </aa>
                                <br>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <div class='row border-top rd my-0'></div>
            </div>
            </div>
        </div>
        </main>
        <form-component></form-component>
    </div>
