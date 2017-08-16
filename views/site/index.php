<?php include ROOT . '/views/layouts/header.php'; ?>
    <!--banner-->
    <div class="banner">
        <script src="/template/js/responsiveslides.min.js"></script>
        <script>
            $(function () {
                $(".rslides").responsiveSlides({
                    auto: true,
                    nav: true
                });
            });
        </script>
        <div class="rslides">
            <li>
                <a href="single.html"><img src="/template/images/1.jpg" alt="">
                    <div class="banner-text">
                        <h3>Circular Saws</h3>
                        <p>Durable circular saws.</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="single.html"><img src="/template/images/2.jpg" alt="">
                    <div class="banner-text">
                        <h3>Hammer Drils</h3>
                        <p>Power hammer drils.</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="single.html"><img src="/template/images/3.jpg" alt="">
                    <div class="banner-text">
                        <h3>Grinders</h3>
                        <p>High-quality grinders.</p>
                    </div>
                </a>
            </li>
        </div>
    </div>
    <!--banner-->
    <!--content-->
    <div class="content">
        <div class="container">
            <div class="content-top">
                <h1>POWER TOOLS</h1>
                <div class="grid-in">
                    <?php foreach ($categories as $categoryItem): ?>
                    <div class="col-md-4 grid-top">
                        <a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive"
                                                                                                src="/template/images/pi1.jpg"
                                                                                                alt="">
                            <div class="b-wrapper">
                                <h3 class="b-animate b-from-left    b-delay03 ">
                                    <span>Hammer drills</span>
                                </h3>
                            </div>
                        </a>
                        <p><a href="/category/<?php echo $categoryItem['id'];?>">
                                <?php echo $categoryItem['name'];?>
                           </a>
                        </p>
                    </div>
                    <?php endforeach; ?>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--content-->
<?php include ROOT . '/views/layouts/footer.php'; ?>