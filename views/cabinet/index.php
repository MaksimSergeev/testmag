<?php include ROOT . '/views/layouts/header.php'; ?>

    <!--content-->
    <section>
        <div class="container">
            <div class="cabinet">
                <h1>User Cabinet</h1>
                <h3>Hello, <?php echo $user['name']; ?>!</h3>
                <div class="col-md-offset-3 col-md-6 list-acc">
                    <ul>
                        <li><a href="/cabinet/edit">Edit user account</a></li>
                        <li><a href="/cabinet/history">List user orders</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--content-->

<?php include ROOT . '/views/layouts/footer.php'; ?>