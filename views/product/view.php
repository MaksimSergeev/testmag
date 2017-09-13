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
                    <?php foreach ($recommendedProducts as $recommended): ?>
                        <div class="product-go">
                            <div class=" fashion-grid">
                                <a href="/product/<?php echo $recommended['id']; ?>"><img class="img-responsive " src="<?php echo $recommended['image']; ?>" alt=""></a>
                            </div>
                            <div class=" fashion-grid1">
                                <h6 class="best2"><a href="/product/<?php echo $recommended['id']; ?>"><?php echo $subname = mb_substr($recommended['name'], 0, 30, 'UTF-8') . '...'; ?></a></h6>

                                <span class=" price-in1">$<?php echo $recommended['price']; ?></span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    <?php endforeach; ?>
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
                        <a href="//" data-id="<?php echo $productItem['id']; ?>" class="add-cart item_add">ADD TO CART</a>

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
                            <a href="//" data-id="<?php echo $new['id'];?>" class="item_add">
                                <p class="number item_price">$<?php echo $new['price']; ?></p>
                            </a>
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