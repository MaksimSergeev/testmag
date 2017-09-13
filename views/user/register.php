<?php include ROOT . '/views/layouts/header.php'; ?>

<!--content-->
<div class=" container">
    <div class=" register">
        <?php if ($result): ?>
            <div class="register-complete" style="">
                <h1>Registration complite!</h1>
                <h3>Now you can login as a user.</h3>
            </div>
        <?php else: ?>
        <h1>Register</h1>
        <form action="//" method="post">

            <div class="col-md-offset-3 col-md-6 register-top-grid">
                <div>
                    <input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>">
                </div>
                <div>
                    <input type="email" name="email" placeholder="Email Address" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="col-md-offset-3 col-md-6 register-bottom-grid">
                <div>
                    <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>">
                </div>
                <div>
                    <input type="password" name="conf_password" placeholder="Confirm Password" value="<?php echo $password; ?>">
                </div>
                <input type="submit" name="submit" value="Submit" class="pull-right">
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
        </div>
    </div>
</div>
<!--//content-->

<?php include ROOT . '/views/layouts/footer.php'; ?>















