<?= $this->include('userSide/includes/top'); ?>

<body>

    <?= $this->include('userSide/includes/searchmodel'); ?>
    <?= $this->include('userSide/includes/header'); ?>
    <?= $this->include('userSide/includes/headerinfo'); ?>
    <?= $this->include('userSide/includes/heroslider'); ?>

    <!-- Product Page Section Begin -->
    <section class="product-page">
        <div class="container">
            <div class="product-control">
                <a href="#">Previous</a>
                <a href="#">Next</a>
            </div>
            <div class="row">
                <div class="col-lg-6">

                    <div class="product-img">
                        <figure>
                            <img src="<?= base_url() . $products['img'] ?>" alt="<?= $products['productname'] ?>">
                            <!-- Check if the product is new and display the p-status accordingly -->
                            <?php if ($products['availability'] === 'new'): ?>
                                <div class="p-status">new</div>
                            <?php endif; ?>
                        </figure>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="product-content">
                        <h2>
                            <?= $products['productname'] ?>
                        </h2>
                        <div class="pc-meta">
                            <h5>$
                                <?= $products['price'] ?>
                            </h5>
                            <div class="rating">
                                <!-- Add your rating display logic here -->
                            </div>
                        </div>
                        <p>
                            <?= $products['details'] ?>
                        </p>
                        <ul class="tags">
                            <li><span>Category :</span>
                                <?= $products['category'] ?>
                            </li>
                            <!-- Add tags or additional product information here -->
                        </ul>
                        <div class="product-quantity">
                            <div class="pro-qty">
                                <input type="text" value="1">
                            </div>
                        </div>
                        <a href="#" class="primary-btn pc-btn">Add to cart</a>
                        <ul class="p-info">
                            <!-- Add additional information, reviews, and product care here -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Page Section End -->




    <?= $this->include('userSide/includes/logosection.php') ?>
    <?= $this->include('userSide/includes/footer.php') ?>
    <?= $this->include('userSide/includes/script.php') ?>

</body>

</html>