<?= $this->include('userSide/includes/top'); ?>

<body>

    <?= $this->include('userSide/includes/searchmodel'); ?>
    <?= $this->include('userSide/includes/header'); ?>
    <?= $this->include('userSide/includes/headerinfo'); ?>
    <?= $this->include('userSide/includes/heroslider'); ?>

    <section class="categories-page spad">
        <div class="container">
            <!-- Categories Filter and Sort -->
            <div class="categories-controls">
                <!-- Sort Dropdown and Product Count -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="categories-filter">

                            <div class="cf-right">
                                <span>
                                    <?= count($products) ?> Products
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($products as $product): ?>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-product-item">
                            <figure>
                                <img src="<?= base_url() . $product['img'] ?>" alt="">
                                <div class="p-status">
                                    <?= $product['status'] ?>
                                </div>
                                <!-- Add logic for pop-up if needed -->
                            </figure>
                            <div class="product-text">
                                <a href="<?= base_url() ?>singleprod/<?= $product['id']; ?>">
                                    <h6>
                                        <?= $product['productname'] ?>
                                    </h6>
                                </a>
                                <p>$
                                    <?= $product['price'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- Load More Button -->
            <div class="more-product">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="#" class="primary-btn">Load More</a>
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