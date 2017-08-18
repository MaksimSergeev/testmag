<?php include ROOT.'/views/layouts/header.php'; ?>

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
                                <li class="subitem1"><a href="/category/<?php echo $categoryItem['id'];?>"><?php echo $categoryItem['name'];?></a></li>
                                <?php endforeach; ?>
                            </ul>
                    </ul>
                </div>

                <!---->
                <div class="product-bottom">
                    <div class="of-left-in">
                        <h3 class="best">Best Sellers</h3>
                    </div>
                    <div class="product-go">
                        <div class=" fashion-grid">
                            <a href="#"><img class="img-responsive " src="/template/images/p1.jpg" alt=""></a>

                        </div>
                        <div class=" fashion-grid1">
                            <h6 class="best2"><a href="#">Lorem ipsum dolor sit amet consectetuer </a></h6>

                            <span class=" price-in1"> $39.99</span>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="product-go">
                        <div class=" fashion-grid">
                            <a href="#"><img class="img-responsive " src="/template/images/p2.jpg" alt=""></a>

                        </div>
                        <div class="fashion-grid1">
                            <h6 class="best2"><a href="#">Lorem ipsum dolor sit amet consectetuer </a></h6>

                            <span class=" price-in1"> $29.99</span>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 product-price1">
                <div class="col-md-5 single-top">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="/template/images/si.jpg">
                                <img src="/template/images/si.jpg"/>
                            </li>
                            <li data-thumb="/template/images/si1.jpg">
                                <img src="/template/images/si1.jpg"/>
                            </li>
                            <li data-thumb="/template/images/si2.jpg">
                                <img src="/template/images/si2.jpg"/>
                            </li>
                            <li data-thumb="/template/images/si.jpg">
                                <img src="/template/images/si.jpg"/>
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
                    <div class="single-para ">
                        <h4>Lorem Ipsum</h4>
                        <div class="star-on">

                            <div class="clearfix"></div>
                        </div>

                        <h5 class="item_price">$ 95.00</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                            ut laoreet dolore magna aliquam erat dvsdgdsg dhyjytjyt rhrehtrhr trhrthrthrt</p>
                                <div class="clearfix"></div>
                            </ul>
                        <a href="#" class="add-cart item_add">ADD TO CART</a>

                    </div>
                </div>
                <div class="clearfix"></div>
                <hr>
                <!---->
   

                <div class=" bottom-product">
                <p class="tun">Other products</p>
                    <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                        <div class="product-at ">
                            <a href="#"><img class="img-responsive" src="/template/images/pi3.jpg" alt="">
                                <div class="pro-grid">
                                    <span class="buy-in">Buy Now</span>
                                </div>
                            </a>
                        </div>
                        <p class="tun">It is a long established fact that a reader</p>
                        <a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>
                    </div>
                    <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                        <div class="product-at ">
                            <a href="#"><img class="img-responsive" src="/template/images/pi1.jpg" alt="">
                                <div class="pro-grid">
                                    <span class="buy-in">Buy Now</span>
                                </div>
                            </a>
                        </div>
                        <p class="tun">It is a long established fact that a reader</p>
                        <a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a></div>
                    <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                        <div class="product-at ">
                            <a href="#"><img class="img-responsive" src="/template/images/pi4.jpg" alt="">
                                <div class="pro-grid">
                                    <span class="buy-in">Buy Now</span>
                                </div>
                            </a>
                        </div>
                        <p class="tun">It is a long established fact that a reader</p>
                        <a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a></div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
    <!--//content-->

<?php include ROOT.'/views/layouts/footer.php'; ?>