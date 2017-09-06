<?php include ROOT . '/views/layouts/header.php'; ?>

<!--content-->
<div class=" container">
    <div class=" register">
        <h1>Register</h1>
        <form action="#" method="post">

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
    </div>
</div>
<!--//content-->

<?php include ROOT . '/views/layouts/footer.php'; ?>















