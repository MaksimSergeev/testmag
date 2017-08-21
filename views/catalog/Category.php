<?php include ROOT . '/views/layouts/header.php'; ?>
    <!--content-->
    <!---->
    <div class="product">
        <div class="container">
            <div class="col-md-3 product-price">

                <div class=" rsidebar span_1_of_left">
                    <div class="of-left">
                        <h3 class="cate">Categories</h3>
                    </div>
                    <ul class="menu">
                        <ul class="cute">
                            <?php foreach ($categories as $category): ?>
                                <li class="subitem1"><a href="/category/<?php echo $category['id'];?>"><?php echo $category['name'];?></a></li>
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
                            <a href="single.html"><img class="img-responsive " src="images/p1.jpg" alt=""></a>

                        </div>
                        <div class=" fashion-grid1">
                            <h6 class="best2"><a href="single.html">Lorem ipsum dolor sitamet consectetuer </a></h6>

                            <span class=" price-in1"> $40.00</span>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="product-go">
                        <div class=" fashion-grid">
                            <a href="single.html"><img class="img-responsive " src="images/p2.jpg" alt=""></a>

                        </div>
                        <div class="fashion-grid1">
                            <h6 class="best2"><a href="single.html">Lorem ipsum dolor sitamet consectetuer </a></h6>

                            <span class=" price-in1"> $40.00</span>
                        </div>

                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
            <div class="col-md-9 product1">
                <div class=" bottom-product">
                    <?php foreach ($categoryProducts as $product): ?>
                        <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                            <div class="product-at ">
                                <a href="/product/<?php echo $product['id'];?>"><img class="img-responsive" src="<?php echo $product['image'];?>" alt="">
                                    <div class="pro-grid">
                                        <span class="buy-in">Buy Now</span>
                                    </div>
                                </a>
                            </div>
                            <p class="tun"><?php echo $subname = mb_substr($product['name'], 0, 30, 'UTF-8').'...';?></p>
                            <a href="" class="item_add"><p class="number item_price"><i> </i>$<?php echo $product['price'];?></p></a>
                        </div>
                    <?php endforeach; ?>
                    <div class="clearfix"></div>
                </div>

            </div>
            <div class="clearfix"></div>
            <nav class="in">
                <ul class="pagination">
                    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2 <span class="sr-only"></span></a></li>
                    <li><a href="#">3 <span class="sr-only"></span></a></li>
                    <li><a href="#">4 <span class="sr-only"></span></a></li>
                    <li><a href="#">5 <span class="sr-only"></span></a></li>
                    <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span> </a></li>
                </ul>
            </nav>
        </div>

    </div>
    <!---->
<?php include ROOT . '/views/layouts/footer.php'; ?>