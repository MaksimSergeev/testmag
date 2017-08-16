<!DOCTYPE html>
<html>

<head>
    <title>TestMag | Home</title>
    <link href="/template/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="/template/js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="/template/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <!-- start menu -->
    <link href="/template/css/memenu.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="/template/js/memenu.js"></script>
    <script>
        $(document).ready(function () {
            $(".memenu").memenu();
        });
    </script>
    <script src="/template/js/simpleCart.min.js"></script>
</head>

<body>
<!--header-->
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="search">
                <form>
                    <input type="text" value="Search " onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="Go">
                </form>
            </div>
            <div class="header-left">
                <ul>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                </ul>
                <div class="cart box_1">
                    <a href="checkout.html">
                        <h3>
                            <div class="total">
                                <span class="simpleCart_total"></span> (<span id="simpleCart_quantity"
                                                                              class="simpleCart_quantity"></span> items)
                            </div>
                            <img src="/template/images/cart.png" alt=""/></h3>
                    </a>
                    <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div class="head-top">
            <div class="logo">
                <a href="index.html"><img src="/template/images/logo.png" alt=""></a>
            </div>
            <div class=" h_menu4">
                <ul class="memenu skyblue">
                    <li class="active grid"><a class="color8" href="index.html">Home</a></li>
                    <li><a class="color1" href="#">Power Tools</a>
                        <div class="mepanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <ul>
                                            <li><a href="products.html">Hammer Drills</a></li>
                                            <li><a href="products.html">Cordless Drills</a></li>
                                            <li><a href="products.html">Drills</a></li>
                                            <li><a href="products.html">Grinders</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <ul>
                                            <li><a href="products.html">Circular Saws</a></li>
                                            <li><a href="products.html">Saws</a></li>
                                            <li><a href="products.html">Nailers</a></li>
                                            <li><a href="products.html">Mixing Tools</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <ul>
                                            <li><a href="products.html">Multi Tools</a></li>
                                            <li><a href="products.html">Sanders</a></li>
                                            <li><a href="products.html">Vacuums</a></li>
                                            <li><a href="products.html">Welders</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a class="color4" href="blog.html">Blog</a></li>
                    <li><a class="color6" href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>