<?= $this->include('userSide/includes/top'); ?>

<body>

    <?= $this->include('userSide/includes/searchmodel'); ?>
    <?= $this->include('userSide/includes/header'); ?>
    <?= $this->include('userSide/includes/headerinfo'); ?>
    <?= $this->include('userSide/includes/heroslider'); ?>
    <!-- Features Section Begin -->
    <section class="features-section spad">
        <div class="features-ads">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-features-ads first">
                            <img src="<?= base_url() ?>shop/img/icons/f-delivery.png" alt="">
                            <h4>Free shipping</h4>
                            <p>Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal
                                esuada aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads second">
                            <img src="<?= base_url() ?>shop/img/icons/coin.png" alt="">
                            <h4>100% Money back </h4>
                            <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                                aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads">
                            <img src="<?= base_url() ?>shop/img/icons/chat.png" alt="">
                            <h4>Online support 24/7</h4>
                            <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                                aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Box -->
        <div class="features-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-box-item first-box">
                                    <img src="<?= base_url() ?>shop/img/f-box-1.jpg" alt="">
                                    <div class="box-text">
                                        <span class="trend-year">2019 Party</span>
                                        <h2>Jewelry</h2>
                                        <span class="trend-alert">Trend Allert</span>
                                        <a href="#" class="primary-btn">See More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-box-item second-box">
                                    <img src="<?= base_url() ?>shop/img/f-box-2.jpg" alt="">
                                    <div class="box-text">
                                        <span class="trend-year">2019 Trend</span>
                                        <h2>Footwear</h2>
                                        <span class="trend-alert">Bold & Black</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-box-item large-box">
                            <img src="<?= base_url() ?>shop/img/f-box-3.jpg" alt="">
                            <div class="box-text">
                                <span class="trend-year">2019 Party</span>
                                <h2>Collection</h2>
                                <div class="trend-alert">Trend Allert</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section End -->

    <section class="latest-products spad">
        <div class="container">
            <div class="product-filter">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2>Latest Products</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="product-list">
                <?php foreach ($products as $product): ?>
                    <div class="col-lg-3 col-sm-6 mix all ">
                        <div class="single-product-item">
                            <figure>
                                <a href="<?= base_url() ?>singleprod/<?= $product['id']; ?>"><img
                                        src="<?= base_url() . $product['img'] ?>" alt=""></a>
                                <div class="p-status">
                                    <?= $product['availability'] ?>
                                </div>
                            </figure>
                            <div class="product-text">
                                <h6>
                                    <?= $product['productname'] ?>
                                </h6>
                                <p>$
                                    <?= $product['price'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- Lookbok Section Begin -->
    <section class="lookbok-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 offset-lg-1">
                    <div class="lookbok-left">
                        <div class="section-title">
                            <h2>2019 <br />#lookbook</h2>
                        </div>
                        <p>Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vestibulum malesuada
                            aliquet libero viverra cursus. Aliquam erat volutpat. Morbi id dictum quam, ut commodo
                            lorem. In at nisi nec arcu porttitor aliquet vitae at dui. Sed sollicitudin nulla non leo
                            viverra scelerisque. Phasellus facilisis lobortis metus, sit amet viverra lectus finibus ac.
                            Aenean non felis dapibus, placerat libero auctor, ornare ante. Morbi quis ex eleifend,
                            sodales nulla vitae, scelerisque ante. Nunc id vulputate dui. Suspendisse consectetur rutrum
                            metus nec scelerisque. s</p>
                        <a href="#" class="primary-btn look-btn">See More</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="lookbok-pic">
                        <img src="<?= base_url() ?>shop/img/lookbok.jpg" alt="">
                        <div class="pic-text">fashion</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Lookbok Section End -->

    <?= $this->include('userSide/includes/logosection.php') ?>
    <?= $this->include('userSide/includes/footer.php') ?>
    <?= $this->include('userSide/includes/script.php') ?>




</body>

</html>