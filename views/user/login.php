<?php include ROOT . '/views/layouts/header.php'; ?>

<!--content-->
    <div class="container">
        <div class="account">
            <h1>Account</h1>
            <div class="account-pass">
                <div class="col-md-offset-3 col-md-6 account-top">
                    <form action="//" method="post">
                        <div>
                            <input placeholder="Email" type="text" name="email" value="<?php echo $email; ?>">
                        </div>
                        <div>
                            <input placeholder="Password" type="password" name="password" value="<?php echo $password; ?>">
                        </div>
                        <input type="submit" name="submit" class="pull-right" value="Login">
                    </form>
                </div>
                <div class="col-md-offset-3 col-md-6 reg-errors">
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error):?>
                                <li><?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif;?>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
<!--//content-->

<?php include ROOT . '/views/layouts/footer.php'; ?>