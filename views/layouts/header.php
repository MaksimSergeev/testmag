<!DOCTYPE html>
<html>

<head>
    <title>TestMag</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="/template/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="/template/css/flexslider.css" type="text/css" media="screen"/>
    <link href="/template/css/memenu.css" rel="stylesheet" type="text/css" media="all"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!--//fonts-->
</head>

<body>
<!--header-->
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="search">
                <form>
                    <input type="text" value="Temporarily not working :(" onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Temporarily not working :(';}">
                    <input type="submit" value="Go">
                </form>
            </div>
            <div class="header-left">
                <ul>
                    <?php if (User::isGuest()) : ?>
                        <li><a href="/user/login">Login</a></li>
                    <?php else : ?>
                        <li><a href="/user/logout">Logout</a></li>
                        <li><a href="/cabinet">Account</a></li>
                    <?php endif; ?>
                    <li><a href="/user/register">Register</a></li>
                </ul>
                <div class="cart box_1">
                    <a href="/cart/">
                        <h3>
                            <div class="total">
                                (<span class="cart-count"><?php echo Cart::countItems(); ?></span> items)
                            </div>
                            <img src="/template/images/cart.png" alt=""/></h3>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div class="head-top">
            <div class="logo">
                <a href="/"><img src="/template/images/logo.png" alt=""></a>
            </div>
            <div class=" h_menu4">
                <ul class="memenu skyblue">
                    <li class="active grid"><a class="color2" href="/">Home</a></li>
                    <li><a class="color1" href="/catalog/">Catalog</a></li>
                    <li><a class="color6" href="/contact/">Contact</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>