<?php include ROOT . '/views/layouts/header.php'; ?>

    <!--content-->
    <div class="product">
        <div class="container">
            <div class="col-md-3 product-price">

                <div class=" rsidebar span_1_of_left">
                    <div class="of-left">
                        <h3 class="cate">Categories</h3>
                    </div>
                    <ul class="menu">
                        <ul class="cute">
                            <?php foreach ($categories as $categoryItem): ?>
                                <li>
                                    <a href="/category/<?php echo $categoryItem['id']; ?>"><?php echo $categoryItem['name']; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </ul>
                </div>

                <!---->
                <div class="product-bottom">
                    <div class="of-left-in">
                        <h3 class="best">Recommended</h3>
                    </div>
                    <div class="product-go">
                        <div class=" fashion-grid">
                            <a href="#"><img class="img-responsive " src="/template/images/p1.jpg" alt=""></a>

                        </div>
                        <div class=" fashion-grid1">
                            <h6 class="best2"><a href="#">Lorem ipsum dolor sit amet consectetuer </a></h6>

                            <span class=" price-in1"> $37</span>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="product-go">
                        <div class=" fashion-grid">
                            <a href="#"><img class="img-responsive " src="/template/images/p2.jpg" alt=""></a>

                        </div>
                        <div class="fashion-grid1">
                            <h6 class="best2"><a href="#">Lorem ipsum dolor sit amet consectetuer </a></h6>

                            <span class=" price-in1"> $29</span>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 product-price1">
                <div class="of-left1">
                    <h3 class="cate">Product</h3>
                </div>
                <div class="col-md-5 single-top">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="<?php echo $productItem['image']; ?>">
                                <img src="<?php echo $productItem['image']; ?>"/>
                            </li>
                            <li data-thumb="<?php echo $productItem['image']; ?>">
                                <img src="<?php echo $productItem['image']; ?>"/>
                            </li>
                        </ul>
                    </div>
                    <!-- FlexSlider -->
                    <script defer src="/template/js/jquery.flexslider.js"></script>
                    <link rel="stylesheet" href="/template/css/flexslider.css" type="text/css" media="screen"/>

                    <script>
                        // Can also be used with $(document).ready()
                        $(window).load(function () {
                            $('.flexslider').flexslider({
                                animation: "slide",
                                controlNav: "thumbnails"
                            });
                        });
                    </script>
                </div>
                <div class="col-md-7 single-top-in simpleCart_shelfItem">
                    <div class="single-para">
                        <h4><?php echo $productItem['name']; ?></h4>
                        <div class="star-on">
                            <h6>Product code: <?php echo $productItem['code']; ?></h6>
                            <div class="clearfix"></div>
                        </div>
                        <h5 class="item_price">$<?php echo $productItem['price']; ?></h5>
                        <p><?php echo $productItem['description']; ?></p>
                        <div class="clearfix"></div>
                        </ul>
                        <a href="#" class="add-cart item_add">ADD TO CART</a>

                    </div>
                </div>
                <div class="clearfix"></div>
                <hr>
                <!---->


                <div class=" bottom-product">
                    <p class="tun2">New products</p>
                    <?php foreach ($newProducts as $new): ?>
                        <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                            <div class="product-at ">
                                <a href="/product/<?php echo $new['id']; ?>"><img class="img-responsive"
                                                                                  src="<?php echo $new['image']; ?>"
                                                                                  alt="">
                                    <div class="pro-grid">
                                        <span class="buy-in">Buy Now</span>
                                    </div>
                                </a>
                            </div>
                            <p class="tun"><?php echo $subname = mb_substr($new['name'], 0, 30, 'UTF-8') . '...'; ?></p>
                            <a href="#" class="item_add"><p class="number item_price">
                                    $<?php echo $new['price']; ?></p></a>
                        </div>
                    <?php endforeach; ?>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
    <!--//content-->

<?php include ROOT . '/views/layouts/footer.php'; ?>