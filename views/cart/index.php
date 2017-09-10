<?php include ROOT . '/views/layouts/header.php'; ?>

    <!--content-->

    <div class="container">
        <div class="row">
        <div class="check">
            <h1>My Shopping Cart:</h1>

            <?php if ($productsInCart): ?>
                <div class="col-md-9">
                <?php foreach ($products as $product): ?>

                <div class="col-md-12 cart-items">
                    <div class="cart-header" id="<?php echo $product['id']; ?>">
                        <div class="close1" b-id="<?php echo $product['id']; ?>"></div>
                        <div class="cart-sec">
                            <div class="cart-item">
                                <img src="<?php echo $product['image']; ?>" class="img-responsive" alt=""/>
                            </div>
                            <div class="cart-item-info">
                                <h3><a href="/product/<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a><span>Product code: <?php echo $product['code']; ?></span></h3>

                                <div class="price-item">
                                    <p>Quantity: <?php echo $productsInCart[$product['id']]; ?></p>
                                    <span>One item price: $<?php echo $product['price']; ?></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
                </div>
            <?php else: ?>
            <div class="col-md-9 cart-items">
                <div class="cart-empty">
                <h3>--Cart is empty--</h3>
                </div>
                <div class="clearfix"></div>
            </div>
            <?php endif; ?>
            <div class="col-md-3 cart-total">
                <a class="continue" href="/catalog">Continue Shopping</a>
                <div class="price-details">
                    <h3>Price Details</h3>
                </div>

                <ul class="total_price">
                    <li class="last_price"><h4>TOTAL:</h4></li>
                    <li class="last_price">
                        <span>$</span>
                        <span class="t-price"><?php if ($productsInCart) { echo $totalPrice; } else { echo 0; }; ?></span></li>
                    <div class="clearfix"></div>
                </ul>

                <div class="clearfix"></div>
                <a class="order" href="/cart/checkout">Place Order</a>
            </div>

            <div class="clearfix"></div>
        </div>
        </div>
    </div>
    <!--content-->

<?php include ROOT . '/views/layouts/footer.php'; ?>