<?php include ROOT . '/views/layouts/header.php'; ?>

<!--content-->
<div class="container">
    <div class="register">
        <h1>Order</h1>

        <?php if ($result): ?>

            <div class="order-complete">
                <h3>Order complete!</h3>
                <h3>We will contact you soon</h3>
            </div>

        <?php else: ?>

        <div class="order-complete">
        <h3>Selected items: <?php echo $totalQuantity; ?> , total price: $<?php echo $totalPrice; ?></h3>
        </div>

        <?php if (!$result): ?>

        <div class="order">
        <h4>To complete the order, please fill out the form:</h4>
        </div>
        <form action="#" method="post">
            <div class="col-md-offset-3 col-md-6 register-top-grid">
                <div>
                    <input type="text" name="userName" placeholder="Name" value="<?php echo $userName; ?>">
                </div>
                <div>
                    <input type="text" name="userPhone" id="ord-phone" placeholder="Phone number" value="<?php echo $userPhone; ?>">
                </div>
            </div>
            <div class="col-md-offset-3 col-md-6 register-bottom-grid">
                <div>
                    <input type="comment" name="userComment" id="ord-comment" placeholder="Comment" value="<?php echo $userComment; ?>">
                </div>
                <input type="submit" name="submit" value="Order" class="pull-right">
            </div>
            <div class="clearfix"> </div>
        </form>
        <div class="col-md-offset-3 col-md-6 reg-errors">

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error):?>
                    <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif;?>
            <?php endif;?>

            <?php endif;?>

        </div>
    </div>
</div>
<!--//content-->

<?php include ROOT . '/views/layouts/footer.php'; ?>















