<?php include ROOT . '/views/layouts/header.php'; ?>

<!--content-->
    <div class="container">
        <div class="account">
            <h1>Edit user account</h1>
            <?php if ($result): ?>
                <h3>User data updated!</h3>
                <p class="text-center"><a href="/cabinet">Back to Account</a></p>
            <?php else: ?>
            <div class="account-pass">
                <div class="col-md-offset-3 col-md-6 account-top">
                    <form action="#" method="post">
                        <div>
                            <input placeholder="Name" type="text" name="name" value="<?php echo $name; ?>">
                        </div>
                        <div>
                            <input placeholder="Password" type="password" name="password" value="<?php echo $password; ?>">
                        </div>
                            <input type="submit" name="submit" class="pull-right" value="Save">
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
            <?php endif;?>
        </div>
    </div>
<!--//content-->

<?php include ROOT . '/views/layouts/footer.php'; ?>